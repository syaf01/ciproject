<!doctype html>
<html>
    <head>
        <title>History Detail</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">History Detail</h2>
        <table class="table">
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Time</td><td><?php echo $time; ?></td></tr>
	    <tr><td>Hospital</td><td><?php echo $hId; ?></td></tr>
	    <tr><td>Blood Drive</td><td><?php echo $dId; ?></td></tr>
	    <tr><td>Donation Type</td><td><?php echo $donateId; ?></td></tr>
	    <!--<tr><td>Tblusers Id</td><td><?php echo $tblusers_id; ?></td></tr>-->
	    <tr><td></td><td><a href="<?php echo site_url('user/history') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>