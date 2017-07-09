<?php 
namespace app\api\controller;

use app\api\model\goods\Goods as GoodsModel;
use app\api\validate\IDMustBeInt;
use think\Db;
class Goods 
{
	/**
	 * 通过商家id 获取商品列表
	 * @param  [type] $id [商家id]
	 */
	public function getGoods($id){
		
		$result = (new IDMustBeInt())->goCheck();

		$goods = GoodsModel::getGoodsBySellerID($id);

		if($result !== 1){
			return $result;
		}else{
			return $goods;
		}
	}
}