<?php include_once("../NEURS/templates/userheaderpanel.php")?>

<body>
<?php include_once("../NEURS/templates/usernav.php")?>


  <div class="content">
     <div class="body-item" id="panel">
         <div class="mi-title"> 
             <h4>Reservation</h4>
         </div>
     
            <div class="tab-content py-4">
            <div class="tab-pane fade in active" id="activeacc">
              <div class="table-responsive" id="list">
                <table class="table" >
                <thead class="thead-dark">
                  <tr >
                    <th scope="col">#</th>
                    <th scope="col" id="aligncenter">Name</th>
                    <th scope="col" id="aligncenter">Reserve Date Start</th>
                    <th scope="col" id="aligncenter">Reserve Date End</th>
                    <th scope="col" id="aligncenter">Room</th>
                    <th scope="col" id="aligncenter">Item</th>
                    <th scope="col" id="aligncenter">Instructor</th>
                    <th scope="col" id="aligncenter">College Department</th>  
                    <th scope="col" id="aligncenter">Status</th>
                  
                  </tr>
                </thead>
                    <tbody>
                  
                      <?php foreach($list as $row) {?>
                      <tr>
                      <th scope="row"><?php echo $row->resID; ?></th>
                      <td><?php echo $row->FullName; ?></td>
                      <td><?php echo $row->start; ?></td>
                      <td><?php echo $row->end; ?></td>
                      <td><?php echo $row->room; ?></td>
                      <td><?php echo $row->item; ?></td>
                      <td><?php echo $row->Instructor; ?></td>
                      <td><?php echo $row->collegeDepartment; ?></td>
                      <?php if($row->isDone == 1)
                      {?>
                       <td>Done</td>
                      <?php }
                      else{ ?>
                        <td>Ongoing</td>
                      <?php }?>
                      <td><a href="<?php echo site_url('main/deleteuserreservation');?>/<?php echo $row->resID; ?>"><i class="fas fa-trash-alt"></i> Delete</a></td>
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
                  <th scope="col">#</th>
                    <th scope="col" id="aligncenter">Name</th>
                    <th scope="col" id="aligncenter">Reserve Date Start</th>
                    <th scope="col" id="aligncenter">Reserve Date End</th>
                    <th scope="col" id="aligncenter">Room</th>
                    <th scope="col" id="aligncenter">Item</th>
                    <th scope="col" id="aligncenter">Instructor</th>
                    <th scope="col" id="aligncenter">College Department</th>
                    <th scope="col" id="aligncenter">Contact Number</th>
                    <th scope="col" id="aligncenter">Date Applied</th>
                  
                  </tr>
                </thead>
                    <tbody>
                  
                      <?php foreach($done as $row) {?>
                      <tr>
                      <th scope="row"><?php echo $row->resID; ?></th>
                      <td><?php echo $row->FullName; ?></td>
                      <td><?php echo $row->start; ?></td>
                      <td><?php echo $row->end; ?></td>
                      <td><?php echo $row->room; ?></td>
                      <td><?php echo $row->item; ?></td>
                      <td><?php echo $row->Instructor; ?></td>
                      <td><?php echo $row->collegeDepartment; ?></td>
                      <td><?php echo $row->contactNumber; ?></td>
                      <td><?php echo $row->dateApplied; ?></td>
                      <td><a href="<?php echo site_url('main/editaccount');?>/<?php echo $row->resID; ?>"><i class="fas fa-user-edit"></i> Edit</a></td>
                      <td><a href="<?php echo site_url('main/retrieveaccount');?>/<?php echo $row->resID; ?>"><i class="fas fa-undo-alt"></i> Active</a></td>
                      </tr>
                      <?php } ?>
                    
                    </tbody>
                </table>
              </div>
           </div>
            </div>
            

           
          </div>
        </div>
      </div>
    </div>
</body>
<script>
$(document).ready(function() {
    $('#list').DataTable();
} );
</script>


