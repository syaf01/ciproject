<!doctype html>
<html>
    <head>
        <title>Donation History</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head> 
    <body>
        <h2 style="margin-top:0px">Insert Donation History</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="date">Date <?php echo form_error('Date') ?></label>
            <input type="text" class="form-control" name="Date" id="Date" placeholder="Date" value="<?php echo $Date; ?>" />
        </div>
	    <div class="form-group">
            <label for="time">Time <?php echo form_error('Time') ?></label>
            <input type="text" class="form-control" name="Time" id="Time" placeholder="Time" value="<?php echo $Time; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Branch <?php echo form_error('Branch') ?></label>
            <input type="text" class="form-control" name="Branch" id="Branch" placeholder="Branch" value="<?php echo $Branch; ?>" />
        </div>
	    <input type="hidden" name="tblusers_id" value="<?php echo $tblusers_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('user/history') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>