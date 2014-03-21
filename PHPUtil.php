<?php

namespace Alangvara\AssetPipeline;

class PHPUtil{
	
	public static function getRandomString($length, $numeric = true, $uppercase = false,
		$specialChars = false){
		
		$source = 'abcdefghijklmnopqrstuvwxyz';
		
    if($uppercase){
    	$source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		}
		
    if($numeric){
    	$source .= '1234567890';
		}
		
    if($specialChars==1){
    	$source .= '|@#~$%()=^*+[]{}-_';
		}
		
    if($length>0){
      $rstr = "";
      $source = str_split($source,1);
      for($i=1; $i<=$length; $i++){
          $num = rand(0, count($source));
          $rstr .= $source[$num];
      }
    }
		
    return $rstr;
	}
	
}
