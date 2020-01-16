<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

function index(){
    $this->load->view("ViewMessages");
}
    function view($name){
    $this->load->model("Messages_Model");
    $data["messages"] = $this->Messages_Model->getMessagesByPoster($name);
    $this->load->view("ViewMessages", $data);
    //$this->load->model("Users_Model");
    //$this->load->libary('session');
    //$this->Users_Model->isFollowing($name);
}

function login(){
    $this->load->view("Login");
}

    function doLogin(){ 
    $this->load->model("Users_Model");
    $password = $this->input->post('password');
    $username = $this->input->post('username');
    if($this->Users_Model->checkLogin($username, $password)){    
        $this->load->library('session');
        $_SESSION["username"] = $username;
        $data["user"] = $username;
        $this->view($username, $data); 
    } else {
        echo "Login Failed: Please try again.";
        $message = "Error, Login not correct";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $this->load->view("Login");
            
}
}
    
function logout(){
    $this->load->library('session');
    $_SESSION = array();
    session_destroy();
    $this->load->view("Login");
}

function follow($followed){
    $this->load->model("Users_Model");
    $this->Users_Model->follow($followed);
    $this->load->libary('session');
    $data["messages"] = $this->Messages_Model->getMessagesByPoster($_SESSION["username"]);
    $this->load->view("ViewMessages", $data);
    
}
    
    function feed($name){
    $this->load->model("Messages_Model");
    $results["messages"] = $this->Messages_Model->getFollowedMessages($name);
    $this->load->view("ViewMessages", $results);
}
}
    ///////////got to do last three controllers, design and check messages model
    
?>
