<?php
use yii\helpers\Html;
use app\models\Country;

// �������� ��� ������ �� ������� "country" � ��������� �� �� "name"


// �������� ������ � ��������� ������ "US"
$country = Country::findOne('US');

// ��������� "United States"
echo $country->name;

$country->name = 'UNITED STATES OF AMERIka';
$country->save();

$countries = Country::find()->orderBy('name')->all();
echo '<pre>';
print_r($countries);
?>
<?= Html::encode($message) ?>