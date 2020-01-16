<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/CSS.css"/>
</head>
<body>
    <div id="header">
        <div id="title">
            <h1>Dan's Messanger</h1>
        </div>
        <ul>
            <li><a href="<?php echo site_url('User'); ?>">My Messages</a></li>
            <li><a href="<?php echo site_url('Message') ?>">Post a Message</a></li>
            <li><?php echo "<a href=". site_url('Search').">Search</a>"?></li>
            <li><a href="<?php echo site_url('User/view') ?>">followed Messages</a></li>
        </ul>
    </div>
    <div class="container">
        <h2>Log in</h2>
        <form action=<?php 
            echo site_url("user/doLogin");
          ?> method="post">
            Username:
            <input type="text" name="username">
            Password:
            <input type="password" name="password">
            <input type="submit">
        </form>
    </div>
    </body>
</html>