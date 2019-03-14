
<html>
    <head>
        <link href="/pet/css/mainmenu.css" rel="stylesheet" />
        <link href="/pet/css/bootstrap.css" rel="stylesheet" />
        <script src="/pet/js/jquery.min.js"></script>
        <script src="/pet/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Pet Care</a>
            </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#" style="color:royalblue">Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pet<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Foods</a></li>
                            <li><a href="#">Vaccines</a></li>
                            <li><a href="#">medicines</a></li>
                            <li><a href="#">Daily Activities</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Profile</a></li>
                        </ul>
                        </li>
                    <?php $x=0; ?>    
                    <?php if($x == 1) { ?>    
                    <li><a href="#">Admin</a></li>
                    <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Log out</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </div> 
    </nav>
        

        
        
    </body>   
    
    
    
</html>