
<?php include_once("../NEURS/templates/adminheaderpanel.php")?>

<body>


  <?php include_once("../NEURS/templates/adminnav.php")?>


  <div class="content">
     <div class="body-item" id="panel">
         <div class="mi-title"> 
             <h4>Reservation</h4>
         </div>
         <ul class="nav nav-tabs navbar-right">
                <li class="nav-item active">
                    <a href="#profile" data-target="#activeacc" data-toggle="tab" class="nav-link">Pending</a>
                </li>
                <li class="nav-item">
                    <a href="#account" data-target="#inactive" data-toggle="tab" class="nav-link">Done</a>
                </li>
              
            </ul>

            <div class="tab-content py-4">
            <div class="tab-pane fade in active" id="activeacc">
              <div class="table-responsive">
                <table class="table">
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
                    <th scope="col" id="aligncenter">Contact Number</th>
                    <th scope="col" id="aligncenter">Date Applied</th>
                  
                  </tr>
                </thead>
                    <tbody>
                  
                      <?php foreach($pending as $row) {?>
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
                      <td><a href="<?php echo site_url('main/donereservation');?>/<?php echo $row->resID; ?>"><i class="fas fa-check"></i> Done</a></td>
                     <!-- <td><a href="<?php echo site_url('main/deleteaccount');?>/<?php echo $row->resID; ?>"><i class="fas fa-trash-alt"></i> Delete</a></td>
                     --> </tr>
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
                      <!--<td><a href="<?php echo site_url('main/editaccount');?>/<?php echo $row->resID; ?>"><i class="fas fa-user-edit"></i> Edit</a></td>-->
                      <td><a href="<?php echo site_url('main/retrievereservation');?>/<?php echo $row->resID; ?>"><i class="fas fa-undo-alt"></i> Active</a></td>
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



