<?php

namespace Alangvara\PHPUtil;

class PHPUtil{
	
	public static function generateRandomString($length, $numeric = true, $uppercase = false,
		$specialChars = false){
		
		$source = 'abcdefghijklmnopqrstuvwxyz';
		
    if($numeric){
    	$source .= '1234567890';
		}
		
    if($uppercase){
    	$source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		}
		
    if($specialChars==1){
    	$source .= '|@#~$%()=^*+[]{}-_';
		}
		
    if($length>0){
      $rstr = "";
      $source = str_split($source,1);
      for($i=1; $i<=$length; $i++){
          $num = rand(0, count($source) - 1);
          $rstr .= $source[$num];
      }
    }
		
    return $rstr;
	}
	
}
