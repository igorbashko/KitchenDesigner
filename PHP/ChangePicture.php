<?php

/* 
 * Class for getting pictures from directories
 */
class ChangPicture{

    public function changePicture($directory){
        $files = preg_grep('/^([^.])/', scandir($directory));
        foreach ($files as $value){
            $path = realpath($directory); 
            echo "<img class='click' alt=Kitchens/$value src=Colors/$value title=yaees/>";
       }
    }
}