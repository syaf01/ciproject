<!doctype html>
<html>
    <head>
        <title>History</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">History <?php echo $button ?></h2> 
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
            <label for="int">HId <?php echo form_error('hId') ?></label>
            <input type="text" class="form-control" name="hId" id="hId" placeholder="HId" value="<?php echo $hId; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">DId <?php echo form_error('dId') ?></label>
            <input type="text" class="form-control" name="dId" id="dId" placeholder="DId" value="<?php echo $dId; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">DonateId <?php echo form_error('donateId') ?></label>
            <input type="text" class="form-control" name="donateId" id="donateId" placeholder="DonateId" value="<?php echo $donateId; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Tblusers Id <?php echo form_error('tblusers_id') ?></label>
            <input type="text" class="form-control" name="tblusers_id" id="tblusers_id" placeholder="Tblusers Id" value="<?php echo $tblusers_id; ?>" />
        </div>
	    <input type="hidden" name="historyId" value="<?php echo $historyId; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('history') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>