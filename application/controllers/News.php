<?php

class News extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('news_model');
  }

  function index() {
    $data['news'] = $this->news_model->find_all();
    $this->layout->view('news/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $news = news_form();
      news_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->news_model->save($news);
        redirect('news');
      }
    }
    $this->layout->view('news/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $news = news_form();
      news_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->news_model->update($news, $id);
        redirect('news');
      }
    }
    $data['news'] = $this->news_model->read($id);
    $this->layout->view('news/edit', $data);
  }

  function delete($id) {
    $this->news_model->delete($id);
    redirect('news');
  }

}