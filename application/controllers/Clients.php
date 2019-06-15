<?php
class Clients extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model('client_model');
  }

  public function index()
  {
    $clients = $this->client_model->get_clients();

    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($clients));
  }

}