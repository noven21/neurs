<?php include_once("../NEURS/templates/adminheaderpanel.php")?>

<body>


  <?php include_once("../NEURS/templates/adminnav.php")?>


  <div class="content">
     <div class="body-item" id="panel">
     <div class="mi-title"> 
             <h4>Edit Account</h4>
             </div>
             
         <div class="row my-2">
       
         <div class="col-lg-12 order-lg-1 text-center">
       
      
        </div>
      
                
        <form method="post" action="<?php echo site_url('main/updateaccount')?>/<?php echo $edit->AID; ?>">
        <div class="col-lg-12 order-lg-1">
        
        
            <div class="tab-content py-4">
                <div class="tab-pane fade in active" id="profile">
                    <form role="form">
                        <div class="form-group row">
                        <br>
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="Firstname" value="<?php echo $edit->FirstName; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="Lastname" value="<?php echo $edit->LastName; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="email" value="email@gmail.com">
                            </div>
                        </div>
                     
                      
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="" placeholder="Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-4">
                                <input class="form-control" type="text" value="" placeholder="City">
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control" type="text" value="" placeholder="Country">
                            </div>
                        </div>
                  
                    </form>
                </div>
                    <div class="form-group row"> 
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="Username" value="<?php echo $edit->Username; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="password" name="Password" value="<?php echo $edit->Password; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-lg-7 col-form-label form-control-label"></label>
                          
                            <div class="col-lg-1">
                         
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                           
                            </div>
                            <div class="col-lg-4">
                                <form action="<?php echo site_url('main/accounts')?>">
                                <input type="submit" onclick="location.href='../accounts';" class="btn btn-secondary" value="Cancel">
                               </form>
                               </div>
                        </div>
                        
                    
                          
                        </div>
                        </form>
            </div>
        </div>
     
    </div>
</div>
  </div>
</div>
