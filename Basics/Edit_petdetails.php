
        <link href="/pet/css/custom/form.css" rel="stylesheet" />
        <link href="/pet/css/custom/accordion.css" rel="stylesheet" />
        <link href="/pet/css/plugins/airDatepicker/datepicker.css" rel="stylesheet" />
        <script src="/pet/js/custom/form.js"></script>
        <script src="/pet/js/plugins/airDatepicker/datepicker.min.js"></script>
        <script src="/pet/js/plugins/airDatepicker/i18n/datepicker.en.js"></script>
   

         
    <div class="container main-wrapper">    
    <div class="content">    
        <div class="contert-wrapper pb-15">
                <h1 class="title pb-15">Edit Pet Details</h1>
                  <?php $row=GetData::getPetsWithThambnail();?>
                <form method="post" id="edit" >

                                    <div class="row form-row">    
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title"> Name </h4>
                                            <input type="text" class="" name="name" value="<?php echo $row['pet_name']?>">
                                        </div>
                                           
                                        <div class="col-md-4 input-layout">                                            
                                            <h4 class="title">Pet Type</h4>
                                            <input type="text" class="" name="type" value="<?php echo Basic::getTypeByID($row['pet_type']);?>">
                                        </div>
                                    </div>
                           
                           
                                    <div class="row form-row"> 
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Birthday</h4>
                                            <input type="text" class="datepick" name="bday" value="<?php echo $row['pet_birthday']?>">
                                        </div>
   
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Gender</h4>
                                            <form>
                                                <input type="radio" class="" name="gender" checked="true" 
                                                   value="Male"> Male
                                             <input type="radio" class="" name="gender"
                                            value="Female"> Female
                                     
                                            
                                        </div>
                                    </div>   
                                   
                                    <div class="row form-row"> 
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Breed</h4>
                                            <input type="text" class="" name="breed" value="<?php echo selectionBox::selectBreed();?>">
                                        </div>

                             
                                        <div class="col-md-4 input-layout">
                                            <h4 class="title">Pet Note</h4>
                                            <input type="text" class="" name="note" value="<?php echo $row['pet_note']?>">
                                        </div>
                                    </div>
                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="bx-but bx-save" name="save" onclick="UpdatePet();" >UPDATE</button>
                                        </div>
                                    </div>
                                    </form>
                
                                    </div>
                                    </div>
                             </div>


<script>
    $('.datepick').datepicker({
        language: 'en'
    });
    
   function UpdatePet(){
       jQuery.ajax({
        type: "POST",
        url: '/pet/Controllers/actionUpdatePet.php',
        dataType: 'json',
        data: $('#edit').serialize(),

        success: function (obj) {
           console.log(obj.code); 
            }
        });
   } 
    
</script>  