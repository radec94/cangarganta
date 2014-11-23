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