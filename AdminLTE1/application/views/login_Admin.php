<!DOCTYPE html>
<html>
<head>
  <title>EPenduduk LTE | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/css/3-col-portfolio.css" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
    <form class="form-signin" action="<?php echo base_url()?>master/login" method="post">
      <div class="row">
        <div class="form-group col-sm-12">
          <h2 class="form-signin-heading">Please login</h2>
        </div>
        <div class="form-group col-sm-12">
          <input type="text" class="form-control" name="username" value="<?php if(isset($usersession)) { echo $usersession['username'];}; ?>" placeholder="username" required="" autofocus="" />
        </div>
        <div class="form-group col-sm-12">
          <input type="password" class="form-control" name="password" value="<?php if(isset($usersession)) { echo $usersession['password'];}; ?>" placeholder="Password" required=""/>
        </div>      
        <div class="form-group col-sm-12">
          <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
        </div>
        <div class="form-group col-sm-12">
          <button class="btn btn-lg btn-primary btn-block" id="btnt" type="submit">Login</button>   
        </div>
      </div>     
      
    </form>
  </div>

  <style type="text/css">
  @import "bourbon";

  body {
    background: #eee !important;  
  }

  .wrapper {  
    margin-top: 80px;
    margin-bottom: 80px;
  }

  .form-signin {
    max-width: 380px;
    padding: 15px 35px 45px;
    margin: 0 auto;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,0.1);  

    .form-signin-heading,
    .checkbox {
      margin-bottom: 30px;
    }

    .checkbox {
      font-weight: normal;
    }

    .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      @include box-sizing(border-box);

      &:focus {
        z-index: 2;
      }
    }

    input[type="text"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    input[type="password"] {
      margin-bottom: 20px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  }

</style>
</body>

 <!-- jQuery 3 -->
 <script src="<?php echo base_url()?>/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="<?php echo base_url()?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){
   $('#notifications').slideDown('slow').delay(2500).slideUp('slow');
 });
</script>

</html>

