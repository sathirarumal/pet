<div class="panel panel-default">
  <div class="panel-heading blue">
      <div class="row">

            <div class="input-layout col-md-4">           
                <input type="text" class="datepick" data-language="en"  placeholder="FROM DATE" id="fromdate">
            </div>
          
            <div class="input-layout col-md-4">           
                <input type="text" class="datepick" data-language="en"  placeholder="TO DATE" id="todate">
            </div>
          
            <div class="col-md-4">
                <button type="submit" class="bx-but bx-save" name="search" onclick="search();" >SEARCH</button>
            </div>

      </div>      
  </div>
</div>



<script>
    $(document).ready(function(){
         var fd=$('#fromdate').val();
         var td=$('#todate').val();
                          
         if(typeof fd === "undefined" || typeof td === "undefined" ){
           document.cookie = "fromdate = " + null;
           document.cookie = "todate = " + null;   
         }
    });
   
    $('.datepick').datepicker({
        language: 'en'
    }); 
   
   function openImage(id){
     document.cookie = "picId = " + id;  
     var extraData = "&picId=" + id;
     jQuery.ajax({
        type: "POST",
        url: 'imageOptions.php',
        dataType: 'json',
        data: extraData,

        success: function (obj) {                
                if(obj.code==200){
                }
            }
        })
         window.location.href ='imageOptions.php';
     }
     
     function search(){
        
        var fd=$('#fromdate').val();
        var td=$('#todate').val(); 
        document.cookie = "fromdate = " + fd;
        document.cookie = "todate = " + td;
        location.reload();
     }
</script>

<div class="image-wrp">
  <?php $result= GetGallery::getPhotos();
  while($rows = mysqli_fetch_array($result)){
                ?> 
     
    <div class="col-md-4" style="padding-top:5px" ondblclick="openImage(<?php echo $rows['picId']?>);">
      <?php echo $rows['title'];?>   
      <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows['pic'] ).'" class="thumbnail img-responsive">'; ?>
    </div>
            <?php } ?>
 </div>