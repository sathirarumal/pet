<?php

$dbs = Connection::connect(); 
$userId = $_SESSION['usr_id'];
if(isset($_POST['uploadbtn'])){
$imageFile = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$insert_image="INSERT INTO user_gallery (pic,ref_usrId) VALUES('$imageFile','$userId')";

$dbs->query($insert_image);
}
?>

<div class="container main-wrapper" style="max-width:21%; max-height:30%;margin-left: 80%">
        <div class="contert-wrapper pb-15">
            <div class="cell pb-20">
                <h1 class="title">UPLOAD</h1>
            </div>
            <form method="POST" action="" enctype="multipart/form-data" id="upload">
                    <input type="file" name="image" id="image">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="bx-but bx-save" name="uploadbtn" >UPLOAD</button>
                        </div>
                    </div>
            </form>
        </div>
        </div>


<!--<script>
                
function uploadImg()
     {
        //console.log("sdsdsd");
        jQuery.ajax({
        type: "POST",
        url: '/pet/Controllers/actionUpload.php',
        dataType: 'json',
        data: $('#upload'),

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
        
</script>  -->
