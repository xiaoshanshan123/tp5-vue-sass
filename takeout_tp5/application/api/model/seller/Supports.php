<?php 
namespace app\api\model\seller;

use think\Model;

class Supports extends Model
{
	protected $hidden = ['id',"seller_id"];
}