<html>
    <head>
        <!--====================================================================
        Style sheet
       =====================================================================-->
        <link href="/pet/fonts/font.css" rel="stylesheet" />
        <link href="/pet/css/bootstrap.css" rel="stylesheet" />
        <link href="/pet/css/custom/normalize.css" rel="stylesheet" />
        <link href="/pet/css/custom/button.css" rel="stylesheet" />
        <link href="/pet/css/custom/common.css" rel="stylesheet" />
        <link href="/pet/css/custom/mainmenu.css" rel="stylesheet" />
        <link href="/pet/css/custom/form.css" rel="stylesheet" />
        <link href="/pet/css/custom/accordion.css" rel="stylesheet" />
        <link href="/pet/css/custom/login.css" rel="stylesheet" />
        
        <!--====================================================================
        Java script
        =====================================================================-->
        <script src="/pet/js/jquery.min.js"></script>
        <script src="/pet/js/jquery-1.11.2.min.js"></script>
        <script src="/pet/js/jquery-ui-1.12.0.js"></script>
        <script src="/pet/js/bootstrap.min.js"></script>
        <script src="/pet/js/custom/custom-plugins-collections.js"></script>
        <script src="/pet/js/custom/common.js"></script>
        <script src="/pet/js/custom/form.js"></script>
        
        <!-- =====================================================================-->
        <?php $root=$_SERVER['DOCUMENT_ROOT'];
              //include("$root/pet/Models/GetData.php");
              include("$root/pet/Controllers/Basic.php");
              session_start();
              ?>
    </head>
    <body>
    <div class="wrapper fadeInDown">
     <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
        <h3 class="details bg-blue">Sign Up</h3>
    </div>

    <!-- Login Form -->
    <form action="" method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="save" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
      or
      <a class="underlineHover red ml-15" href="/pet/rashini/register.php">REGISTER</a>
    </div>

    </div>
    </div>
    </body>
</html>

<?php 
    if(isset($_POST['save'])){

        $username=$_POST['username'];
        $password=$_POST['password'];
        Basic::login($username,$password);
    }

?>