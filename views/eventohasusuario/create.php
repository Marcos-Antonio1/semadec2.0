<?php

use yii\helpers\Html;
use app\models\Eventohasusuario;

/* @var $this yii\web\View */
/* @var $model app\models\Eventohasusuario */

$this->title = Yii::t('app', 'Create Eventohasusuario');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Eventohasusuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventohasusuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
