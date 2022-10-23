<header>
<input type="checkbox" id="check" onclick="myFunction()">
  <!--header area start-->
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
  <div class="sidebar">
   <!-- <center>
      <img src='<?php echo base_url('../NEURS/assets/img/onie.jpeg'); ?>' class="profile_image" alt="blablab">
     --><center> <h4> <?php echo $info->FirstName?> <?php echo $info->LastName ?></h4>
    </center>
    <a href="<?php echo site_url('main/reservationlist')?>"><i class="far fa-calendar-alt"></i><span>Reservations</span><i class="fas fa-angle-right"  id="navspace"></i></a>
    <a href="<?php echo site_url('main/items')?>"><i class="fas fa-clipboard"></i><span>Items</span><i class="fas fa-angle-right"  id="navspace"></i></a>
    <a href="<?php echo site_url('main/rooms')?>"><i class="fas fa-door-open"></i><span>Rooms</span><i class="fas fa-angle-right"  id="navspace"></i></a>
    <a href="<?php echo site_url('main/accounts')?>"><i class="far fa-user"></i></i><span>Accounts</span><i class="fas fa-angle-right"  id="navspace"></i></a>
    <a href="<?php echo site_url('main/logout')?>"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>

    </div>
</header>
  <!--sidebar end-->
