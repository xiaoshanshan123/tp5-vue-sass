<?php 
namespace app\api\validate;

use think\Validate;
use think\Request;

class BaseValidate extends Validate
{
	public function goCheck(){
		$request = Request::instance();
		$params = $request->param();

		$result = $this->check($params);
		//验证不通过
		if(!$result){
			$error = $this->error;
			$err = [
				'code' => 400,
				'msg' => $error
			];
			return json($err);
		}else{
			return 1;
		}
	}
}