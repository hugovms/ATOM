<?php 
class Error
{
    public static function catchError(Exception $e)
	{
			if(DEBUG){
	        echo '<pre>';
	        print_r($e);
	        echo '</pre>';
	        exit;
	    } else {
	        echo $e->getMessage();
	        exit;
	    }
	}
}