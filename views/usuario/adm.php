<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Adm');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adm-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  // echo $this->render('_search', ['model' => $searchModel]); ?>
<<<<<<< HEAD
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 60%">
                <img class="img-thumbnail" src="https://cdn1.vectorstock.com/i/thumb-large/26/95/user-icon-man-employee-client-human-avatar-vector-10552695.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Usuario</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= Html::a(Yii::t('app', 'Cadastrar'), ['create'], ['class' => 'btn btn-success']) ?></li>
                    <li class="list-group-item"><?= Html::a(Yii::t('app', 'Gerenciar'), ['index'], ['class' => 'btn btn-success']) ?></li>
                </ul>
            </div>

            <div class="card" style="width: 60%">
                <img class="img-thumbnail" src="https://cdn1.vectorstock.com/i/thumb-large/26/95/user-icon-man-employee-client-human-avatar-vector-10552695.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Turmas</h5>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= Html::a(Yii::t('app', 'Cadastrar'), ['aluno/create'], ['class' => 'btn btn-success']) ?></li>
                    <li class="list-group-item"><?= Html::a(Yii::t('app', 'Gerenciar'), ['aluno/index'], ['class' => 'btn btn-success']) ?></li>
                </ul>
            </div>

            <div class="card" style="width: 60%">
                <img class="img-thumbnail" src="https://cdn1.vectorstock.com/i/thumb-large/26/95/user-icon-man-employee-client-human-avatar-vector-10552695.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Esportes</h5>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= Html::a(Yii::t('app', 'Cadastrar'), ['esporte/create'], ['class' => 'btn btn-success']) ?></li>
                    <li class="list-group-item"><?= Html::a(Yii::t('app', 'Gerenciar'), ['esporte/index'], ['class' => 'btn btn-success']) ?></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 60%">
                <img class="img-thumbnail" src="https://cdn1.vectorstock.com/i/thumb-large/26/95/user-icon-man-employee-client-human-avatar-vector-10552695.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Jogos</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= Html::a(Yii::t('app', 'Cadastrar'), ['jogos/create'], ['class' => 'btn btn-success']) ?></li>
                    <li class="list-group-item"><?= Html::a(Yii::t('app', 'Gerenciar'), ['jogos/index'], ['class' => 'btn btn-success']) ?></li>
                </ul>
            </div>

            <div class="card" style="width: 60%">
                <img class="img-thumbnail" src="https://cdn1.vectorstock.com/i/thumb-large/26/95/user-icon-man-employee-client-human-avatar-vector-10552695.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Times</h5>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= Html::a(Yii::t('app', 'Cadastrar'), ['time/create'], ['class' => 'btn btn-success']) ?></li>
                    <li class="list-group-item"><?= Html::a(Yii::t('app', 'Gerenciar'), ['time/index'], ['class' => 'btn btn-success']) ?></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 60%">
                <img class="img-thumbnail" src="https://cdn1.vectorstock.com/i/thumb-large/26/95/user-icon-man-employee-client-human-avatar-vector-10552695.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Semadec</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= Html::a(Yii::t('app', 'Cadastrar'), ['semadec/create'], ['class' => 'btn btn-success']) ?></li>
                    <li class="list-group-item"><?= Html::a(Yii::t('app', 'Gerenciar'), ['semadec/index'], ['class' => 'btn btn-success']) ?></li>
                </ul>
            </div>

            <div class="card border" style="width: 60%">
                <img class="img-thumbnail" src="https://cdn1.vectorstock.com/i/thumb-large/26/95/user-icon-man-employee-client-human-avatar-vector-10552695.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Evento</h5>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= Html::a(Yii::t('app', 'Cadastrar'), ['evento/create'], ['class' => 'btn btn-success']) ?></li>
                    <li class="list-group-item"><?= Html::a(Yii::t('app', 'Gerenciar'), ['evento/index'], ['class' => 'btn btn-success']) ?></li>
                </ul>
            </div>
        </div>
    </div>
=======

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Categoria</th>
      <th scope="col">Controles</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Aluno - Administrador - Ministrante</td>
      <td>
            <?= Html::a('<i class="fas fa-plus-square"></i> ' . Yii::t('app', 'Cadastrar'), ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-cogs"></i> ' . Yii::t('app', 'Gerenciar'), ['index'], ['class' => 'btn btn-danger']) ?>
      </td>
    </tr>
    <tr>
      <td>Evento</td>
      <td>
            <?= Html::a('<i class="fas fa-plus-square"></i> ' . Yii::t('app', 'Cadastrar'), ['evento/create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-cogs"></i> ' . Yii::t('app', 'Gerenciar'), ['evento/index'], ['class' => 'btn btn-danger']) ?>
      </td>
    </tr>
    <tr>
      <td>Esportes</td>
      <td>
            <?= Html::a('<i class="fas fa-plus-square"></i> ' . Yii::t('app', 'Cadastrar'), ['esportes/create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-cogs"></i> ' . Yii::t('app', 'Gerenciar'), ['esporte/index'], ['class' => 'btn btn-danger']) ?>
      </td>
    </tr>
    <tr>
      <td>Campeonato</td>
      <td>
            <?= Html::a('<i class="fas fa-plus-square"></i> ' . Yii::t('app', 'Cadastrar'), ['campeonato/create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-cogs"></i> ' . Yii::t('app', 'Gerenciar'), ['campeonato/index'], ['class' => 'btn btn-danger']) ?>
      </td>
    </tr>
  </tbody>
</table>

>>>>>>> 41ee75bd80156f0b8df915993f51129a9de50c3b
</div>
