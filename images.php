<!DOCTYPE html>
<html lang="cat">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Can Garganta</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/circlebutton.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html#page-top">Can Garganta</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>                    
                    <?php
                        function listFolderNavigation($dir){
                            $ffs = scandir($dir);
                            foreach($ffs as $ff){
                                if($ff != '.' && $ff != '..'){
                                    if(is_dir($dir.'/'.$ff)){
                                        echo '<li>';
                                        echo '<a class="page-scroll" href="#'.$ff.'">'.$ff.'</a>';
                                        echo '</li>';
                                    }
                                }
                            }
                        }
                        listFolderNavigation('img/images');
                    ?>                 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">&nbsp;</div>
                <div class="intro-heading">Can Garganta</div>
                <div class="intro-lead-in">&nbsp;</div>
                <a href="#portfolio" class="btn btn-circle page-scroll">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </header>
    
    <?php
        function listFolderFilesarg($dir,$dircount){
            $ffs = scandir($dir);
            $count = 1;
            foreach($ffs as $ff){
                if($ff != '.' && $ff != '..'){

                    if(!is_dir($dir.'/'.$ff)){
                        echo '<div class="col-md-4 col-sm-6 portfolio-item">';
                        echo '  <a href="#portfolioModal'.$dircount.'-'.$count.'" class="portfolio-link" data-toggle="modal">';
                        echo '      <div class="portfolio-hover">';
                        echo '          <div class="portfolio-hover-content">';
                        echo '              <i class="fa fa-plus fa-3x"></i>';
                        echo '          </div>';
                        echo '      </div>';
                        echo '      <img src="'.$dir.'/'.$ff.'" class="img-responsive" alt="">';
                        echo '  </a>';
                        echo '  <div class="portfolio-caption">';              
                        echo '      <h4>'.pathinfo($dir.'/'.$ff, PATHINFO_FILENAME).'</h4>';
                     
                        echo '  </div>';
                        echo '</div>';
                    }
                    $count = $count + 1;

                }
            }
        }

        function listFolderSections($dir){
            $ffs = scandir($dir);
            $count = 1;
            $switchcolor = true;
            foreach($ffs as $ff){
                if($ff != '.' && $ff != '..'){

                    if(is_dir($dir.'/'.$ff)){
                        if($switchcolor){
                            echo '  <section id="portfolio" class="bg-light-gray">';
                        }else{
                            echo '  <section id="portfolio" class="bg-gray">';
                        }
                        
                        echo '  <section id="'.$ff.'">';
                        echo '      <div class="container">';
                        echo '          <div class="row">';
                        echo '              <div class="col-lg-12 text-center">';
                        echo '                  <h2 class="section-heading">'.$ff.'</h2>';
                        echo '              </div>';
                        echo '          </div>';
                        echo '          <div class="row">';
                        listFolderFilesarg($dir.'/'.$ff,$count);
                        echo '          </div>';
                        echo '      </div>';
                        echo '  </section>';
                        echo '  </section>';
                        $switchcolor = !$switchcolor;
                    }
                    $count = $count +1;
                }
            }
        }
        listFolderSections('img/images');
    ?>

   

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyright">Copyright &copy; OP Solutions 2014</span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline">
                        <li><a class="page-scroll" href="#page-top"><img  src="img/icons/Flag-CAT.png" width="40"></a>
                        </li>
                        <li><a href="index-es.html"><img src="img/icons/Flag-ESP.png" width="40"></a>
                        </li>
                        <li><a href="index-en.html"><img src="img/icons/Flag-EN.png" width="40"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    
    
    <?php
                    function listFilesModals($dir,$dircount){
                        $ffs = scandir($dir);
                        $count = 1;
                        foreach($ffs as $ff){
                            if($ff != '.' && $ff != '..'){
                                
                                if(is_dir($dir.'/'.$ff)){
                                    echo $ff; 
                                }else{
                                    echo '<div class="portfolio-modal modal fade" id="portfolioModal'.$dircount.'-'.$count.'" tabindex="-1" role="dialog" aria-hidden="true">';
                                    echo '  <div class="modal-content">';
                                    echo '      <div class="close-modal" data-dismiss="modal">';
                                    echo '          <div class="lr"><div class="rl"></div></div>';
                                    echo '      </div>';
                                    echo '      <div class="container">';
                                    echo '          <div class="row">';
                                    echo '              <div class="col-lg-8 col-lg-offset-2">';
                                    echo '                  <div class="modal-body">';
                                    echo '                      <h2>'.pathinfo($dir.'/'.$ff, PATHINFO_FILENAME).'</h2>';
                                    echo '                      <img class="img-responsive img-centered" src="'.$dir.'/'.$ff.'" alt="">';
                                    echo '                      <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Retorna </button>';
                                    echo '                  </div>';
                                    echo '              </div>';
                                    echo '          </div>';
                                    echo '      </div>';
                                    echo '  </div>';
                                    echo '</div>';
                                }
                                $count = $count + 1;
                                
                            }
                        }
                    }
                    

                    function listModals($dir){
                        $ffs = scandir($dir);
                        $count = 1;
                        foreach($ffs as $ff){
                            if($ff != '.' && $ff != '..'){
                                if(is_dir($dir.'/'.$ff)){
                                    listFilesModals($dir.'/'.$ff,$count);
                                }
                                $count = $count + 1;
                            }
                        }
                    }
                    listModals('img/images');      
            ?>
    


    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>