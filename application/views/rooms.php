
<?php include_once("../NEURS/templates/adminheaderpanel.php")?>

<body>


  <?php include_once("../NEURS/templates/adminnav.php")?>


  <div class="content">
     <div class="body-item" id="panel">
         <div class="mi-title"> 
             <h4>Room</h4>
         </div>
         <ul class="nav nav-tabs navbar-right">
                <li class="nav-item active">
                    <a href="#profile" data-target="#activeacc" data-toggle="tab" class="nav-link">Active</a>
                </li>
                <li class="nav-item">
                    <a href="#account" data-target="#inactive" data-toggle="tab" class="nav-link">Not Active</a>
                </li>
                <li class="nav-item">
                    <a href="#add" data-target="#add" data-toggle="tab" class="nav-link"></a>
                </li>
            </ul>

            <div class="tab-content py-4">
            <div class="tab-pane fade in active" id="activeacc">
              <div class="table-responsive">
                <table class="table" >
                <thead class="thead-dark" >
                  <tr>
                    <th>ID</th>
                    <th id="aligncenter">Room Name</th>
              
            
                  
                  </tr>
                </thead>
                    <tbody>
                  
                      <?php foreach($room as $row) {?>
                      <tr>
                      <th scope="row"><?php echo $row->roomNo; ?></th>
                      <td><?php echo $row->roomName; ?></td>
                  
                      <td><a href="<?php echo site_url('main/editroom');?>/<?php echo $row->roomNo; ?>"><i class="fas fa-user-edit"></i> Edit</a></td>
                      <td><a href="<?php echo site_url('main/deleteroom');?>/<?php echo $row->roomNo; ?>"><i class="fas fa-trash-alt"></i> Delete</a></td>
                      </tr>
                      <?php } ?>
                    
                    </tbody>
                </table>
              </div>
           </div>
                <div class="tab-pane fade in" id="inactive">
              <div class="table-responsive">
                <table class="table">
                <thead class="thead-dark">
                  <tr>
                  <th scope="col">ID</th>
                    <th id="aligncenter">Projector Name</th>
                  
                  </tr>
                </thead>
                    <tbody>
                  
                      <?php foreach($deletedroom as $row) {?>
                      <tr>
                      <th scope="row"><?php echo $row->roomNo; ?></th>
                      <td><?php echo $row->roomName; ?></td>
             
                      <td><a href="<?php echo site_url('main/editroom');?>/<?php echo $row->roomNo; ?>"><i class="fas fa-user-edit"></i> Edit</a></td>
                      <td><a href="<?php echo site_url('main/retrieveroom');?>/<?php echo $row->roomNo; ?>"><i class="fas fa-undo-alt"></i> Active</a></td>
                      </tr>
                      <?php } ?>
                    
                    </tbody>
                </table>
              </div>
           </div>
           <div class="tab-pane fade in" id="add">
                <form method="post" action="<?php echo site_url('main/addroom')?>">
   
                    <form role="form">
                    <Br>
                        <div class="form-group row">
                    
                        <label class="col-lg-12 col-form-label form-control-label">Add Room</label>
                        <br>
                      <br>
                      <br>
                            <label class="col-lg-3 col-form-label form-control-label">Room Name</label>
                            <div class="col-lg-7">
                                <input class="form-control" id="AddRoom" type="text" name="AddRoom">
                                <br>
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                           <br>
                     <br>
                             
                            </div>
                        </div>
                       
                        
                    </form>
                </div>
           
            </div>
            
           
          </div>
        </div>
      </div>
    </div>
</body>



<div class="foots" id="panel2" >
<input  type="button" class="btn btn-primary" data-target="#add" data-toggle="tab" value="Add Room">
        </div>