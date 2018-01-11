<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $client_code
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 * @property string $inactive
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_code', 'description'], 'required'],
            // [['created_at', 'updated_at'], 'safe'],
            [['client_code'], 'string', 'max' => 3],
            [['description'], 'string', 'max' => 80],
            // [['created_by', 'updated_by'], 'string', 'max' => 8],
            // [['inactive'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_code' => 'Client Code',
            'description' => 'Description',
            // 'created_at' => 'Created At',
            // 'updated_at' => 'Updated At',
            // 'created_by' => 'Created By',
            // 'updated_by' => 'Updated By',
            // 'inactive' => 'Inactive',
        ];
    }
}
