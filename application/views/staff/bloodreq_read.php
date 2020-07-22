<!doctype html>
<html>
    <head>
        <title>Detail of Blood Request</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Detail of Blood Request</h2>
        <table class="table">
	    <tr><td>Branch</td><td><?php echo $branch; ?></td></tr>
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Time</td><td><?php echo $time; ?></td></tr>
	    <tr><td>BloodType</td><td><?php echo $bloodType; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('staff/bloodreq') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>