<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalContactForm">JOIN</button>
              <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Join us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="fname">First name</label>
          <input type="text" id="fname" class="form-control validate">
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="lname">Last Name</label>
          <input type="text" id="lname" class="form-control validate">
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="btype">Blood Type</label>
          <select class="browser-default custom-select">
            <option selected>-</option>
            <option value="1">O</option>
            <option value="2">AB</option>
            <option value="3">B</option>
            <option value="3">A</option>
          </select>
        </div>

        <div class="md-form">
          <label data-error="wrong" data-success="right" for="pnum">Phone Number</label>
          <input type="text" id="pnum" class="form-control validate" rows="4"></input>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-danger btn-block']); ?>
      </div>
    </div>
  </div>
</div>