<header>
<input type="checkbox" id="check" onclick="myFunction()">
  <!--header area start-->
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
  <div class="sidebar">
    <center>
     <!-- <img src='<?php echo base_url('../NEURS/assets/img/onie.jpeg'); ?>' class="profile_image" alt="blablab">
      -->
      <h4> <?php echo $info->FirstName?> <?php echo $info->LastName ?></h4>
    </center>
    <a href="<?php echo site_url('main/userprofile')?>/<?php echo $info->AID; ?>"><i class="far fa-user"></i><span>My Account</span></a>
    <a href="<?php echo site_url('main/calendar')?>"><i class="far fa-calendar-alt"></i><span>View Schedule</span></a>
    <a href="<?php echo site_url('main/userreservationlist')?>/<?php echo $info->AID; ?>"><i class="fas fa-clipboard-list"></i></i><span>My Schedule</span></a>
    <a href="<?php echo site_url('main/reservenow')?>"><i class="far fa-calendar-check"></i></i><span>Reserve Now</span></a>
    <a href="<?php echo site_url('main/logout')?>"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>

    </div>
</header>
  <!--sidebar end-->