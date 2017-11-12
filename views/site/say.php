<?php
use yii\helpers\Html;
use app\models\Country;

// получаем все строки из таблицы "country" и сортируем их по "name"


// получаем строку с первичным ключом "US"
$country = Country::findOne('US');

// отобразит "United States"
echo $country->name;

$country->name = 'UNITED STATES OF AMERIka';
$country->save();

$countries = Country::find()->orderBy('name')->all();
echo '<pre>';
print_r($countries);
?>
<?= Html::encode($message) ?>