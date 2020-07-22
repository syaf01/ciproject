<!doctype html>
<html>
    <head>
        <title>Detail</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Donation History Detail</h2>
        <table class="table">
	    <tr><td>Date</td><td><?php echo $Date; ?></td></tr>
	    <tr><td>Time</td><td><?php echo $Time; ?></td></tr>
	    <tr><td>Branch</td><td><?php echo $Branch; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('user/history') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>