<?php

namespace xj\introjs\themes;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class DarkAsset extends AssetBundle
{

    public $sourcePath = '@bower/intro.js';
    public $basePath = '@webroot/assets';
    public $css = ['themes/introjs-dark.css'];
    public $depends = ['xj\introjs\IntrojsAsset'];

}
