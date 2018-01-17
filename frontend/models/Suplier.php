<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suplier".
 *
 * @property integer $id
 * @property string $kode
 * @property string $nama
 * @property string $alamat
 * @property string $Perusahaan
 */
class Suplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'alamat', 'Perusahaan'], 'required'],
            [['kode'], 'string', 'max' => 5],
            [['nama', 'alamat', 'Perusahaan'], 'string', 'max' => 200],
            [['kode'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'Perusahaan' => 'Perusahaan',
        ];
    }

   public function getOrderBarang()
    {
        return $this->hasMany(OrderItem::className(), ['order_id' => 'id']);
    }

    public function getBarang()
    {
        return $this->hasMany(Item::className(), ['id' => 'item_id'])
            ->via('orderItems');
    }
}
