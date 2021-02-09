<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px; 
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Appointment Read</h2>
        <table class="table">
	    <tr><td>Your Name</td><td><?php echo $your_name; ?></td></tr>
	    <tr><td>EmailId</td><td><?php echo $emailId; ?></td></tr>
	    <tr><td>MobileNumber</td><td><?php echo $mobileNumber; ?></td></tr>
	    <tr><td>DonateId</td><td><?php echo $donateId; ?></td></tr>
	    <tr><td>Request Date</td><td><?php echo $request_date; ?></td></tr>
	    <tr><td>Comment</td><td><?php echo $comment; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('user/appointment') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>