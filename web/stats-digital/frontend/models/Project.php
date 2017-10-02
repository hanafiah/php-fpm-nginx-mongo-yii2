<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for collection "project".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $project_name
 */
class Project extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['statsdigital', 'project'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'project_name',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'project_name' => 'Project Name',
        ];
    }
}
