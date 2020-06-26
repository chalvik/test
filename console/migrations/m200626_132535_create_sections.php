<?php

use yii\db\Migration;

/**
 * Class m200626_132535_create_sections
 */
class m200626_132535_create_sections extends Migration
{


    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('sections', [
            'id' =>$this->primaryKey(),
            'pid' => $this->integer()->defaultValue(0)->notNull()->comment("id parent section"),
            'title' => $this->string()->notNull()->comment("Title section"),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('sections');
    }
}
