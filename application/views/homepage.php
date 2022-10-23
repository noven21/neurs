
<?php include_once("../NEURS/templates/header.php")?>

<body>
    
   
  

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NEU Website <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Automate</a></li>
       
           
            <li role="separator" class="divider"></li>
            <li><a href="#">New Era University</a></li>
         
          </ul>
        </li>
        <li><a href="#about">About</a></li>
       
      </ul>
      <form class="navbar-form navbar-right"  method = "post" action="<?php echo base_url()?>index.php/main/login_validation">
        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Enter username" required>
          <span class="text-danger"><?php echo form_error('username'); ?></span>
   
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Enter password" required>
          <span class="text-danger"><?php echo form_error('password'); ?></span>
               
        </div>
        <button type="submit" name="submit" value="login" class="btn btn-default">Login</button>
      </form>
     
    </div>
  </div>
</nav>
        
                                
    
    <section class="home-section set-bg" >
        <div class="container" id="pad">
            <div class="row">
                <div class="col-lg-7" id="reg-area">
                    <div class="home-text">
                        
                        <h1>NEU Reservation</h1>
                        <p>For Multimedia Room</p> 
                        <form method="post" action="<?php echo base_url()?>/index.php/calendar/getEvents">
                        <a href="#cal" class="primary-btn" id="viewCalendar">View Calendar</a>	
                        </form>
                    </div>
                </div>
                    <div class="col-lg-5" id="reg-area">
                        <div class="register-text">
                            <div class="section-title">
                                <h2>Signup Now</h2>
                            </div>
                            
                            <form class="register-form" method="post" action="<?php echo site_url('main/create')?>">
                          
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="firstname">First Name</label>
                                        <input type="text"  name="FirstName" placeholder="Enter your firstname" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" name="LastName" placeholder="Enter your lastname" required>  
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="username">Username</label>
                                        <input type="text" name="Username" placeholder="Enter your username" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="password">Password</label>
                                        <input type="password" name="Password" placeholder="Enter your password" required>
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="mobile">Gender</label>
                                        <select id="gender" class="form-control" name="Gender" required>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-7">
                                        <label for="birthday">Birthday</label>
                                        <input class="form-control" type="date" name="Birthday" required>
                                    </div>
                                </div>
                                <button type="submit" class="register-btn">Sign up</button>
                            </form>

                            
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Register Section End -->
    
  
    <!-- Calendar Section -->
        <?php include_once("../NEURS/templates/calendar.php")?>
    <!-- CAlendar Section End -->


    <!-- Footer Section  -->
    <section class="banner-section set-bg">
    <footer id="about" class="site-footer" role="contentinfo">
  <div class="social-wrapper">
    <ul>
      <li>
        <a href="#" target="_blank">
          <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png" alt="Twitter Logo" class="twitter-icon"></a>
      </li>
      <li>
        <a href="#" target="_blank">
          <img src="https://www.mchenryvillage.com/images/instagram-icon.png" alt="Instagram Logo" class="instagram-icon"></a>
      </li>
     
      <li>
        <a href="#" target="_blank">
          <img src="http://www.iconarchive.com/download/i54037/danleech/simple/facebook.ico" alt="Facebook Logo" class="facebook-icon"></a>
      </li>
     
    </ul>
  </div>

  <nav class="footer-nav" role="navigation">
    <p>Copyright &copy;
      <?php echo date("Y"); ?> New Era University</p>
  </nav>
</footer>

    </section>


</body>
 
 <div id="preloder">
        <div class="loader"></div>
    </div> 
</html>