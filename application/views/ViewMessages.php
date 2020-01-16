<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/CSS.css"/>
</head>
<body>
    <div id="header">
        <div id="title">
            <h1>Dan's Messanger</h1>
            <span>Logged in:<?php echo  $_SESSION['username']  ?> </span>
        </div>
        <ul>
            <li><a href="<?php echo site_url('User'); ?>">My Messages</a></li>
            <li><a href="<?php echo site_url('Message') ?>">Post a Message</a></li>
            <li><?php echo "<a href=". site_url('Search').">Search</a>"?></li>
            <li><a href="<?php echo site_url('User/view') ?>">followed Messages</a></li>
        </ul>
    </div>
    <div class="container">
    <ul>
        <h1>Messages:</h1>
        <?php 
        
        foreach($messages as $i){ 
                echo "<li>User name: " . $i["user_username"] . "</li>";
                echo "<li>Message: ". $i["text"] ."</li>";
                echo "<li>Time: " . $i["posted_at"] . "</li> <br>";
           } ?>
        
        http://raptor.kent.ac.uk/proj/co539c/microblog/dt356/user/view/dologin

    </ul>
    </div>

</body>

</html>