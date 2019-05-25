<link href="/pet/css/plugins/airDatepicker/datepicker.css" rel="stylesheet" />
<link href="/pet/css/plugins/lcSwitch/lc_switch.css" rel="stylesheet" />
<script src="/pet/js/plugins/airDatepicker/datepicker.min.js"></script>
<script src="/pet/js/plugins/airDatepicker/i18n/datepicker.en.js"></script>
<script src="/pet/js/plugins/validate/jquery.validate11.js"></script>
<script src="/pet/js/plugins/lcSwitch/lc_switch.min.js"></script>


<div class="container main-wrapper" style="max-width:45%; max-height:50%;">
        <div class="contert-wrapper pb-15">
            <div class="cell pb-20">
                <h1 class="title">SCHEDULE MED</h1>
            </div>
            <form action="" method="post" id="meds">
                  <div class="row">
                       <div class="col-md-12">
                           
                                    <div class="row form-row">    
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">MEDICINE</h4>
                                            <input type="text" class="lettersonly" name="mname">
                                        </div>
                                        
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">MEDICINE TYPE</h4>
                                            <input type="text" class="" name="mtype">
                                        </div>
                                    </div>
                           
                                    <div class="row form-row">
                                        <div class="col-md-4 input-layout pl-20" style="width:170px">
                                        <h5 class="title">@ GIve It Once ?</h5>
                                        </div>
                                        <div class="col-md-4 input-layout">
                                        <input type="checkbox" class="lcs_switch  lcs_checkbox_switch lcs_on" value="1" uncheckvalue uncheckValue="0" name="isDate"/>
                                        </div>
                                    </div>
                                    
                                    <div class="row form-row" id="forDate">     
                                        <div class="col-md-4 input-layout">                                            
                                            <h4 class="title">Date</h4>
                                            <input type="text" class="datepick" data-language="en" name="date">
                                        </div>
                                    </div>
                           
                           
                                    <div class="row form-row" id="forPeriod">
                                        
                                        <div class="col-md-4 input-layout">                                            
                                            <h4 class="title">Initial Date</h4>
                                            <input type="text" class="datepick" data-language="en" name="date">
                                        </div>
                                        
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Period Type</h4>
                                            <input type="text" class="" name="fptype">
                                        </div>
                                        
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Period Count</h4>
                                            <input type="text" class="" name="fperiodcount">
                                        </div>                                       
                                       
                                    </div>
                           
                             </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="bx-but bx-save" name="save" onclick="saveMeds();" >Save</button>
                                </div>
                            </div>

                    </div>
         </form>
                </div>
            </div>



<script>
        
    $('.datepick').datepicker({
        language: 'en'
    });
    
    $('input').lc_switch();
    
    $(function(){       
        $('#forDate').hide(); 
         
    });
    
    $('body').delegate('.lcs_switch', 'lcs-on', function() {       
        $('#forDate').show();
        $('#forPeriod').hide();      
    });
    
    $('body').delegate('.lcs_switch', 'lcs-off', function() {       
        $('#forPeriod').show();
        $('#forDate').hide();      
    });

        
     function saveMeds()
     {
         //console.log("sdsdsd");
        jQuery.ajax({
        type: "POST",
        url: '/pet/Controllers/actionAddMeds.php',
        dataType: 'json',
        data: $('#meds').serialize(),

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