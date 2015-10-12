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
     * @var string
     */
    public $styleFile = 'selectize.bootstrap3.css';

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerClientScript();
    }

    /**
     * Registers scripts
     */
    protected function registerClientScript()
    {
        $asset = SelectizeAsset::register($this->getView());
        if ($this->styleFile !== null) {
            $asset->css[] = 'css/'.$this->styleFile;
        }
        $jsonClientOptions = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
        $this->getView()->registerJs("jQuery('#{$this->options['id']}').selectize($jsonClientOptions);");
    }
}