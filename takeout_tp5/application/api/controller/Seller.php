<?php 
namespace app\api\controller;

use app\api\model\seller\Seller as SellerModel;
use app\api\validate\IDMustBeInt;

class Seller 
{
	/**
	 * 根据id获取seller	
	 * @param  [type] $id [description]
	 */
	public function getSeller($id){
		$result = (new IDMustBeInt())->goCheck();

		$seller = SellerModel::getSellerByID($id);
		
		if($result !== 1){
			return $result;
		}else{
			return $seller;
		}
	}
}