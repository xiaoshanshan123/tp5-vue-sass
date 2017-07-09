<?php 
namespace app\api\model\ratings;

use think\Model;

class Recommend extends Model
{
	protected $hidden = ['id','rating_id'];
}