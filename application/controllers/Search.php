<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Search extends CI_Controller
{
    function index(){
        $this->load->view("Search_View");
    }
    
    function doSearch(){
        $this->load->model("Messages_Model");
        
        $search = $this->input->get("search");
        $data["messages"] = $this->Messages_Model->searchMessages($search);
        $user["user"] = $username;
        $this->load->view("ViewMessages", $data);
    }
}
?>