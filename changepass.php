<script type="text/javascript" src="assets/party.init.js"></script>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

 <div class="row">
                            <div class="col-lg-20" style="width: 100%;">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="header-title">Change Password</h4>
                                        
        
                                        <form class="custom-validation" id="changepassword">
                                                <input type="hidden" name="action" value="changepassword">
                                             <input type="hidden" name="id" value="0"  id="id">
                                            <div class="form-group">
                                                <label>Old Password</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter old password" id="emp_password" name="emp_password"/>
                                            </div><br><br>
                                             <div class="form-group">
                                                <label>New Password</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Password" id="newpassword" name="newpassword"/>
                                            </div><br><br>
                                             <div class="form-group">
                                                <label>Confirm Password</label><br>
                                                <input type="text" class="form-control" required placeholder="Enter Password" id="newpassword1" name="newpassword1"/>
                                            </div><br><br>
        
                                           
                                            
                                            <div class="form-group mb-0">
                                                <div>
                                                    <input type="button" name="button" value="submit" class="btn btn-primary waves-effect waves-light mr-1" onclick="changepassword()" style="width: 7%;">

                                                    <button type="reset" class="btn btn-secondary waves-effect" href="home.php?p=edit_profile">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>                            
                                    </div>
                                </div>
                            </div>
