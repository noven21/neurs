
<?php include_once("../NEURS/templates/adminheaderpanel.php")?>

<body>


  <?php include_once("../NEURS/templates/adminnav.php")?>


  <div class="content">
     <div class="body-item" id="panel">
         <div class="mi-title"> 
             <h4>Accounts</h4>
         </div>
         <ul class="nav nav-tabs navbar-right">
                <li class="nav-item active">
                    <a href="#profile" data-target="#activeacc" data-toggle="tab" class="nav-link">Active</a>
                </li>
                <li class="nav-item">
                    <a href="#account" data-target="#inactive" data-toggle="tab" class="nav-link">Not Active</a>
                </li>
              
            </ul>

            <div class="tab-content py-4">
            <div class="tab-pane fade in active" id="activeacc">
              <div class="table-responsive" id="account">
                <table class="table">
                <thead class="thead-dark">
                  <tr >
                    <th scope="col">#</th>
                    <th scope="col" id="aligncenter">First</th>
                    <th scope="col" id="aligncenter">Last</th>
                    <th scope="col" id="aligncenter">Username</th>
                    <th scope="col" id="aligncenter">Birthday</th>
                    <th scope="col" id="aligncenter">Gender</th>
                    <th scope="col" id="aligncenter"></th>
                  
                  </tr>
                </thead>
                    <tbody>
                  
                      <?php foreach($list as $row) {?>
                      <tr>
                      <th scope="row"><?php echo $row->AID; ?></th>
                      <td><?php echo $row->FirstName; ?></td>
                      <td><?php echo $row->LastName; ?></td>
                      <td><?php echo $row->Username; ?></td>
                      <td><?php echo $row->Birthday; ?></td>
                      <td><?php echo $row->Gender; ?></td>
                     <!-- <td><a href="<?php echo site_url('main/editaccount');?>/<?php echo $row->AID; ?>"><i class="fas fa-user-edit"></i> Edit</a></td>-->
                      <td><a href="<?php echo site_url('main/deleteaccount');?>/<?php echo $row->AID; ?>"><i class="fas fa-trash-alt"></i> Delete</a></td>
                      </tr>
                      <?php } ?>
                    
                    </tbody>
                 
                      </div>
                </table>
            
              </div>
           </div>
                <div class="tab-pane fade in" id="inactive">
              <div class="table-responsive">
                <table class="table">
                <thead class="thead-dark">
                  <tr>
                  <th scope="col">#</th>
                    <th scope="col" id="aligncenter">First</th>
                    <th scope="col" id="aligncenter">Last</th>
                    <th scope="col" id="aligncenter">Username</th>
                    <th scope="col" id="aligncenter">Birthday</th>
                    <th scope="col" id="aligncenter">Gender</th>
                    <th scope="col" id="aligncenter"></th>
                  
                  </tr>
                </thead>
                    <tbody>
                  
                      <?php foreach($list2 as $row) {?>
                      <tr>
                      <th scope="row"><?php echo $row->AID; ?></th>
                      <td><?php echo $row->FirstName; ?></td>
                      <td><?php echo $row->LastName; ?></td>
                      <td><?php echo $row->Username; ?></td>
                      <td><?php echo $row->Birthday; ?></td>
                      <td><?php echo $row->Gender; ?></td>
                  <!--    <td><a href="<?php echo site_url('main/editaccount');?>/<?php echo $row->AID; ?>"><i class="fas fa-user-edit"></i> Edit</a></td>-->
                      <td><a href="<?php echo site_url('main/retrieveaccount');?>/<?php echo $row->AID; ?>"><i class="fas fa-undo-alt"></i> Active</a></td>
                      </tr>
                      <?php } ?>
                   
                    </tbody>
                 
                      
                      </div>
                      
                </table>
            
         
     
              </div>
              
           </div>
           <div>
           <nav aria-label="Page navigation">
  <ul class="pagination">

    <li class="page-item" ><a class="page-link"  href=<?php echo site_url('main/accounts');?>/<?php echo $links;?></a></li>
             
  </ul>
</nav>
             

           
          </div>
        </div>
      </div>
    </div>
</body>



