<?php

namespace vensonk\pace;

use yii\web\AssetBundle;
use Yii;

class PaceAsset extends AssetBundle
{
    public $sourcePath = '@vensonk/pace/assets';
    public $jsOptions=['position'=>\yii\web\View::POS_END,/*'data-pace-options'=>'{"ajax": false,"startOnPageLoad":false,"restartOnPushState":false}'*/];


    public function registerAssetFiles($view){
        if(YII_DEBUG){
            $this->js=['pace.js'];
        }else{
            $this->js=['pace.min.js'];
        }

        parent::registerAssetFiles($view);
    }
}
