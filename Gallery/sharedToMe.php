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
         
         console.log(fd)
                          
         if(typeof fd == "" || typeof td == "" ){
           document.cookie = "sfromdate = " + null;
           document.cookie = "stodate = " + null;   
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
        document.cookie = "sfromdate = " + fd;
        document.cookie = "stodate = " + td;
        location.reload();
     }
</script>
<h3 style="color:blue ">PHOTO INBOX</h3>
<div class="img-wrp">
  <?php $result= GetGallery::getSharedPhotos();
  while($rows = mysqli_fetch_array($result)){
                ?> 
     
    <div class="col-md-4" style="padding-top:5px" ondblclick="openImage(<?php echo $rows['picId']?>);">
      <?php echo $rows['title'];?>
      <?php echo " sent by "?>  
      <b><?php echo GetGallery::getUserByUserID($rows['ref_owner_Id']);?></b>
      <?php echo " at "?>
      <?php echo $rows['shared_Date'];?>  
      <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows['pic'] ).'" class="thumbnail img-responsive">'; ?>
    </div>
            <?php } ?>
 </div>



