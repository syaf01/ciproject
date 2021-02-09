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
        <h2 style="margin-top:0px">Hospital <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">HName <?php echo form_error('hName') ?></label>
            <input type="text" class="form-control" name="hName" id="hName" placeholder="HName" value="<?php echo $hName; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Address <?php echo form_error('address') ?></label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php echo $address; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">City <?php echo form_error('city') ?></label>
            <input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?php echo $city; ?>" />
        </div>
	    <div class="form-group">
            <label for="bigint">PostalCode <?php echo form_error('postalCode') ?></label>
            <input type="text" class="form-control" name="postalCode" id="postalCode" placeholder="PostalCode" value="<?php echo $postalCode; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Logitude <?php echo form_error('logitude') ?></label>
            <input type="text" class="form-control" name="logitude" id="logitude" placeholder="Logitude" value="<?php echo $logitude; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Latitude <?php echo form_error('latitude') ?></label>
            <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" value="<?php echo $latitude; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">HPhoneNum <?php echo form_error('hPhoneNum') ?></label>
            <input type="text" class="form-control" name="hPhoneNum" id="hPhoneNum" placeholder="HPhoneNum" value="<?php echo $hPhoneNum; ?>" />
        </div>
	    <input type="hidden" name="hId" value="<?php echo $hId; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('hospital') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>