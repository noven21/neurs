
<?php include_once("../NEURS/templates/adminheaderpanel.php")?>

<body>


  <?php include_once("../NEURS/templates/adminnav.php")?>


  <div class="content">
     <div class="body-item" id="panel">
         <div class="mi-title"> 
             <h4>Projector</h4>
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
                    <th id="aligncenter">Projector Name</th>
              
            
                  
                  </tr>
                </thead>
                    <tbody>
                  
                      <?php foreach($projector as $row) {?>
                      <tr>
                      <th scope="row"><?php echo $row->itemNo; ?></th>
                      <td><?php echo $row->itemName; ?></td>
                  
                      <td><a href="<?php echo site_url('main/editprojector');?>/<?php echo $row->itemNo; ?>"><i class="fas fa-user-edit"></i> Edit</a></td>
                      <td><a href="<?php echo site_url('main/deleteprojector');?>/<?php echo $row->itemNo; ?>"><i class="fas fa-trash-alt"></i> Delete</a></td>
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
                  
                      <?php foreach($deletedprojector as $row) {?>
                      <tr>
                      <th scope="row"><?php echo $row->itemNo; ?></th>
                      <td><?php echo $row->itemName; ?></td>
             
                      <td><a href="<?php echo site_url('main/editprojector');?>/<?php echo $row->itemNo; ?>"><i class="fas fa-user-edit"></i> Edit</a></td>
                      <td><a href="<?php echo site_url('main/retrieveprojector');?>/<?php echo $row->itemNo; ?>"><i class="fas fa-undo-alt"></i> Active</a></td>
                      </tr>
                      <?php } ?>
                    
                    </tbody>
                    
                </table>
                
              </div>
             
            </div>
            <div class="tab-pane fade in" id="add">
                <form method="post" action="<?php echo site_url('main/addprojector')?>">
   
                    <form role="form">
                    <Br>
                        <div class="form-group row">
                    
                        <label class="col-lg-12 col-form-label form-control-label">Add Item</label>
                        <br>
                      <br>
                      <br>
                            <label class="col-lg-3 col-form-label form-control-label">Item Name</label>
                            <div class="col-lg-7">
                                <input class="form-control" id="AddItem" type="text" name="AddItem">
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
     
    </div>

</body>
<div class="foots" id="panel2" >
        <input  type="button" class="btn btn-primary" data-target="#add" data-toggle="tab" value="Add Item">
        </div>

