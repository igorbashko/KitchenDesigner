<?php

/* 
 * Class for getting pictures from directories
 */
class ChangPicture{

    public function changePicture($directory){
        $files = preg_grep('/^([^.])/', scandir($directory));
        foreach ($files as $value){
            $path = realpath($directory);
            $partName = substr($value, 0, -3);
            echo "<img class='click' alt=images/KitchenParts/Parts1/$partName src=images/Colors/$value title=yaees/>";
       }
    }
}