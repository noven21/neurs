
<?php include_once("../NEURS/templates/userheaderpanel.php")?>

<body>
<?php include_once("../NEURS/templates/usernav.php")?>
  <!--header area start-->

  <!--header area end-->
  <!--sidebar start-->




  <div class="content">
     <div class="body-item" id="panel">
     <div class="mi-title"> 
             <h4>Reservation</h4>
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

        <form method="post" action="<?php echo site_url('main/reserve_validation')?>">
                       
      
        <div class="col-lg-12 order-lg-1">
        
      
      
            <div class="tab-content py-4">
                <div class="tab-pane fade in active" id="profile">
                    <form role="form">
                        <div class="form-group row">
                        <label class="col-lg-12 col-form-label form-control-label">Instructor</label>
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" name="Instructor" >
                                <br>
                                <label class="col-lg-1 col-form-label form-control-label">Date Start</label>
                            <div class="col-lg-5">
                                <input type='text' class="form-control" name="DateStart" id="dateStart" />
                                
                                <input type='hidden' class="form-control" name="StudentID" id="studentid" value="<?php echo $info->AID?>" />
                               
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar c-btn c-datepicker-btn"></span>
                                </span>
                            
                            </div>
                            <label class="col-lg-1 col-form-label form-control-label">Date End</label>
                            <div class="col-lg-5">
                                <input type='text' class="form-control" name="DateEnd" id="dateEnd" onchange='check_date();'/>
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar c-btn c-datepicker-btn2"></span>
                                </span>
                            
                            </div>
                            </div>
                            
                        </div>
                        
                        <!--<div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Date Start</label>
                            <div class="col-lg-6">
                                <input type='text' class="form-control" name="DateStart" id="start" />
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar c-btn c-datepicker-btn"></span>
                                </span>
                            
                            </div>
                            
                        </div>
                       
                           
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Date End</label>
                            <div class="col-lg-6">
                                <input type='text' class="form-control" name="DateEnd" id="end" />
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar c-btn c-datepicker-btn2"></span>
                                </span>
                            
                            </div>
                        </div>
                        -->
                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label form-control-label">Room</label>
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                            <select id="room" class="form-control" name="roomName">
                                <option value="">Select Room</option>
                                <?php foreach ($room as $showRoom)
                                        {
                                            echo '<option value="'.$showRoom->roomNo.'">'.$showRoom->roomName.'</option>';
                                        }   
                                    ?>
                            </select>
                            
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-lg-12 col-form-label form-control-label">Item</label>
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                            <select id="item" class="form-control" name="itemName">
                                <option value="">Select Item</option>
                                <?php foreach ($projector as $showitem)
                                        {
                                            echo '<option value="'.$showitem->itemNo.'">'.$showitem->itemName.'</option>';
                                        }   
                                    ?>
                            </select>
                            
                            </div>
                        </div>

                        <div class="form-group row">
                        
                        <label class="col-lg-12 col-form-label form-control-label">College Department</label>
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" name="CollegeDepartment">
                            </div>
                        </div>


                        <div class="form-group row">
                        
                        <label class="col-lg-12 col-form-label form-control-label">Contact Number</label>
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" name="ContactNumber">
                            </div>
                        </div>
                      
  
  
                  
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                             
                                <input type="submit" class="btn btn-primary" id="submit" value="Reserve now">
                           
                            </div>
                        </div>
                    </form>
                </div>
            </form>
               
            </div>
        </div>
     
    </div>
</div>
  </div>
</div>
</body>
 </html>   

                
            

<?php include_once("../NEURS/templates/footer.php")?>
<script>
$(document).ready(function(){

$('#room').change(function(){

    var date_start = $('#room').val();
    if(date_start != '')
    {
        $.ajax({
            url:"<?php echo base_url();?>main/getroom",
            method: "POST",
            data: {start: date_start},
            success:function(data)
            {
                $('#item').html(data); 
            }
        })
    }


});




});

</script>