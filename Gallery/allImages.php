<?php $root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/GetGallery.php"); ?>


<div class="image-wrp">
  <?php $result= GetGallery::getPhotos();
  while($rows = mysqli_fetch_array($result)){
                ?> 
      
    <div class="col-md-4" style="padding-top:60px">
      <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows['pic'] ).'" class="thumbnail img-responsive">'; ?>
    </div>
            <?php } ?>
  </div>

