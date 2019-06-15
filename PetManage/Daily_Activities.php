<link href="/pet/css/plugins/airDatepicker/datepicker.css" rel="stylesheet" />
<link href="/pet/css/plugins/lcSwitch/lc_switch.css" rel="stylesheet" />
<script src="/pet/js/plugins/airDatepicker/datepicker.min.js"></script>
<script src="/pet/js/plugins/airDatepicker/i18n/datepicker.en.js"></script>
<script src="/pet/js/plugins/validate/jquery.validate11.js"></script>
<script src="/pet/js/plugins/lcSwitch/lc_switch.min.js"></script>

   
<div class="container main-wrapper" style="max-width:40%; max-height:35%;">
        <div class="contert-wrapper pb-15">
            <div class="cell pb-20">
                <h1 class="title">DAILY ACTIVITIES</h1>
            </div>
            <form action="" method="post" id="meds">
                  <div class="row">
                       <div class="col-md-12">
                           
                           <div class="row form-row">    
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Date</h4>
                                            <input type="text" class="datepick" name="date" id="date">
                                        </div>
                            </div>
                                        <div class="row form-row">
                                        <div class="col-md-4 input-layout pl-20" style="width:170px">
                                        <h5 class="title">Do you allocated Hours?</h5>
                                        </div>
                                        <div class="col-md-4 input-layout">
                                            <input type="checkbox" class="lcs_switch  lcs_checkbox_switch lcs_on" value="1" uncheckvalue uncheckValue="0" name="istime"/>
                                        </div>
                                        </div> 
                               
                                    <div class="row form-row" id="forDate">     
                                        <div class="col-md-4 input-layout">                                            
                                            <h4 class="title" shorttime="true" >Hours</h4>
                                                <input type="text" name="hours" id="hours">
                                        </div>
                              </div>
                                      <div class="row form-row" id="forPeriod">
                                         <div class="col-md-4 input-layout">                                            
                                            <h4 class="title">StartTime</h4>
                                            <input type="text" class="" id="timer" name="starttime">
                                        </div>
                                        
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">EndTime</h4>
                                            <input type="text" class="" id="timer" name="endtime">
                                        </div>
                                      
                              </div> 
                                   <div class="row form-row"> 
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Events</h4>
                                            <input type="text" class=""name="event" id="event">
                                        </div>
                                    </div> 
                                <div class="row form-row">
                                   <div class="col-md-4 input-layout">
                                            <h4 class="title">Discription</h4>
                                            <input type="text" name="dis" class="" id="dis">
                                        </div>
                                </div>
                    </div>
                 
  
                             <div class="row">
                                <div class="col-md-12">
                                    <button type="Insert" class="bx-but bx-save" name="Insert" onclick="InsertActivity();" >Insert</button>
                                    <button type="Edit" class="bx-but bx-save" name="Edit" onclick="Edit()" >Edit</button>
                                    
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
    $('.timer').bootstrapMaterialDatePicker
            ({
                date: false,
                shortTime: false,
                format: 'HH:mm',
                twelvehour: true
            });

        
     function InsertActivity()
     {
         //console.log("sdsdsd");
        jQuery.ajax({
        type: "POST",
        url: '/pet/Controllers/actionAddActivity.php',
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



