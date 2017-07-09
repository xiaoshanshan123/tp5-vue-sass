<?php 
namespace app\api\model\goods;

use think\Model;
class Foods extends Model
{
	protected $hidden = ['id','goods_id'];

	public function rating(){
		return $this->hasMany('foods_ratings','foods_id','id')->order('rateTime','desc');
		// return $this->hasMany('foods_ratings','foods_id','id');
	}
} 