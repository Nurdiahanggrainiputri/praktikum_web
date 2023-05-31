<?php 
    use yii\widgets\DetailView;
    use yii\helpers\Html;
?> 

<?=
    Html::a('Kembali', ['index'], ['class' => 'btn btn-primary'])
    ?>
    <br>
<br>
<?= 
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id084',
            'nim084',
            'nama084',
            'kelas084',
            'status084',
        ]
    ])
?>

    
