<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */

$this->title = $model->Tema;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Eventos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-view">

    <h1 class="text-center font-weight-bold"><?= Html::encode($this->title) ?></h1>
    <br>

    <div class="card text-center text-light">
        <img class="card-img" src="uploads/eventos/<?= $model->idevento ?>.jpg" alt="Card image cap">
        <div class="card-img-overlay">
            <h1 class="card-title font-weight-bold"><?= $model->Tema ?></h1>
            <p class="card-text"><?= $model->descricao ?></p>
            <p class="card-text"><?= 'Horas curriculares: ' . $model->horascurriculares ?></p>
            <p><?= 'data: ' . $model->data . ' das ' . $model->hora_inicio . ' as ' . $model->hora_fim ?></p>
            <?= Html::a(Yii::t('app', 'Inscrever'), ['eventohasusuario/inscricao', 'evento_idevento' => $model->idevento], ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <!-- <p class="text-right">
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idevento], ['class' => 'btn btn-info']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idevento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p> -->
</div>
