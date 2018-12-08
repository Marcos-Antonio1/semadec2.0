<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Eventos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-index">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <p>
        <?= Html::a(Yii::t('app', 'Create Evento'), ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idevento',
            'Tema',
            'descricao',
            'data',
            'horascurriculares',
            'tipo',
            //'semadec_idSemadec',
            'hora_inicio',
            'hora_fim',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Ações',
                'template' => '{view}',
                'buttons' => [
                    'view' => function($url){
                        return Html::a('View', $url, ['class' => 'btn btn-primary']);
                    }
                ],
            ],
        ],
    ]); ?>
</div>
