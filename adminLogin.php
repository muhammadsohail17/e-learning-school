<!-- Modal -->
<div class="modal fade" id="adminloginmodalcenter" tabindex="-1" role="dialog" aria-labelledby="adminloginmodalcenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminloginmodalcenterLongTitle">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- start Admin login form -->
        <form id="stdloginform">
            <div class="form-group">
                <i class="fa-solid fa-envelope"></i><label for="adminloginemail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" id="adminloginemail" name="adminloginemail" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fa-solid fa-lock"></i></i><label for="adminloginpassword" class="pl-2 font-weight-bold">Password</label>
                <input type="password" class="form-control" id="adminloginpassword" name="adminloginpassword" placeholder="Password">
            </div>
        </form>
<!-- End Admin login form -->
      </div>
      <div class="modal-footer">
      <small id="adminLoginMsg"></small>
        <button type="button" class="btn btn-primary" id="adminloginbtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>