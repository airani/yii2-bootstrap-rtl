<?php
namespace airani\bootstrap;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap Rtl css files.
 *
 * @author Ali Irani <ali@irani.im>
 * @since 2.0
 */
class BootstrapRtlAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-rtl/dist';

    public $css = [
        'css/bootstrap-rtl.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
