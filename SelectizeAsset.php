<?php

namespace maddoger\widgets;

use yii\web\AssetBundle;

class SelectizeAsset extends AssetBundle
{
    public $sourcePath = '@bower/selectize/dist';

    public $js = ['js/standalone/selectize.min.js'];

    public $css = [];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}