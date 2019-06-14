<link href="/pet/css/plugins/airDatepicker/datepicker.css" rel="stylesheet" />
<link href="/pet/css/plugins/lcSwitch/lc_switch.css" rel="stylesheet" />
<script src="/pet/js/plugins/airDatepicker/datepicker.min.js"></script>
<script src="/pet/js/plugins/airDatepicker/i18n/datepicker.en.js"></script>
<script src="/pet/js/plugins/validate/jquery.validate11.js"></script>
<script src="/pet/js/plugins/lcSwitch/lc_switch.min.js"></script>

<div class="container main-wrapper" style="max-width:45%; max-height:50%;">
        <div class="contert-wrapper pb-15">
            <div class="cell pb-20">
                <h1 class="title" style="padding-left: 110px">INSERT PET</h1>
            </div>
            <form action="" method="post" id="petdetails">
                  <div class="row">
                       <div class="col-md-12">
                           
                                    <div class="row form-row">    
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Name</h4>
                                            <input type="text" class="lettersonly" name="name">
                                        </div>
                                        
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Type</h4>
                                            <input type="text" class="" name="type">
                                        </div>
                                    </div>
     
                           
                           
                                    <div class="row form-row">
                                        
                                        <div class="col-md-4 input-layout">                                            
                                            <h4 class="title">Breed</h4>
                                            <input type="text" class="datepick" data-language="en" name="breed">
                                        </div>
                                        
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Date of Birth</h4>
                                            <input type="text" class="" name="bday">
                                        </div>
                                    </div>
                           
                                    <div class="row form-row">
                                        
                                        <div class="col-md-4">
                                            <h4 class="title">Gender</h4>
                                            <input type="radio" class="pr30" name="gender"
                                                   value="Male"> Male 
                                             <input type="radio" name="gender"
                                            value="Female"> Female
                                        </div>                                      
                                       
                                    </div>
                           
                             </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="bx-but bx-save" name="save" onclick="savePet();" >Save</button>
                                </div>
                            </div>

                    </div>
         </form>
                </div>
            </div>



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
