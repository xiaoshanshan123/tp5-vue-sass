<?php 
namespace app\api\model\goods;

use think\Model;

class Goods extends Model
{
	// protected $hidden = ['id','seller_id'];

	/**
	 * 通过商家id获取商品列表
	 * @id seller_id
	 */
	public static function getGoodsBySellerID($id){
		$goods = goods::all(['seller_id'=> $id]);

		if(!$goods){
			$err = [
				'code' => 400,
				'msg' => $id.'不存在'
			];
			return json($err);
		}else{
			$goods = self::with(['foods','foods.rating'])->select();

			//goods表中seller_id=2时预载入时全部载入;
			// $goods = goods::get(['seller_id'=> $id])->relation(['foods','foods.rating'])->select($id);
			// $goods = goods::all(['seller_id'=> $id]);
			// $goods = goods::get(['seller_id'=> $id])->with(['foods'])->select();
			// $goods = goods::get(['seller_id'=> $id])->select($id);
			

			/*$goods = goods::get(function($query) use ($id){
			    $query->where('seller_id', $id)->with(['foods','foods.rating']);
			})->select();*/


			$data = [
				'code' => 200,
				"msg" => 'success',
				'goods' => $goods
			];
			return json($data);
		}
	}


	/**
	 * 通过goods->id关联foods
	 */
	public function Foods(){
		return $this->hasMany('foods','goods_id','id');
	}
}