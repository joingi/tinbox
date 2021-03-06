<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tinderbox</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/mystyle.css">
</head>
<body>
  <!-- Full width - height background -->
  <div class="background">
    <img src="<?php echo base_url(); ?>public/img/bg-sign-in.png" alt="background-sign-up">
  </div>
<div class="container">
  <div class="row">
     <div class="language-container">
          <div class="col-xs-6 language language-eng">
            <a class="img" href=""><img class="img-responsive pull-right" src="<?php echo base_url(); ?>public/img/e-flag.png" alt="english-flag"></a>
            <span class="break-left"></span>
          </div>
          <div class="col-xs-6 language language-dk">
            <a  class="img" href=""><img class="img-responsive pull-left" src="<?php echo base_url(); ?>public/img/d-flag.png" alt="danish-flag"></a>
            <span class="break"></span>
          </div> <!-- End of Languages -->
      </div>
  </div>
</div>
  <div class="container">
      <div class="row">
          <!--LOGO -->
          <div class="col-xs-offset-1 col-xs-10">
              <div class="logo">
                <img class="img-responsive center-block" src="<?php echo base_url(); ?>public/img/Logo.png" alt="">
              </div>
          </div> <!-- End of LOGO-->
          <!-- Create new account -->
          <div class="col-xs-12">
            <h5 class="new-account">Create a new account</h5>
          </div>
          <!-- FORM -->
          <div class="col-xs-offset-1 col-xs-10 form-sign-up">
            <form method="POST" role="form">
              <?php if (isset($error)) : ?>
                  <h4 style="text-decoration:underline;" class="text-center"><?php echo $error; ?></h4>
              <?php endif; ?>
               <div class="input-group">
                 <span class="input-group-addon icons"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="username" name="username" class="form-control InputEmail" placeholder="USERNAME">
                </div>
                <?php echo form_error('username'); ?>
                <div class="input-group">
                  <span class="input-group-addon icons"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" name="password" class="form-control InputPassword" placeholder="PASSWORD">
                </div>
                 <?php echo form_error('password'); ?>
                <div class="input-group">
                  <span class="input-group-addon icons"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" name="password_confirm" class="form-control InputPassword" placeholder="REPEAT PASSWORD">
                </div>
                 <?php echo form_error('password_confirm'); ?>
                <div class="input-group">
                  <span class="input-group-addon icons"><span class="glyphicon glyphicon-envelope"></span></span>
                  <input type="email" name="email" class="form-control InputPassword" placeholder="EMAIL">
                </div>
                  <?php echo form_error('email'); ?>
                <div class="input-group">
                  <span class="input-group-addon icons"><span class="glyphicon glyphicon-phone"></span></span>
                  <input type="tel" name="mobile" class="form-control InputPassword" placeholder="PHONE NUMBER">
                </div>
                <?php echo form_error('mobile'); ?>
                 <select name="department" class="form-control">
                  <option value="" selected="selected">Choose Department</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
                <?php echo form_error('department'); ?>
                <select name="period" class="form-control">
                  <option value="" selected="selected">Choose period</option>
                  <option value="Before the Festival">Before the Festival</option>
                  <option value="During the Festival">During the Festival </option>
                  <option value="After the Festival">After the Festival</option>
                </select>
                <?php echo form_error('period'); ?>
                <button type="submit" class="btn btn-primary btn-block button-submit">Register</button>
            </form>
          </div> <!-- End of Form -->
          <div class="col-xs-12">
            <h6 class="text-center no-account-title"><a href="/Tinderbox" title=""><span class="glyphicon glyphicon-log-in" style="padding-right:5px;"></span>Go back to login page</a></h6>
          </div> <!-- Go back to log in -->
          <!-- More Information -->
          <div class="col-xs-12">
            <h6 class="text-center no-account-title">Haven't Decided Yet?</h6>
          </div>
          <div class="col-xs-offset-1 col-xs-10">
            <a href="<?php echo base_url();?>index.php/contact"><button type="submit"  class="btn btn-primary btn-block button-submit button-register">more information</button></a>
          </div>
      </div> <!-- END OF THE ROW -->
  </div> <!-- END OF THE CONTAINER -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/main.js"></script>
</body>
</html>