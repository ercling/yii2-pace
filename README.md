yii2-pace
=========

Automatic page load progress bar widget for Yii2 Framework. This is a [PACE](http://github.hubspot.com/pace/docs/welcome/) wrapper. 

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require ercling/yii2-pace "*"
```
or add

```
"ercling/yii2-pace": "*"
```

to the require section of your `composer.json` file.

Usage
-----

Once the extension is installed, simply put in your view
```php
<?=ercling\pace\PaceWidget::widget()?>
```
If you would like to make some tweaks you can use **color**, **theme** and **options** like this:
```php
<?=ercling\pace\PaceWidget::widget([
    'color'=>'red',
    'theme'=>'corner-indicator',
    'options'=>[
        'ajax'=>['trackMethods'=>['GET','POST']]
    ]
])?>
```
You can preview **themes** and **colors** [here](http://github.hubspot.com/pace/docs/welcome/) and [here](https://eager.io/app/kYKTiQjoVjQk/install).

For list of **options** see [documentation](http://github.hubspot.com/pace/) or [this source file](https://github.com/HubSpot/pace/blob/master/pace.coffee).
