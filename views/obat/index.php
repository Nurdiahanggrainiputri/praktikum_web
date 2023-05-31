<?php
     use yii\grid\GridView;
     use yii\grid\SerialColumn;
     use yii\grid\ActionColumn;
?>
<?=
    GridView::widget([
        'dataProvider'=> $dataProvider,
        'columns'=> [
            ['class'=> SerialColumn::className()],
            'id',
            'kode_obat',
            'nama_obat',
            'harga',
            'stok',
        ]
    ])
