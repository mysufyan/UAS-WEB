<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "beli".
 *
 * @property string $nofaktur
 * @property string $tgl
 * @property string $kode
 * @property integer $qty
 */
class Beli extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'beli';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nofaktur', 'tgl', 'kode', 'qty'], 'required'],
            [['tgl'], 'safe'],
            [['qty'], 'integer'],
            [['nofaktur', 'kode'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nofaktur' => 'No Faktur',
            'tgl' => 'Tanggal',
            'kode' => 'Kode Barang',
            'qty' => 'Qty',
        ];
    }
}
