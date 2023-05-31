<?php

namespace app\controllers;
use app\models\Mahasiswa084;
use app\widgets\Alert;
use yii\data\ActiveDataProvider;
use yii;

class Mahasiswa084Controller extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $query = Mahasiswa084::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $mahasiswa084 = new Mahasiswa084;
        $randomNumber = mt_rand(100, 999); 
        $mahasiswa084 -> nim084 = '60200121084-' . $randomNumber;
        $mahasiswa084 -> nama084 = 'Nurdiah Anggraini putri';
        $mahasiswa084 -> kelas084 = 'C';
        $mahasiswa084 -> status084 = 'Baru'; 
        // $mahasiswa084 -> save();
        if ($mahasiswa084->save()) {
            Yii::$app->session->setFlash('success', 'Data Ditambah');
            return $this->redirect(['index']);

        }
        

    }

    public function actionUpdate($id = '')
    {
        $mahasiswa084 = Mahasiswa084::findOne(['id084' => $id]);
        $mahasiswa084 -> status084 = 'Update';
        $mahasiswa084 -> kelas084 = 'B';
        if ($mahasiswa084->save()) {
            Yii::$app->session->setFlash('success', 'Data Diubah');
            return $this->redirect(['index']);

        }
    }
    public function actionDelete($id = '')
    {
        $mahasiswa084 = Mahasiswa084::findOne(['id084' => $id]);
        if ($mahasiswa084->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Terhapus');
            return $this->redirect(['index']);
        }
    }
    public function actionView($id)
    {
        $mahasiswa084 = Mahasiswa084::findOne(['id084' => $id]);
        return $this->render('view', ['model' => $mahasiswa084]);
        
    }

}
