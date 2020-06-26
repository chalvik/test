<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'My Yii Application';
?>
<div class="site-index row">


    <div class="col-md-4">
        <?php foreach ($sections as $section): ?>
            <div> <?=Html::a($section->title, ['site/index', 'section_id'=>$section->id])?></div>
        <?php endforeach;?>
    </div>

    <div class="col-md-8">
        <div class="row">

        <?php foreach ($products as $product): ?>
            <div class="col-md-2" style="border:1px solid black; margin: 5px;">
                <h5> <?=$product->title ?></h5>
                <div> <?=$product->introtext?></div>
            </div>
        <?php endforeach;?>

        <div class="col-md-12">
            <?=LinkPager::widget([
            'pagination' => $pages,
            ]); ?>
        </div>
        </div>
     </div>

</div>

