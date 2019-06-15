
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
              include("$root/pet/Models/selectionBox.php");
              
              session_start();
              //$_SESSION['usr_id']=1;
              ?>
        
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header navbar-left">
                <img src="/pet/images/logo.png" style="width:50px;height:50px">
            </div>
            <div class="navbar-header navbar-left pr-30">
                <h1 class="navbar white pt-20" style="font-family:Times New Roman">PET CARE</h1>
            </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pt-20">
                    <li><a href="#" >HOME</a></li>
                    <li><a href="#">GALLERY</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">MANAGE PETS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">FOODS</a></li>
                            <li class="divider"></li>
                            <li><a href="#">VACCINES</a></li>
                            <li class="divider"></li>
                            <li><a href="#">MEDICINES</a></li>
                            <li class="divider"></li>
                            <li><a href="#">DAILY ACTIVITIES</a></li>                            
                        </ul>
                        </li>
                </ul>
               <ul class="nav navbar-nav navbar-right pt-15">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:#FFFFFF"><span class="glyphicon glyphicon-user" ></span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"> MY PROFILE</a></li>
                            <li><a href="#">SETTINGS</a></li>
                            <li class="divider"></li>
                            <li><a href="#">LOG OUT</a></li>
                        </ul>
                    </li>                    
                </ul>            
            </div><!-- /.navbar-collapse -->
        </div> 
    </nav>
   
        <div class="insert">
            <?php include 'insertPet.php'; ?>            
        </div>
        
        
    </body>   
    
    
    
</html>
