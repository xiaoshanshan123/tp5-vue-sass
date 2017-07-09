<?php
namespace app\api\model\ratings;

use think\Model;

class Ratings extends Model
{
	protected $hidden = ['id','seller_id'];
	
	/**
	 * 更加seller_id获取评论
	 * @id 商家id
	 */
	public static function getRatingsBySellerID($id){
		$ratings = ratings::get(['seller_id'=> $id]);
		

		if(!$ratings){
			$err = [
				'code' => 400,
				'msg' => $id.'不存在'
			];
			return  json($err);
		}else{
			$ratings = self::with(['Recommend'])->select();
			$data = [
				'code' => 200,
				'msg' => 'success',
				'ragings' => $ratings
			];
		}
		return json($data);
	}

	/**
	 * 根据评论关联推荐产品
	 * @return [type] [description]
	 */
	public function Recommend(){
		return $this->hasMany('recommend','rating_id','id');
	}
}