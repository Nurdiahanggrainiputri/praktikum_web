<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa084".
 *
 * @property int $id084
 * @property string $nim084
 * @property string $nama084
 * @property string $kelas084
 * @property string $status084
 */
class Mahasiswa084 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa084';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim084', 'nama084', 'kelas084', 'status084'], 'required'],
            [['nim084', 'nama084', 'kelas084', 'status084'], 'string', 'max' => 255],
            [['nim084'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id084' => 'ID084',
            'nim084' => 'No. Induk Mahasiswa084',
            'nama084' => 'Nama Mahasiswa084',
            'kelas084' => 'Kelas084',
            'status084' => 'Status084',
        ];
    }
}
