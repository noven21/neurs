<?php include_once("../NEURS/templates/adminheaderpanel.php")?>

<body>


  <?php include_once("../NEURS/templates/adminnav.php")?>


  <div class="content">
     <div class="body-item" id="panel">
     <div class="mi-title"> 
             <h4>Edit Room</h4>
             </div>
             
         <div class="row my-2">
       
         <div class="col-lg-12 order-lg-1 text-center">
       
      
        </div>
      
                
        <form method="post" action="<?php echo site_url('main/updateroom')?>/<?php echo $edit->roomNo; ?>">
        <div class="col-lg-12 order-lg-1">
        
        
            <div class="tab-content py-4">
               
                    <div class="form-group row"> 
                    <br>    
                            <label class="col-lg-3 col-form-label form-control-label">Room No.</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="roomNo" value="<?php echo $edit->roomNo; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Room Name</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="Room" value="<?php echo $edit->roomName; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-lg-7 col-form-label form-control-label"></label>
                          
                            <div class="col-lg-1">
                         
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                           </form>
                            </div>
                            <div class="col-lg-4">
                            <form method="post" action="<?php echo site_url('main/deleteroompermanently')?>/<?php echo $edit->roomNo; ?>">
                           <input type="submit" class="btn btn-secondary" value="Delete Permanently">
                               </form>
                               </div>
                        </div>
                        
                    
                          
                        </div>
                      
            </div>
        </div>
     
    </div>
</div>
  </div>
</div>
