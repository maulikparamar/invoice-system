<script type="text/javascript" src="assets/party.init.js"></script>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

 <div class="row">
                            <div class="col-lg-20" style="width: 100%;">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="header-title">Edit Your Profile</h4>
                                        <form class="custom-validation"method="post" enctype="multipart/form-data" id="form">
                                               <input type="hidden" name="action" value="profile">
                                             <input type="hidden" name="id" value="0"  id="id">

                                            <div class="form-group" style="float: left;width: 50%;">
                                                <label>Username</label><br>
                                                <input type="text" class="form-control" style="width: 100%;"  required placeholder="<?=$_SESSION['name']?>" disabled/>
                                            </div>

                                            <div style="float: right; width: 48%;" class="form-group">
                                                <label>Change username</label><br>
                                                <input type="text" class="form-control" style="width: 100%;" required placeholder="Enter username" name="username" id="username" />
                                            </div><br><br>
        
                                            <div class="form-group">
                                                <label>Number</label><br>
                                                <div>
                                                    <input type="number" class="form-control" required
                                                            placeholder="Number" name="number" id="number" />
                                                </div>
                                            </div><br><br>
        
                                            <div class="form-group">
                                                <label>E-Mail</label><br>
                                                <div>
                                                    <input type="email" class="form-control" required
                                                            parsley-type="email" placeholder="Enter a valid e-mail" name="email" id="email"/>
                                                </div>
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Job Profile URL</label><br>
                                                <div>
                                                    <input parsley-type="url" type="url" class="form-control"
                                                            required placeholder="URL" name="job" id="job"/>
                                                </div>
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Birthdate</label><br>
                                                <div>
                                                    <input data-parsley-type="digits" type="date"
                                                            class="form-control" required
                                                            placeholder="Enter only digits" name="birthdate" id="birthdate"/>
                                                </div>
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Your image to upload</label>
                                                <div>
                                                    <input type="hidden" name="kkkk" value="">
                                                <input type="file"  name="image" id="image">
                                                
                                                </div>
                                            </div><br><br>
                                            <div class="form-group">
                                                <label>Textarea</label>
                                                <div>
                                                    <textarea required class="form-control" rows="5" name="textarea" id="textarea"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div>
                                                     <input type="button" name="submit" value="submit" class="btn btn-primary waves-effect waves-light mr-1" onclick="profile()" style="width: 9%;">
                                                    <button type="reset" class="btn btn-secondary waves-effect" >
                                                        Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </form>                            
                                    </div>
                                </div>
                            </div>
