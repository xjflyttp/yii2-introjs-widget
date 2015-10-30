<?php

namespace xj\introjs\themes;

use yii\web\AssetBundle;

/**
 *
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class NazaninAsset extends AssetBundle
{

    public $sourcePath = '@bower/intro.js';
    public $basePath = '@webroot/assets';
    public $css = ['themes/introjs-nazanin.css'];
    public $depends = ['xj\introjs\IntrojsAsset'];

}
