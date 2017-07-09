<?php
namespace app\api\model\goods;

use think\Model;

class FoodsRatings extends Model
{
	protected $hidden = ['id','foods_id'];
}