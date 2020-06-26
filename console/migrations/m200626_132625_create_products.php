<?php

use yii\db\Migration;

/**
 * Class m200626_132625_create_products
 */
class m200626_132625_create_products extends Migration
{


    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'section_id' => $this->integer()->notNull()->comment("id section"),
            'file' => $this->string()->defaultValue(null),
            'title' => $this->string()->notNull()->comment("Title product"),
            'introtext' => $this->string()->notNull()->comment("Introtext product"),
            'description' => $this->string()->notNull()->comment("Description product"),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('products');
    }
}
