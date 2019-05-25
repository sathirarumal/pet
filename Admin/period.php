        <link href="/pet/css/custom/form.css" rel="stylesheet" />
        <link href="/pet/css/custom/accordion.css" rel="stylesheet" />
        <script src="/pet/js/custom/form.js"></script>
    <div class="container main-wrapper">    
    <div class="bread-crumb-wrp with-mb">
        <a>Administrator</a>
        <a>Pet-Period</a>
    </div>
    <div class="content">    
        <div class="contert-wrapper pb-15">
            <div class="cell pb-30">
                <h1 class="title">Period</h1>
                <h6 class="title mt-2"></h6>
            </div>
            <form action="" method="post" id="addperiod">
                  <div class="row">
                       <div class="col-md-12">
                           
                                    <div class="row form-row">    
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Enter Period</h4>
                                            <input type="text" class="" name="pname">
                                        </div>
                                        </div>
                           
                             </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="bx-but bx-save" onclick="addperiods();" >ADD</button>
                                </div>
                            </div>

                    </div>
            </form>
                </div>
            </div>   

<script>
                
function addperiods(){
        //console.log('dsds') 
        jQuery.ajax({
        type: "POST",
        url: '/pet/Controllers/actionAddPeriod.php',
        dataType: 'json',
        data: $('#addperiod').serialize(),

        success: function (obj,Success) {
                  if( !('error' in obj) ) {
                      Success = obj.result;
                  }
                  else {
                      console.log(obj.error);
                  }
            }
        });
     }
        
</script>  