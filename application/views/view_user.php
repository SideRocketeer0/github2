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
        <table id="table">
            <tr>
                <th>User's ID</th>
                <th>User's name</th>
            </tr>
            <tr>
                <td> <?php echo $id; ?></td>
                <td> <?php echo $name; ?></td>
            </tr>
        </table>
    </divdiv>
    </body>
</html>