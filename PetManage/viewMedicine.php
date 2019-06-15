<?php
$root=$_SERVER['DOCUMENT_ROOT'];
$result= GetData::getPetMedicine();
while ($rows= mysqli_fetch_array($result)){
?>       
        
<div class="row pb-10" style="background-color: lightslategray" style="max-width:45%; max-height:50%;">
    <div class ="col-md-2 input-layout"> 
        <?php
        echo $rows['pet_med_name'];
        ?>
        </div>
    <div class ="col-md-2 input-layout"> 
        <?php
        echo $rows['pet_med_date'];
        ?>
        </div>
    <div class ="col-md-2 input-layout"> 
        <?php
        echo $rows['pet_med_date2'];
        ?>
        </div>
    <div class ="col-md-2 input-layout"> 
        <?php
        echo $rows['pet_med_count'];
        ?>
        </div>
    <div class ="col-md-2 input-layout"> 
        <?php
        echo $rows['pet_med_status'];
        ?>
        </div>
                            
</div>
<?php

}
?>

