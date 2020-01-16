<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Message extends CI_Controller
{
  function index(){
    $this->load->library('session');
    if(!isset($_SESSION["username"])){
      $this->load->view("Login");
    }
    else{
        $this->load->view("Post");
    }
  }
    
    function doPost(){
        $this->load->library('session');
        if(!isset($_SESSION["username"])){
            $this->load->view("Login");
        } else{
            $this->load->model("Messages_Model");
            $posted = $this->input->post("posted");
            $this->Messages_Model->insertMessage($_SESSION["username"], $posted);
            $data["messages"] = $this->Messages_Model->getMessagesByPoster($_SESSION["username"]);
            $this->load->view("ViewMessages", $data);
        }
    }
}
?>
