<!-- Modal -->
<div class="modal fade" id="stuRegModalcenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalcenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalcenterLongTitle">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- start Student registration form -->
<form id="stdregfrom">
  <div class="form-group">
    <i class="fa-solid fa-user"></i><label for="stdregname" class="pl-2 font-weight-bold">Name</label>
    <input type="text" class="form-control" id="stdregname"placeholder="Name" name="stdregname">
  </div>
  <div class="form-group">
    <i class="fa-solid fa-envelope"></i><label for="stdregemail" class="pl-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" id="stdregemail" name="stdregemail" placeholder="Email">
    <small class="form-text">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fa-solid fa-lock"></i></i><label for="stdregpassword" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="stdregpassword" name="stdregpassword" placeholder="Password">
  </div>
</form>
<!-- End Student registration form -->
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="addStd()">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>