<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property string|null $created_at
 * @property int|null $status
 * @property int $id
 * @property int|null $index
 * @property string|null $image
 * @property string|null $author
 * @property string|null $title
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['status', 'index'], 'integer'],
            [['image'], 'string', 'max' => 64],
            [['author'], 'string', 'max' => 25],
            [['title'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'created_at' => 'Created At',
            'status' => '状态',
            'id' => 'ID',
            'index' => 'Index',
            'image' => '封面',
            'author' => '作者',
            'title' => '标题',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
