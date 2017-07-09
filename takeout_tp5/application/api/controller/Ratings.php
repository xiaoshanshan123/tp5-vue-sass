<?php
namespace app\api\controller;

use app\api\model\ratings\Ratings as RatingsModel;
use app\api\validate\IDMustBeInt;
class Ratings 
{
	public function GetRatings($id){
		$result = (new IDMustBeInt())->goCheck();
		if($result !== 1){
			return $result;
		}

		$ratings = RatingsModel::getRatingsBySellerID($id);
		return $ratings;
	}
}