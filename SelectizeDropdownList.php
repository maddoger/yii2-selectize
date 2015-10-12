<?php

namespace maddoger\widgets;

use yii\helpers\Html;

class SelectizeDropdownList extends SelectizeBase
{
    /**
     * @var array
     */
    public $items = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        parent::run();
        if ($this->hasModel()) {
            return Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
        } else {
            return Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }
    }
}