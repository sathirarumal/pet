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
							<h2 class="details bg-blue">
                                                            <span class="middle"><?php echo $row['pet_name']?></span>
							</h2>

                                                                <div class="row pb-10">
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> Type : <?php echo Basic::getTypeByID($row['pet_type']);?></h4>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> Breed :  <?php echo Basic::getBreedByID($row['pet_breed']);?>  </h4>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row pb-10">
                                                                    <div class="col-md-4 input-layout">
									<h4 class="details"> Birthday :  <?php echo $row['pet_birthday']?> </h4>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-4 input-layout">
									<h4 class="details"> Gender :  <?php echo $row['pet_gender']?> </h4>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row pb-10">
                                                                    <div class="col-md-4 input-layout">
									<h4 class="details"> Note :  <?php echo $row['pet_note']?> </h4>
                                                                    </div>                                                                    
                                                                </div> 
                                                                
							</div>

							
						</div>
                                        </div>

					<div class="space-20"></div>

					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="widget-box transparent">
								

                                                        </div>
						
					
                                                </div>
                                        </div>
                                   </div>
                        </div>
            </div>
        </div>
    </div>
    </body>
</html>
    
