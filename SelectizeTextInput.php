<?php

namespace maddoger\widgets;

use yii\helpers\Html;

class SelectizeTextInput extends SelectizeBase
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        parent::run();
        if ($this->hasModel()) {
            return Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            return Html::textInput($this->name, $this->value, $this->options);
        }
    }
}