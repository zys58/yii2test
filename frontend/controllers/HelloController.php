<?php
namespace frontend\controllers;
use yii\web\Controller;


class HelloController extends Controller{

	public function actionIndex(){
		//请求处理
		$request = \YII::$app->request;

		//get 请求
		 //$request->get('id',20);//20，默认值
		
		//echo "hello word！！！";	

		//POST请求
		$request->get('name',3333);

		if($request->isGet){

			echo "this is get method";
		}


	}
}