<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $section_id id section
 * @property string|null $file
 * @property string $title Title product
 * @property string $introtext Introtext product
 * @property string $description Description product
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_id', 'title', 'introtext', 'description'], 'required'],
            [['section_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['file', 'title', 'introtext', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'section_id' => 'Section ID',
            'file' => 'File',
            'title' => 'Title',
            'introtext' => 'Introtext',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
