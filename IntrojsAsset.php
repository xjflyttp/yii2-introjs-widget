<?php

namespace xj\introjs;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class IntrojsAsset extends AssetBundle
{

    public $sourcePath = '@bower/intro.js';
    public $basePath = '@webroot/assets';
    public $js = ['intro.js'];
    public $css = ['introjs.css'];
    public $depends = ['yii\web\JqueryAsset'];

}
