<!-- Modal -->
<div class="modal fade" id="stuLogModalcenter" tabindex="-1" role="dialog" aria-labelledby="stuLogModalcenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLogModalcenterLongTitle">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- start Student login form -->
        <form id="stdloginform" method="POST">
            <div class="form-group">
                <i class="fa-solid fa-envelope"></i><label for="stdloginemail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" id="stdloginemail" name="stdloginemail" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i></i><label for="stdloginpassword" class="pl-2 font-weight-bold">Password</label>
                <input type="password" class="form-control" id="stdloginpassword" name="stdloginpassword" placeholder="Password">
            </div>
        </form>
<!-- End Student login form -->
      </div>
      <div class="modal-footer">
        <small id="loginMsg"></small>
        <button type="button" class="btn btn-primary" onclick="checkStdLogin()" id="stdloginbtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>