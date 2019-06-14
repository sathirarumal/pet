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
        <link href="/pet/css/plugins/airDatepicker/datepicker.css" rel="stylesheet" />

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
        <script src="/pet/js/plugins/airDatepicker/datepicker.min.js"></script>
        <script src="/pet/js/plugins/airDatepicker/i18n/datepicker.en.js"></script>
        
        <!-- =====================================================================-->
    </head>
    <body>
 <div class="container main-wrapper">   
    <div class="content">  
        <div class="contert-wrapper pb-15">
        <h1 class="title pb-20 pr-30" >Edit User Details</h1>

            <form method="post" id="edit">

                                    <div class="row form-row">    
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">First Name</h4>
                                            <input type="text" class="" name="fname" value="<?php echo $row['usr_fname'];?>">
                                        </div>
                                         
                                        <div class="col-md-4 input-layout col-md-offset-2">                                            
                                            <h4 class="title">Last Name</h4>
                                            <input type="text" class="" name="lname" value="<?php echo $row['usr_lname'];?>">
                                        </div>
                                    </div>
                              
                                    <div class="row form-row"> 
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">Birthday</h4>
                                            <input type="text" class="datepick" data-language="en" name="bday" value="<?php echo $row['usr_b_day'];?>">
                                        </div>
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">Country</h4>
                                            <input type="text" class="" name="country" value="<?php echo $row['usr_country'];?>">
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
                                            <input type="email" class="" name="email" value="<?php echo $row['usr_email'];?>" >
                                        </div>
                                    </div>   
                           
                           
                                    <div class="row form-row">     
                                        <div class="col-md-4 input-layout col-md-offset-2">
                                            <h4 class="title">Telephone Number</h4>
                                            <input type="text" class="" name="pnum" value="<?php echo $row['usr_telno'];?>">
                                        </div>   
                                    </div>
                
                                    <div class="row">
                                        <div class="col-md-8">
                                            <button type="button" class="bx-but bx-save" name="save" onclick="registerThis();" >UPDATE</button>
                                        </div>                                   
                                    </div>
                
                <div class="alert-warning" id="error"></div>
                <div class="alert-success" id="success"></div>
                
                                    </form>
       
                                    </div>
                                  </div>
                        </div>
              
                </body>
</html>

<script>
    $('.datepick').datepicker({
        language: 'en'
    });
    
   function registerThis(){
        jQuery.ajax({
        type: "POST",
        url: '/pet/Controllers/actionUpdateUser.php',
        dataType: 'json',
        data: $('#edit').serialize(),

        success: function (obj) {
           if(obj.code == 300){
               $('#error').html("Update Error ").fadeout(5000);
           }
           else{
               $('#success').html("Updated Successfully").fadeout(5000);
           }
 
            }
        });
   } 
    
</script>    