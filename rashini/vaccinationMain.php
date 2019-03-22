
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="/pet/css/custom/form.css" rel="stylesheet" />
        <link href="/pet/css/custom/accordion.css" rel="stylesheet" />
        <script src="/pet/js/custom/form.js"></script>
    </head>   
    <body>
       
    <div class="bread-crumb-wrp with-mb">
        <a>Pet</a>
        <a>vaccination</a>
    </div>
     <?php for($i=0;$i<5;$i++) {?>

        <div class="card-content-wrp pb-10">
           <div class="tab-box"> 
               <div class="row">
                   <div class="col-md-2">
               <h5 class="details pl-30 txt-dark-light ">Vaccine Name :</h5>
                   </div>
                   
                    <div class="col-md-2">
               <h5 class="details pl-30 txt-dark-light ">Date :</h5>
                   </div>
                   
                    <div class="col-md-2">
               <h5 class="details pl-30 txt-dark-light ">Vaccination Period :</h5>
                   </div>
                
               </div>
           </div>    
        </div>
          
     <?php }?>
    </body>
</html>


