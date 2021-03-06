<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Source */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Список литературы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="source-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            [
                'attribute'=>'subject_code',
                'value'=>$model->subject->name
            ],
            'authors',
            'title',
            'town',
            'publisher',
            'year',
            'pages',
            'link',
            [
                'attribute'=>'basic',
                'value'=>$model->basic ? 'Да' : 'Нет'
            ],
        ],
    ]) ?>

</div>
