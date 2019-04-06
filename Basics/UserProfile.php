
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
              $_SESSION['usr_id']=1;
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
                    <li><a href="/pet/MainDashboard/main.php" >HOME</a></li>
                    <li><a href="/pet/Gallery/Gallery.php">GALLERY</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">MANAGE PETS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/pet/PetManage/food_main.php">FOODS</a></li>
                            <li class="divider"></li>
                            <li><a href="/pet/PetManage/vaccination_main.php">VACCINES</a></li>
                            <li class="divider"></li>
                            <li><a href="/pet/PetManage/med_main.php">MEDICINES</a></li>
                            <li class="divider"></li>
                            <li><a href="/pet/PetManage/dailyactivity_main.php">DAILY ACTIVITIES</a></li>                            
                        </ul>
                        </li>
                        
                    <?php $x=GetData::getUsrType();?>    
                    <?php if($x == 1) { ?>    
                    <li><a href="/pet/Admin/Admin_main.php">ADMIN</a></li>
                    <?php } ?>
                    </ul>
               <ul class="nav navbar-nav navbar-right pt-15">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:#FFFFFF"><span class="glyphicon glyphicon-user" ></span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/pet/Basics/UserProfile.php"> MY PROFILE</a></li>
                            <li><a href="/pet/MainDashboard/Settings.php">SETTINGS</a></li>
                            <li class="divider"></li>
                            <li><a href="/pet/Basics/login.php">LOG OUT</a></li>
                        </ul>
                    </li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown img-wr">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php $row=GetData::getPetsWithThambnail();
                           //echo $row['pet_name']; 
                           echo '<div class="img-wrp--50"><img src="data:image/jpeg;base64,'.base64_encode( $row['pet_pic'] ).'" class="" alt="Cinque Terre"></div>';
                           ?>
                          </a>
                        <ul class="dropdown-menu" >
                         <?php $results= GetData::getPets();
                               while($rows = mysqli_fetch_array($results)){
                                ?>
                                
                            <li onclick="setPetProfile(<?php echo $rows['pet_id']?>);"><a href="#"><?php echo strtoupper($rows['pet_name']);?></a></li>
                                <?php } ?>
                            <li class="divider"></li>
                            <li><a href="/pet/Basics/PetProfile.php">PET PROFILE</a></li>
                        </ul>
                    </li>    
                </ul>              
            </div><!-- /.navbar-collapse -->
        </div> 
    </nav>
        <div class="popup1">
            <?php include 'userDetails.php'; ?>            
        </div>

        
        
    </body>   
    
    
    
</html>

<script>
 
 function setPetProfile(id){
     //console.log(id);
     var extraData = "&petId=" + id;
     jQuery.ajax({
        type: "POST",
        url: 'setPetProfile.php',
        dataType: 'json',
        data: extraData,

        success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      yourVariable = obj.result;
                  }
                  else {
                      console.log(obj.error);
                  }
            }
        });
        location.reload();
 }
    
</script>
