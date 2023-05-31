<?php

use yii\db\Migration;

/**
 * Class m230524_002708_obat
 */
class m230524_002708_obat extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat}}', [
            'id' => $this->primaryKey(),
            'kode_obat' =>$this->string(25)->notNull()->unique(),
            'nama_obat' =>$this->string(255)->notNull(),
            'harga' =>$this->integer()->notNull(),
            'stok' =>$this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230524_002708_obat cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230524_002708_obat cannot be reverted.\n";

        return false;
    }
    */
}
