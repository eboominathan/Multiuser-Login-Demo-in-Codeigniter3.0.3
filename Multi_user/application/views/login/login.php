<title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
<script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<!-- Message Notification here  -->


<?php $msg = $this->session->flashdata('msg1'); if((isset($msg)) && (!empty($msg))) { ?>
<div class="alert alert-danger">
 <button class="close" data-dismiss="alert">x</button>
 <?php print_r($msg); ?>
</div>
<?php } ?>



<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
<div class="alert alert-success">
 <button class="close" data-dismiss="alert">x</button>
 <?php print_r($msg); ?>
</div>
<?php } ?>



<form method="post" action="<?php echo base_url();?>login/validate" method="post" id="login">
  <div class='preload login--container'>
    <h1><strong>Welcome To Multi User Login Demo </strong></h1>
    <div class='login--form'>

      <div class='login--username-container'>
        <label>Username</label>
        <input autofocus placeholder='Username' type='text' name="username" required>
      </div>
      <div class='login--password-container'>
        <label>Password</label>
        <input placeholder='Password' type='password' name="password" required>
        <button class='login--login-submit'>Login</button>
        <button class="js-toggle-login" type="button">Cancel</button>

      </div>
    </div>
    <div class='login--toggle-container'>

      <small>Hey you,</small>
      <div class='js-toggle-login'>Click Me!</div>   
    </div>
  </div>
</form>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>Admin</h2>

      <p><h4> Username :admin</h4></p>
      <p> <h4>Password : admin123 </h4></p>
    </div>  
    <div class="col-md-4">
      <h2>Staff</h2>      
      <p><h4> Username :staff</h4></p>
      <p><h4>Password : staff123</h4></p>
    </div>

     <div class="col-md-4">
      <h2>Happy To help !</h2>      
      <p><h4><a href="https://www.facebook.com/eboominathan" target="_blank" class="btn btn-primary">by Boominathan</a></h4></p>
    </div>
  </div>
  </div>

  <footer><h4>Note: You Can open Both Admin and Staff in single browser</h4>

  <h4>Click here to know next demo work!
  <a href="<?php echo base_url();?>login/next_demo" target="_blank" class="btn btn-primary">Next</a>
  </h4>
  </footer>

  


















  <script type="text/javascript">
    (function () {
      $(function () {
        $('.login--container').removeClass('preload');
        this.timer = window.setTimeout(function (_this) {
          return function () {
            return $('.login--container').toggleClass('login--active');
          };
        }(this), 2000);

        return $('.js-toggle-login').click(function (_this) {
          return function () {
            window.clearTimeout(_this.timer);
            $('.login--container').toggleClass('login--active');
            return $('.login--username-container input').focus();
          };
        }(this));
      });
    }.call(this));
  </script>