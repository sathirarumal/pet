<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="/pet/css/custom/form.css" rel="stylesheet" />
        <link href="/pet/css/custom/accordion.css" rel="stylesheet" />
        <script src="/pet/js/custom/form.js"></script>
    </head>   
    <body>
<div class="container main-wrapper">    
    <div class="bread-crumb-wrp with-mb">
        <a>Pet</a>
        <a>Profile</a>
    </div>
    <div class="content">    
        <div class="contert-wrapper pb-15">

			<div class="tab-content no-border padding-24">
				<div id="home" class="tab-pane in active">
					<div class="row">
                                            <?php $row=GetData::getPetsWithThambnail();?>
						<div class="col-xs-12 col-sm-3 center">
							<span class="profile-picture">
                                                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pet_pic'] ).'" class="editable img-responsive" alt="Cinque Terre">' ?>							
                                                        </span>
							<div class="space space-4"></div>
						</div>

						<div class="col-xs-12 col-sm-9">
							<h2 class="details bg-blue-gradient">
                                                            <span class="middle"><?php echo $row['pet_name']?></span>
							</h2>

                                                                <div class="row pb-10">
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> <b>TYPE :</b> <?php echo $row['pet_type'];?></h4>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> <b>BREED :</b>  <?php echo $row['pet_breed'];?>  </h4>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row pb-10">
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"><b> BIRTHDAY : </b> <?php echo $row['pet_birthday']?> </h4>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> <b>GENDER : </b> <?php echo $row['pet_gender']?> </h4>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row pb-10">
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> <b>NOTE : </b> <?php echo $row['pet_note']?> </h4>
                                                                    </div>                                                                    
                                                                </div> 
                                                    

                                                                
							</div>

							
						</div>
                                        <div class="row">
                                        <div class="col-md-4"  onclick="showUploader();"> 
                                                        <h5 style="color:blue;">Change profile picture</h5>
                                        </div>
                                        
                                        <span class="glyphicon glyphicon-edit col-md-4"  > 
                                            <a href="insertPet_Main.php" style="color:brown;">INSERT NEW PROFILE</a>
                                        </span>
                                    </div>
                                    </div>


                                   </div>
            <div class="panel panel-default" id="userEdit">
                <div class="panel-heading">
                    <form method="POST" action="propicUploadPet.php" enctype="multipart/form-data" id="upload">                   
                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="bx-but bx-save" name="uploadbtn" onclick="getmsg();" >UPLOAD</button>
                        </div>
                    </div>
            </form>
                </div>
            </div>            
                        </div>
            </div>
        </div>
    </div>
    </body>
</html>

<script>
    
$(document).ready(function(){
    $("#userEdit").hide();
});

function showUploader(){
    $("#userEdit").show();   
}         
    
</script>   
  
