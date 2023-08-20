<?php

  function getSkills(){
    $file_name="../Models/skills.csv";
    $skills=[];
    $myFile= fopen($file_name,"r") or die("unable to open file");
    while(!feof($myFile))
    {
     $data=fgets($myFile);
     $arr=explode(",",$data);
     $skill=['skillNo'=>$arr[0],'skillTitle'=>$arr[1],'skill1'=>$arr[2],'skill2'=>$arr[3],'skill3'=>$arr[4]];
     array_push($skills,$skill); 
    }
    fclose($myFile); 
    return $skills;
  }
   ?>