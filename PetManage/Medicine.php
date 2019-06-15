<link href="/pet/css/plugins/airDatepicker/datepicker.css" rel="stylesheet" />
<link href="/pet/css/plugins/lcSwitch/lc_switch.css" rel="stylesheet" />
<script src="/pet/js/plugins/airDatepicker/datepicker.min.js"></script>
<script src="/pet/js/plugins/airDatepicker/i18n/datepicker.en.js"></script>
<script src="/pet/js/plugins/validate/jquery.validate11.js"></script>
<script src="/pet/js/plugins/lcSwitch/lc_switch.min.js"></script>


<div class="container main-wrapper" style="max-width:45%; max-height:50%;">
        <div class="contert-wrapper pb-15">
            <div class="cell pb-20">
                <h1 class="title">MEDICINE SCHEDULE </h1>
            </div>
            <form action="" method="post" id="meds">
                  <div class="row">
                       <div class="col-md-12">
                           
                                    <div class="row form-row">    
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">MEDICINE</h4>
                                            <input type="text" class="lettersonly" name="mname" id="mname" >
                                        </div>
                                        
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">MEDICINE TYPE</h4>
                                            <input type="text" class="" name="mtype" id="mtype" >
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
                                            <input type="text" class="datepick" data-language="en" name="date1" id="date1" >
                                        </div>
                                    </div>
                           
                           
                                    <div class="row form-row" id="forPeriod">
                                        
                                        <div class="col-md-4 input-layout">                                            
                                            <h4 class="title">Initial Date</h4>
                                            <input type="text" class="datepick" data-language="en" name="date2" id="date2" >
                                        </div>
                                        
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Period Type</h4>
                                            <input type="text" class="" name="ptype" id="ptype" placeholder="Enter weeks">
                                            
                                           
                                        </div>
                                        
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Period Count</h4>
                                            <input type="text" class="" name="periodcount" id="periodcount" placeholder="Enter  months">
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
function SaveMed()                                    
{ 
    var Medicine = document.forms["meds"]["mname"];               
    var Medicinetype = document.forms["meds"]["mtype"];    
    var Date = document.forms["meds"]["date1"];  
    var InitialDate =  document.forms["meds"]["date2"];  
    var PeriodType = document.forms["meds"]["ptype"];  
    var PeriodCount = document.forms["meds"]["periodcount"];  
   
    if (mname.value == "")                                  
    { 
        window.alert("Please enter Medicine name."); 
        name.focus(); 
        return false; 
    } 
   
    if (mtype.value == "")                               
    { 
        window.alert("Please enter MedicineType."); 
        name.focus(); 
        return false; 
    } 
       
    if (date.value == "")                                   
    { 
        window.alert("Please select date."); 
        email.focus(); 
        return false; 
    } 
   
    if (date2.value == "")                                   
    { 
        window.alert("Please select Initialdate."); 
        email.focus(); 
        return false; 
    } 
   
    
   
    if (ptype.value == "" )                           
    { 
        int number=0;
        String val=0;
        if(number.length<1 || val.length<10 )
        {
        window.alert("Please enter period ."); 
        phone.focus(); 
        return false; 
    } 
   
     if (periodcount.value == "" )                           
    { 
        int number1=0;
        string val2=0;
        if(number1.length<1 || val2.length<10 )
        {
        window.alert("Please enter period ."); 
        phone.focus(); 
        return false; 
    } 
    return true; 
}</script> 

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