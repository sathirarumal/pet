
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
        
        <!--====================================================================
        Java script
        =====================================================================-->
        <script src="/pet/js/jquery.min.js"></script>
        <script src="/pet/js/jquery-1.11.2.min.js"></script>
        <script src="/pet/js/jquery-ui-1.12.0.js"></script>
        <script src="/pet/js/bootstrap.min.js"></script>
        <script src="/pet/js/custom/custom-plugins-collections.js"></script>
        <script src="/pet/js/custom/common.js"></script>
        
        <!-- =====================================================================-->
        <?php $root=$_SERVER['DOCUMENT_ROOT'];
              //include("$root/pet/Models/GetData.php");
              include("$root/pet/Controllers/Basic.php");
              
              session_start();
              //$_SESSION['usr_id']=1;
              ?>
    </head>
    <body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Pet Care</a>
            </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/pet/sathira/main.php" >Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pet<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/pet/madu/test1.php">Foods</a></li>
                            <li><a href="/pet/rashini/vaccination_main.php">Vaccines</a></li>
                            <li><a href="#">medicines</a></li>
                            <li><a href="#">Daily Activities</a></li>                            
                        </ul>
                        </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php $row=GetData::getPetsWithThambnail();
                           //echo $row['pet_name']; 
                           echo '<div class="img-wrp--35"><img src="data:image/jpeg;base64,'.base64_encode( $row['pet_pic'] ).'" class="" alt="Cinque Terre"></div>';
                           ?>
                          </a>
                        <ul class="dropdown-menu" >
                         <?php $results= GetData::getPets();
                               while($rows = mysqli_fetch_array($results)){
                                ?>
                                
                            <li onclick="setPetProfile(<?php echo $rows['pet_id']?>);"><a href="#"><?php echo $rows['pet_name'];?></a></li>
                                <?php } ?>
                            <li class="divider"></li>
                            <li><a href="/pet/rashini/PetProfile.php">Profile</a></li>
                        </ul>
                        </li>    
                    <?php $x=GetData::getUsrType();?>    
                    <?php if($x == 1) { ?>    
                    <li><a href="/pet/kisal/kisal.php">Admin</a></li>
                    <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:#1C88B6" ><span class="glyphicon glyphicon-user "></span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/pet/rashini/UserProfile.php"> My Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Log out</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </div> 
    </nav>

        <div class="popup">
           <?php include 'Medicine.php'; ?>  
        </div>
        
        <div class="popup">
           <?php include 'Edit_petdetails.php'; ?>  
        </div>
        
        <div class="popup">
           <?php include 'Food.php'; ?>  
        </div>
        
        <div class="popup">
           <?php include 'DailyActivities.php'; ?>  
        </div>

        
    </body>   
    
    
    
</html>
