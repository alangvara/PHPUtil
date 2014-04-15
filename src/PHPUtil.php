<?php
/**
   * PHPUtil v0.1
   * 
   * 
   * @author     Alan Guevara <alangvara@gmail.com>
   */
namespace Alangvara\PHPUtil;

class PHPUtil{
		
	/**
	 * Generates a random string
	 * $length int string length
	 * $numeric boolean if the string should include numbers
	 * $uppercase boolean if the string should include uppercase characters
	 * $specialChars boolean if the string should include special chararacters
	 */
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

	/**
	 * gets server max upload size
	 */
	public static function getMaxUploadSize(){
		$maxUpload      = (int)(ini_get('upload_max_filesize'));
		$maxPost        = (int)(ini_get('post_max_size'));
		
		$max = $maxUpload > $maxPost ? $maxPost : $maxUpload;
		
		return $max;
	}

	
}
