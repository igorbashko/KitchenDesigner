<?php

/* 
 * Class for getting pictures from directories
 */
class ChangPicture{
       private $list1 = array();
        
       public function changePicture($directory){
        //$list1= array();
        $files = preg_grep('/^([^.])/', scandir($directory));
        foreach ($files as $value){
            $path = realpath($directory);
            $partName = substr($value, 0, -4);
            echo "<img class='click' alt=$partName.png src=images/Colors/$value title=yaees/>";
            $this->list1[$value] = $partName.".png";
         }/*
         $listFile = \fopen("JsonDatabase/Part2.txt", "w") or die ("Doesn't work'");
         $jsonEncode = json_encode($list1);
         fwrite($listFile, $jsonEncode);
         fclose($listFile);*/
       
    }
    //Useless maybe well be needed some time
     public function writeToFile($pathAndFileName){
         $listFile = \fopen($pathAndFileName, "w") or die ("Doesn't work'");
         $jsonEncode = json_encode($this->list1);
         fwrite($listFile, $jsonEncode);
         fclose($listFile);  
       }
}