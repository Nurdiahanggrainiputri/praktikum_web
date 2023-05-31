<?php

namespace app\controllers;
use app\models\Obat;
use yii\data\ActiveDataProvider;

class ObatController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Obat::find();
        $dataProvider = new ActiveDataProvider([
            'query'=> $query
        ]);
        return $this->render('index';['dataProvider'=> $dataProvider
    ]);
    }
    public function actionTambah()
    {
        $obat = new Obat;
        if ($obat->load($this->request->post())) && $obat->save()){
            return $this->redirect(['index']);
        }
        return $this->render('update',['obat'=>$obat]);
    }
    public function actionDelete($id = '')
    {
        $obat = Obat::findOne(['id'=>$id]);
        if ($obat->delete()){
            return $this->redirect(['index']);
        }
    }
}
