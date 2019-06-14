<html> 
<body>
<div class="container main-wrapper">    
    <div class="bread-crumb-wrp with-mb">
        <a>Your</a>
        <a>Profile</a>
    </div>
    <div class="content">    
        <div class="contert-wrapper pb-15">

			<div class="tab-content no-border padding-24">
				<div id="home" class="tab-pane in active">
                                            <div class="row">
                                            <?php $row = GetData::getUsrDetails(); ?>
						<div class="col-xs-12 col-sm-3 center">
							<span class="profile-picture">
							<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['usr_propic'] ).'" class="editable img-responsive" alt="Cinque Terre">' ?>
							</span>
							<div class="space space-4"></div>

						</div>

						<div class="col-xs-12 col-sm-9">
							<h2 class="details bg-blue-gradient">
								<span class="middle"><?php echo $row['usr_fname']." ".$row['usr_lname'];?></span>
							</h2>

                                                                <div class="row pb-10">
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> <b>BIRTHDAY :</b> <?php echo $row['usr_b_day'];?> </h4>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> <b>GENDER :</b> <?php echo $row['usr_gender'];?> </h4>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row pb-10">
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> <b>COUNTRY :</b> <?php echo $row['usr_country'];?> </h4>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> <b>TELEPHONE NUMBER :</b> <?php echo $row['usr_telno'];?>  </h4>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row pb-10">
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> <b>EMAIL :</b> <?php echo $row['usr_email'];?></h4>
                                                                    </div>                                                                    
                                                                </div> 
                                                                
                                                        </div>

							
						</div>
                                                    <div class="bulkupload" onclick=""> 
                                                        <h5 style="color:blue;">Change profile picture</h5>
                                                    </div>
                                    
                                        </div>

                                   </div>
                        </div>
            </div>
        </div>
    </body>
</html>
    