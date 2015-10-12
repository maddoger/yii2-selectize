# Selectize.js widget for Yii2

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require maddoger/yii2-selectize-widget:~1.0
```

or add

```
"maddoger/yii2-selectize-widget": "~1.0"
```

to the `require` section of your `composer.json` file.

## Usage

Selectize has lots of configuration options. For further information, please check the Selectize plugin [website](http://brianreavis.github.io/selectize.js/).

### Text input widget

To use text input widget add the following to the view

```php
use maddoger\widgets\SelectizeTextInput;

echo SelectizeTextInput::widget([
    'name' => 'tags',
    'value' => 'love, this, game',
    'clientOptions' => [
        // ...
    ],
]);
```

### Dropdown list widget

To use dropdown list widget add the following to the view

```php
use maddoger\widgets\SelectizeDropDownList;

echo SelectizeDropDownList::widget([
    'name' => 'tags',
    'value' => ['love', 'this', 'game'],
    'clientOptions' => [
        // ...
    ],
]);
```