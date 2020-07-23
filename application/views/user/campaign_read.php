<!doctype html>
<html>
    <head>
        <title>Blood Campaign</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head> 
    <body>
        <h2 style="margin-top:0px">Detail of Blood Campaign</h2>
        <table class="table">
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Time</td><td><?php echo $time; ?></td></tr>
	    <tr><td>Location</td><td><?php echo $location; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('user/campaign') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body> 
</html>