<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for collection "auth_assignment".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $item_name
 * @property mixed $user_id
 * @property mixed $created_at
 */
class AuthAssignment extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['statsdigital', 'auth_assignment'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'item_name',
            'user_id',
            'created_at',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_name', 'user_id', 'created_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'item_name' => 'Item Name',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
        ];
    }
}
