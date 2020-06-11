<!DOCTYPE html>
<html lang="en">

<head>
<?php echo link_tag('assests/css/sb-admin.css'); ?>
<?php echo link_tag('assests/css/custom4.css'); ?>
</head>

  <body>
  <div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="First Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Last Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Blood Type</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">O</option>
          <option value="canada">AB</option>
          <option value="usa">B</option>
          <option value="usa">A</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Phone Number">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>