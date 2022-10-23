
<?php include_once("../NEURS/templates/userheaderpanel.php")?>

<body>
<?php include_once("../NEURS/templates/usernav.php")?>
  <!--header area start-->

  <!--header area end-->
  <!--sidebar start-->




  <div class="content">
     <div class="body-item" id="panel">
     <div class="mi-title"> 
             <h4>My Account</h4>
             </div>
             
        <div class="row my-2">
         <br>
         <div class="col-lg-12 order-lg-1 text-center">
          <!-- <img src="//placehold.it/150" id="upload" class="mx-auto img-fluid img-circle d-block" alt="avatar" width="150" height="150">
            <h6 class="mt-5"></h6>
            <form method="post" id="upload_form" enctype="multipart/form-data">
            <label class="custom-file">
                <input type="file" id="image_file" class="custom-file-input" name="image_file" onchange="document.getElementById('upload').src = window.URL.createObjectURL(this.files[0])">
               <br>
                <input type="submit" name="upload" id="upload" value="Upload" />
            </label>
            </form>
            <br>
            <br>
              -->
        </div>
      
      
        <div class="col-lg-12 order-lg-1">
        
            <ul class="nav nav-tabs">
                <li class="nav-item active">
                    <a href="#profile" data-target="#profile" data-toggle="tab" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="#account" data-target="#account" data-toggle="tab" class="nav-link">Account</a>
                </li>
              
            </ul>
            <form method="post" action="<?php echo site_url('main/updateaccount')?>/<?php echo $info->AID; ?>">
                <div class="tab-content py-4">
                <div class="tab-pane fade in active" id="profile">
                    <form role="form">
                        <div class="form-group row">
                        <br>
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-7">
                                <input class="form-control" type="text" name="Firstname" value="<?php echo $info->FirstName ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-7">
                                <input class="form-control" type="text" name="Lastname" value="<?php echo $info->LastName ?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-lg-12 col-form-label form-control-label">Other Information</label>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Birthday</label>
                            <div class="col-lg-7">
                                <input class="form-control" name="Birthday" type="date" value="<?php echo $info->Birthday?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                            <div class="col-lg-7">
                                <input class="form-control" name="Gender" type="text" value="<?php echo $info->Gender?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-7">
                                <input class="form-control" name="Address" type="text" value="<?php echo $info->Address?>" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-7">
                                <input class="form-control" name="Email" type="text" value="<?php echo $info->Email?>" placeholder="Email">
                            </div>
                        </div>
                      
                  
                        <div class="form-group row">
                            <label class="col-lg-5 col-form-label form-control-label"></label>
                            <div class="col-lg-7">
                             
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </form>
                
                <div class="tab-pane fade in" id="account">
                <form method="post" action="<?php echo site_url('main/updatepassword')?>/<?php echo $info->AID; ?>">
   
                    <form role="form">
                        <div class="form-group row">
                        <br>
                        
                           <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-7">
                                <input class="form-control" type="text" name="Username" value="<?php echo $info->Username ?>">
                            </div>
                            <input class="form-control" id="check_password" type="hidden" name="Password" value="<?php echo $info->Password?>">
                           
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Old Password</label>
                            <div class="col-lg-7">
                                <input class="form-control" id="password" type="password" name="Password"  onkeyup='check_pass();' >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">New password</label>
                            <div class="col-lg-7">
                                <input class="form-control" id="confirm_password" type="password" name="ChangePassword" disabled  >
                                <br>
                                <div class="alert alert-info error" id="error" ></div><span>
                       
                             
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-7">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="submit" class="btn btn-primary" value="Save Changes" id="submit" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
    </div>
</div>
  </div>
</div>
 
</body>
</html>

