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
                                                                        <h4 class="details"> <b>TYPE :</b> <?php echo Basic::getTypeByID($row['pet_type']);?></h4>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-4 input-layout">
                                                                        <h4 class="details"> <b>BREED :</b>  <?php echo Basic::getBreedByID($row['pet_breed']);?>  </h4>
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
                                        </div>


                                   </div>
                        </div>
            </div>
        </div>
    </div>
    </body>
</html>

  <script>
        
     function savePet()
     {
         //console.log("sdsdsd");
        jQuery.ajax({
        type: "POST",
        url: '/pet/Controllers/actionAddPet.php',
        dataType: 'json',
        data: $('#petdetails').serialize(),

        success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      yourVariable = obj.result;
                  }
                  else {
                      console.log(obj.error);
                  }
            }
        });
     }
        
</script>   
  
