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
        <h2 style="margin-top:0px">Create Blood Campaign <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="date">Date <?php echo form_error('date') ?></label>
            <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
	    <div class="form-group">
            <label for="time">Time <?php echo form_error('time') ?></label>
            <input type="text" class="form-control" name="time" id="time" placeholder="Time" value="<?php echo $time; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Location <?php echo form_error('location') ?></label>
            <input type="text" class="form-control" name="location" id="location" placeholder="Location" value="<?php echo $location; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('staff/campaign') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>