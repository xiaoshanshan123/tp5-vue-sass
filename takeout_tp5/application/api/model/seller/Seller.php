<?php 
namespace app\api\model\seller;

use think\Model;

class Seller extends Model
{
	protected $hidden = ['id'];

	/**
	 * 关联supports
	 */
	public function supports(){
		return $this->hasMany('supports','seller_id','id');
	}

	/**
	 * 关联pics
	 */
	public function pics(){
		return $this->hasMany('pics','seller_id','id');
	}

	/**
	 * 关联infos
	 */
	public function infos(){
		return $this->hasMany('infos','seller_id','id');
	}

	/**
	 * 根据id获取seller数据
	 * @param   $id 商家id
	 */
	public static function getSellerByID($id){

		// $seller = seller::get([ 'id' => $id ]);
		$seller = self::with(['supports','pics','infos'])->find($id);

		if(!$seller){
			$err =[
				'code' => 400,
				'msg' => $id.'不存在'
			];
			return json($err);
		}else{
			$result = [
				'code' => 200,
				'msg' => 'success',
				'data' => $seller
			];
		}
		return json($result);
	}
}