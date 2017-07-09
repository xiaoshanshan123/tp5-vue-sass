<?php 
namespace app\api\validate;


class IDMustBeInt extends BaseValidate
{
	protected $rule = [
		['id','require|integer','请输入id号|id需为正整数']
	];
}