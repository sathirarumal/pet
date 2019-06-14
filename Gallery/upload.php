
<div class="panel panel-default pt-30 ">
  <div class="panel-heading">
            <form method="POST" action="pictureUpload.php" enctype="multipart/form-data" id="upload">                   
                    <div class="row">
                        <div class="col-md-4">
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="input-layout col-md-4">           
                            <input type="text" class="" id="title" placeholder="Enter Title" name="title">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="bx-but bx-save" name="uploadbtn" onclick="getmsg();" >UPLOAD</button>
                        </div>
                    </div>
            </form>
   </div>
</div>


<script>
       
   function getmsg(){
       var extraData;
        jQuery.ajax({
        type: "POST",
        url: 'pictureUpload.php',
        dataType: 'json',
        data: extraData,

        success: function (obj) {
                  if( obj.code == 300 ) {
                      $('#error').html("Please enter valid Email address").fadeOut(5000);
                  }
                  else if( obj.code == 200 ) {
                      $('#success').html("Successfully shared with " + email ).fadeOut(5000);
                  }
                  else{
                      $('#error').html("Some thing wrong please contact the admin center").fadeOut(5000);
                  }
            }
        });

    }
    return false;
     
 }    
    
    
    
</script>    