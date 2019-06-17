
<?php
$root=$_SERVER['DOCUMENT_ROOT'];
$result= GetData::getPetVaccin();
while ($rows= mysqli_fetch_array($result)){
?>       
        
<div class="row pb-10" style="background-color:lightseagreen" style="max-width:35%; max-height:40%;">
    <div class ="col-md-2 input-layout"> 
        <?php
        echo $rows['Date'];
        ?>
        </div>
    <div class ="col-md-2 input-layout"> 
        <?php
        echo $rows['Hours'];
        ?>
        </div>
    <div class ="col-md-2 input-layout"> 
        <?php
        echo $rows['Startime'];
        ?>
        </div>
    <div class ="col-md-2 input-layout"> 
        <?php
        echo $rows['Endtime'];
        ?>
        </div>
    <div class ="col-md-2 input-layout"> 
        <?php
        echo $rows['Event'];
        ?>
        </div>
                            
</div>
<?php

}
?>
