<?php

namespace vensonk\pace;

class PaceWidget extends \yii\base\Widget
{
    public $color='blue';
    public $theme='center-circle';
    public $options;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        if(!empty($this->options)){
            $this->getView()->registerJs('window.paceOptions='.json_encode($this->options),\yii\web\View::POS_BEGIN);
        }

        PaceAsset::register($this->getView());
        $asset=\Yii::$app->assetManager->publish("@vensonk/pace/assets",['forceCopy'=>YII_DEBUG]);

        $this->getView()->registerCssFile($asset[1].'/themes/'.$this->color.'/pace-theme-'.$this->theme.'.css');
    }
}
