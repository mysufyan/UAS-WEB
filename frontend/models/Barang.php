<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property string $kodebrg
 * @property string $nama
 * @property string $satauan
 * @property integer $jumlah
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'satauan', 'jumlah', 'harga', 'suplier', 'tgl'], 'required'],
            [['jumlah', 'harga'], 'integer'],
            [['tgl'], 'safe'],
            [['kode', 'nama', 'suplier'], 'string', 'max' => 15],
            [['satauan'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode Barang',
            'nama' => 'Nama',
            'satauan' => 'Satuan',
            'jumlah' => 'Stok',
            'harga' => 'Harga/satuan',
            'suplier' => 'Suplier',
            'tgl' => 'Update Terakhir'
        ];
    }
}
