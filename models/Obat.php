<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id
 * @property string $kode_obat
 * @property string $nama_obat
 * @property int $harga
 * @property int $stok
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_obat', 'nama_obat', 'harga', 'stok'], 'required'],
            [['harga', 'stok'], 'integer'],
            [['kode_obat'], 'string', 'max' => 25],
            [['nama_obat'], 'string', 'max' => 255],
            [['kode_obat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_obat' => 'Kode Obat',
            'nama_obat' => 'Nama Obat',
            'harga' => 'Harga',
            'stok' => 'Stok',
        ];
    }
}
