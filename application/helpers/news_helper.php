<?php

function news_form() {
  $obj = &get_instance();
  return array(
    'date' => $obj->input->post('date'),
    'content' => $obj->input->post('content'),
  );
}

function news_form_validate() {
  $obj = &get_instance();
  $obj->form_validation->set_rules('date', 'Date', 'required');
  $obj->form_validation->set_rules('content', 'Content', 'required');
}