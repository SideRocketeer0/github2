<?php
class Users_Model extends CI_Model
{
    function __construct(){
        $this->load->database();
    }
    
    function checkLogin($username = null, $pass = null){
        $search = "SELECT username, password FROM Users WHERE username = '".$username."' AND password = '".sha1($pass)."';";
        $resultsArray = $this->db->query($search)->result_array();
        if($resultsArray){ 
                return  true;
            } else{
                return false;
            }
}
    function isFollowing($follower, $followed){
    $sql = "SELECT followed_username FROM User_Follows WHERE followed_username = '" . $followed ."' AND follower_username = '" . $follower . "';";
    $results = $this->db->query($sql).result_array();
    if($results){
        return true;
    }
        return false;
}
    
    function follow($followed){
        $this->load->library('session');
        if(!isset($_SESSION["username"])){
            $this->load->view("Login");
        } else{
            $sql = "INSERTS INTO User_Follows (followed_username, follower_username) VALUES ('" . $followed . "', '" . $_SESSION["username"] . "');"; 
        }
    }
    
}
?> 