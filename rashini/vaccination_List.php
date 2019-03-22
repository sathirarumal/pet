
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="/pet/css/custom/form.css" rel="stylesheet" />
        <link href="/pet/css/custom/accordion.css" rel="stylesheet" />
        <script src="/pet/js/custom/form.js"></script>
    </head>   
    <body>
       
    <div class="bread-crumb-wrp pl-30 with-mb">
        <a>Pet</a>
        <a>vaccination</a>
    </div>
     <?php $result = GetData::getPetVaccin();
     foreach($result as $row) {?>

        <div class="card-content-wrp pb-10">
           <div class="tab-box"> 
               <div class="row">
                   <div class="col-md-2">
               <h5 class="details pl-30 txt-dark-light ">Vaccine Name : <?php echo $row['pet_vac_name'] ;?></h5>
                   </div>
                   
                    <div class="col-md-2">
               <h5 class="details pl-30 txt-dark-light ">Date : <?php echo $row['pet_vac_date'] ;?> </h5>
                   </div>
                   
                    <div class="col-md-2">
               <h5 class="details pl-30 txt-dark-light ">Vaccination Period : <?php echo $row['pet_vac_period'] ;?></h5>
                   </div>
                   
                   <div class="col-md-2">
               <h5 class="details pl-30 txt-dark-light ">Vaccination Period Type : <?php echo $row['ref_period_type'] ;?></h5>
                   </div>
                
               </div>
           </div>    
        </div>
          
     <?php }?>
    </body>
</html>


