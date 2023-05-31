<?php

use yii\db\Migration;

/**
 * Class m230530_130912_mahasiswa084
 */
class m230530_130912_mahasiswa084 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{mahasiswa084}}',[
            'id084' => $this->primarykey(),
            'nim084' => $this->string(255)->notNull()->unique(),
            'nama084' => $this->string(255)->notNull(),
            'kelas084' => $this->string(255)->notNull(),
            'status084' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_130912_mahasiswa084 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_130912_mahasiswa084 cannot be reverted.\n";

        return false;
    }
    */
}
