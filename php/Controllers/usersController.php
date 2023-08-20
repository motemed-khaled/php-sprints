<?php
function getUsers(){
    $file_name="../Models/users.csv";
    $users=[];
    $myFile= fopen($file_name,"r") or die("unable to open file");
    while(!feof($myFile))
    {
     $data=fgets($myFile);
     $arr=explode(",",$data);
     $user=['userNo'=>$arr[0],'image'=>$arr[1],'name'=>$arr[2],'email'=>$arr[3]];
     array_push($users,$user);
    }
    fclose($myFile); 
    return $users;
  }




   
