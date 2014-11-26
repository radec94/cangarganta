<?php
function listFolderFiles($dir){
    $ffs = scandir($dir);
    echo '<ol>';
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            echo '<li class="title">';
            if(is_dir($dir.'/'.$ff)){
                echo $ff;
                listFolderFiles($dir.'/'.$ff);
            }else{
                echo '<a href="'.$dir.'/'.$ff.'">'.$ff.'</a>';
            }
            echo '</li>';
        }
    }
    echo '</ol>';
}


listFolderFiles('img');

?>






 <?php
                    function listFolderFiles($dir){
                        $ffs = scandir($dir);
                        $count = 1;
                        foreach($ffs as $ff){
                            if($ff != '.' && $ff != '..'){
                                
                                if(is_dir($dir.'/'.$ff)){
                                    echo '<div class="col-md-4 col-sm-6 portfolio-item">';
                                    echo '  <a href="#portfolioModal'.$count.'" class="portfolio-link" data-toggle="modal">';
                                    echo '      <div class="portfolio-hover">';
                                    echo '          <div class="portfolio-hover-content">';
                                    echo '              <i class="fa fa-plus fa-3x"></i>';
                                    echo '          </div>';
                                    echo '      </div>';
                                    echo '      <img src="img/portfolio/more.png" class="img-responsive" alt="">';
                                    echo '  </a>';
                                    echo '  <div class="portfolio-caption">';
                                    echo '      <h4>'.$ff.'</h4>';
                                    echo '      <p class="text-muted">'.$dir.'/'.$ff.'</p>';
                                    echo '  </div>';
                                    echo '</div>';
                                }else{
                                    echo '<div class="col-md-4 col-sm-6 portfolio-item">';
                                    echo '  <a href="#portfolioModal'.$count.'" class="portfolio-link" data-toggle="modal">';
                                    echo '      <div class="portfolio-hover">';
                                    echo '          <div class="portfolio-hover-content">';
                                    echo '              <i class="fa fa-plus fa-3x"></i>';
                                    echo '          </div>';
                                    echo '      </div>';
                                    echo '      <img src="'.$dir.'/'.$ff.'" class="img-responsive" alt="">';
                                    echo '  </a>';
                                    echo '  <div class="portfolio-caption">';
                                    echo '      <h4>'.$ff.'</h4>';
                                    echo '      <p class="text-muted">'.$dir.'/'.$ff.'</p>';
                                    echo '  </div>';
                                    echo '</div>';
                                }
                                $count = $count + 1;
                                
                            }
                        }
                    }
                    listFolderFiles('img/images');
            ?>