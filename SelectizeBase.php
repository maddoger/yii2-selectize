<?php

namespace maddoger\widgets;

use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Selectize.js base widget
 * @package maddoger\widgets
 */
class SelectizeBase extends InputWidget
{
    /**
     * @var
     */
    public $clientOptions;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerClientScript();
    }

    /**
     * Registers CKEditor JS
     */
    protected function registerClientScript()
    {
        $view = $this->getView();
        $asset = SelectizeAsset::register($view);

        $clientOptions = $this->clientOptions;
        $jsonClientOptions = empty($clientOptions) ? '' : Json::encode($clientOptions);
        $js = "$('#{$this->options['id']}').($jsonClientOptions);";
        $view->registerJs($js);
    }
}