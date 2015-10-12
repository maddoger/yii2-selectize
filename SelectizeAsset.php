<?php

namespace maddoger\widgets;

use yii\web\AssetBundle;

class SelectizeAsset extends AssetBundle
{
    public $sourcePath = '@bower/selectize.js';

    public $js = [];

    public $css = [];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}