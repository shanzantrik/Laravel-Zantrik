<?php

class Basehelper {

    public static function getCategoryDetails($id, $return) {
    	if($id==0) 
    		return '';
    	else
	    	return DB::table('categories')
    				->where('id', $id)
    				->select($return)
    				->first()
    				->$return;
    }
}
