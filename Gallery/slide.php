<?php $root=$_SERVER['DOCUMENT_ROOT'];
include("$root/pet/Models/GetGallery.php"); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
  <?php $result= GetGallery::getPhotos();
  while($rows = mysqli_fetch_array($result)){
                ?> 
      
    <div class="item slide">
      <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows['pic'] ).'" class="">'; ?>
    </div>
            <?php } ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>