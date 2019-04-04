
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
        <link href="/pet/css/custom/register.css" rel="stylesheet" />

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
    </head> 
    <body style="background-image:url(/pet/images/1.jpg);">
    <div class="container main-wrapper">
    <div class="bread-crumb-wrp with-mb">
        <a>User</a>
        <a>Registration</a>
    </div>
        <div class="content" style="padding-left:200px;opacity:0.9 ">    
        <div class="contert-wrapper pb-15" style="width:85%">
            <div class="cell">
                <h1 class="title" style="padding-left: 150px">REGISTRATION</h1>
            </div>
            <form action="" method="post">
                  <div class="row">
                          <div class="col-md-12" style="padding-top:100px; padding-right: 100px; " >
                              <div class="row form-row">    
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">First Name</h4>
                                            <input type="text" class="" name="fname">
                                        </div>
                           
                           
                                         
                                        <div class="col-md-4 input-layout col-md-offset-2">                                            
                                            <h4 class="title">Last Name</h4>
                                            <input type="text" class="" name="lname">
                                        </div>
                                    </div>
                              
                                    <div class="row form-row"> 
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">Birthday</h4>
                                            <input type="text" class="" name="bday">
                                        </div>
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">Country</h4>
                                            <input type="text" class="" name="country">
                                        </div>
                                    </div>
                                    
                                    <div class="row form-row">     
                                        <div class="col-md-4 col-md-offset-2" style="width:100px">
                                            <h4 class="title">Gender</h4>
                                        </div>
                                        <div class="col-md-4 col-md-offset-2">
                                            <input type="radio" class="pr30" name="gender"
                                                   value="Male"> Male 
                                             <input type="radio" name="gender"
                                            value="Female"> Female
                                        </div>
                                    </div>
                              

                           
                                    <div class="row form-row">     
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">Email Address</h4>
                                            <input type="text" class="" name="email">
                                        </div>
                                    </div>   
                           
                           
                                    <div class="row form-row">     
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">Telephone Number</h4>
                                            <input type="text" class="" name="pnum">
                                        </div>   
                                    </div>
                              
">                                    
                                    <div class="row form-row"> 
                                        <hr size="10" noshade>
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">USER NAME</h4>
                                            <input type="text" class="" name="username">
                                        </div>
                                    </div>
                                    <div class="row form-row">                                       
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">PASSWORD</h4>
                                            <input type="password" class="" name="password">
                                        </div>
                                    </div>
                              </div>   
                          </div>
                   </div>
                             
            

                                    <div class="row">
                                        <div class="col-md-8">
                                           <button type="submit" class="bx-but bx-save" name="save" >Save</button>
                                        </div>                                   
                                    </div>
                </form>
        </div>              
        </div>               
    </div>
    </body>
</html>

<?php 
    if(isset($_POST['save'])){
        $f_name=$_POST['fname'];
        $l_name=$_POST['lname'];
        $b_day=$_POST['bday'];
        $gender=$_POST['gender'];
        $country=$_POST['country'];
        $Email=$_POST['email'];
        $phone_num=$_POST['pnum'];
        user_registration::Register($f_name, $l_name, $b_day, $gender, $country, $Email, $phone_num);
        
        $uname=$_POST['username'];
        $pwd=$_POST['password'];
        user_registration::password($uname, $pwd);
    }
?>