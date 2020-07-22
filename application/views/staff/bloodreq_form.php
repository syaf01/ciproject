<!doctype html>
<html>
    <head>
        <title>Request Blood</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style> 
    </head>
    <body>
        <h2 style="margin-top:0px">Request a Blood</h2>
        <form action="<?php echo $action; ?>" method="post"> 
	    <div class="form-group">
            <label for="varchar">Branch <?php echo form_error('branch') ?></label>
            <input type="text" class="form-control" name="branch" id="branch" placeholder="Branch" value="<?php echo $branch; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Date <?php echo form_error('date') ?></label>
            <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
	    <div class="form-group">
            <label for="time">Time <?php echo form_error('time') ?></label>
            <input type="text" class="form-control" name="time" id="time" placeholder="Time" value="<?php echo $time; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">BloodType <?php echo form_error('bloodType') ?></label>
            <input type="text" class="form-control" name="bloodType" id="bloodType" placeholder="BloodType" value="<?php echo $bloodType; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-danger">Request Blood</button> 
	    <a href="<?php echo site_url('staff/bloodreq') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>