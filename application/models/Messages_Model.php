<?php
    class Messages_Model extends CI_Model
    {
        
    public function __construct() {
        $this->load->database();
        
    }
        
    function getMessagesByPoster($name){
            $results = "SELECT * FROM Messages WHERE user_username='".$name."' ORDER BY posted_at DESC";
            $resultsArray = $this->db->query($results);
            return $resultsArray->result_array();
    }
    
        
 
    function searchMessages($string){
        $results = "SELECT * FROM Messages WHERE text LIKE '%".$string."%' ORDER BY posted_at DESC";
        $resultsArray = $this->db->query($results);
        return $resultsArray->result_array();
    }
        
    function insertMessage($poster, $string){
       $this->db->query("INSERT INTO Messages(text, posted_at, user_username) VALUES ('".$string."','".date("Y-m-d H:i:s"). "','".$poster."')");
    }


function getFollowedMessages($name){
    $sql = "SELECT followed_username FROM User_Follows WHERE follower_username = '" . $name ."';";
    $results = $this->db->query($sql);
    $sql2 = "SELECT * FROM Messages WHERE user_username = ''";
    foreach($results->result_array() as $i){
        $sql2 .= " OR user_username = '" .$i["followed_username"]. "'";
    }
    $sql2 .= "ORDER BY posted_at DESC";
    $results = $this->db->query($sql2);
    return $results->result_array();
    }
}
?>