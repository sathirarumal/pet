
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="/pet/css/custom/form.css" rel="stylesheet" />
        <link href="/pet/css/custom/accordion.css" rel="stylesheet" />
        <script src="/pet/js/custom/form.js"></script>
    </head>   
    <body>
<!--    <div class="modal-dialog size-80">
    <div class="modal-content popup">
        <div class="modal-header">
            <button type="button" class="p-close" data-dismiss="modal" aria-label="Close">
                <span>
                    <svg version="1.1" id="Layer_1" x="0px" y="0px" width="15px" height="15px"
                         viewBox="2.5 2.5 15 15">
                    <g>
                    <g>
                    <path d="M17.373,3.471l-0.845-0.842L10,9.159l-6.529-6.53L2.628,3.471l6.529,6.53l-6.529,6.528l0.842,0.842
                          L10,10.844l6.529,6.527l0.844-0.84l-6.53-6.53L17.373,3.471z"/>
                    </g>
                    </g>
                    </svg>
                </span>
            </button>    -->
<div class="container main-wrapper " style="max-width:50%; max-height:50% ">
        <div class="contert-wrapper pb-15">
            <div class="cell pb-10">
                <h1 class="title">Vaccination details</h1>
                <h6 class="title mt-2"></h6>
            </div>
            <form action="" method="post">
                  <div class="row">
                       <div class="col-md-12">
                                    <div class="row form-row">    
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Vaccine Name</h4>
                                            <input type="text" class="" name="vname">
                                        </div>
                                        </div>
                           
                           
                                    <div class="row form-row">     
                                        <div class="col-md-4 input-layout">                                            
                                            <h4 class="title">Date</h4>
                                            <input type="text" class="" name="date">
                                        </div>
                                    </div>
                           
                           
                                    <div class="row form-row"> 
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Vaccination Period</h4>
                                            <input type="text" class="" name="vperiod">
                                        </div>
                                    </div>
                           
                           <div class="row form-row"> 
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Vaccination Type</h4>
                                            <input type="text" class="" name="vtype">
                                        </div>
                                    </div>
                             </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="bx-but bx-save" name="save" >Save</button>
                                </div>
                            </div>

                    </div>
         </form>
                </div>
            </div><!--
        </div>
    </div>-->
    </body>
</html>
<?php 
    if(isset($_POST['save'])){
        $name=$_POST['vname'];
        $date=$_POST['date'];
        $period=$_POST['vperiod'];
        $ptype=$_POST['vtype'];
        $petid=$_SESSION['pet_id'];
        $status=0;
        Insert_Details::Insert_Vaccine($petid, $name, $date, $period, $ptype, $status);
    }






?>