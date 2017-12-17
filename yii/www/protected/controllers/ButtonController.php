<?php

class ButtonController extends Controller
{
	public function actionIndex()
	{
		$model=new Yandex();
        $model2=new Multillect();
		if ($_POST["Yandex"]["text"] != null)
        {
            $model->text = $_POST["Yandex"]["text"];
            $model->from = $_POST["Yandex"]["from"];
            $model->to = $_POST["Yandex"]["to"];

            $model->resText = $model->YaTr($model->text, $model->from, $model->to);

            $model2->text = $_POST["Yandex"]["text"];
            $model2->from = $_POST["Yandex"]["from"];
            $model2->to = $_POST["Yandex"]["to"];

            $model2->resText = $model2->Tr($model2->text, $model2->from, $model2->to);
        }

        $model->text = str_replace('%20', ' ', $model->text);

        $this->render('index', array('model'=>$model, 'model2'=>$model2));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}