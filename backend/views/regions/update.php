<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Regions */

$this->title = Yii::t('app', 'Update Regions: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Regions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="regions-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
