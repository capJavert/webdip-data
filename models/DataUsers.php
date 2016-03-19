<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_users".
 *
 * @property integer $id
 * @property string $ime
 * @property string $prezime
 * @property string $korisnicko_ime
 * @property integer $dan
 * @property string $mjesec
 * @property integer $godina
 * @property string $spol
 * @property string $drzava
 * @property string $mobitel
 * @property string $email
 * @property string $lokacija
 * @property string $slika
 * @property integer $obavijesti
 */
class DataUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ime', 'prezime', 'korisnicko_ime', 'dan', 'mjesec', 'godina', 'spol', 'drzava', 'mobitel', 'email', 'lokacija', 'slika', 'obavijesti'], 'required'],
            [['dan', 'godina', 'obavijesti'], 'integer'],
            [['email'], 'email'],
            [['ime', 'prezime', 'korisnicko_ime', 'mjesec', 'drzava', 'mobitel', 'email', 'lokacija', 'slika'], 'string', 'max' => 255],
            [['spol'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ime' => 'Ime',
            'prezime' => 'Prezime',
            'korisnicko_ime' => 'Korisnicko Ime',
            'dan' => 'Dan',
            'mjesec' => 'Mjesec',
            'godina' => 'Godina',
            'spol' => 'Spol',
            'drzava' => 'Drzava',
            'mobitel' => 'Mobitel',
            'email' => 'Email',
            'lokacija' => 'Lokacija',
            'slika' => 'URL na sliku',
            'obavijesti' => 'Obavijesti',
        ];
    }
}
