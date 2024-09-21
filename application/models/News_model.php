<?php

class News_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function find_all() {
    return $this->db->get('news')->result();
  }

  function read($id) {
    return $this->db->get_where('news', array('id' => $id))->row();
  }

  function save($news) {
    $this->db->insert('news', $news);
  }

  function update($news, $id) {
    $this->db->update('news', $news, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('news', array('id' => $id));
  }

}