<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/site.css',
        '/css/tilda-grid-3.0.min.css',
        '/css/tilda-blocks-2.12.css?t=1544000334',
        '/css/tilda-animation-1.0.min.css',
        '/css/tilda-slds-1.4.min.css',
        '/css/font-awesome.min.css',
        '/css/jgallery.css',
        '/css/jgallery.min.css',
        '/css/bootstrap-grid.css',


    ];
    public $js = [
        'js/rentafont_webfonts.js',
        'js/jquery-1.10.2.min.js',
        'js/tilda-scripts-2.8.min.js',
        'js/tilda-blocks-2.7.js?t=1544000334',
        'js/lazyload-1.3.min.js',
        'js/tilda-animation-1.0.min.js',
        'js/tilda-slds-1.4.min.js',
        'js/hammer.min.js',
        'js/tilda-forms-1.0.min.js',
        'js/tilda-cart-1.0.min.js',
//        'js/site.js',
//        'https://zyubin.ru/assets/js/bootstrap.min.js',
//        '/js/bootstrap.js',
        '/js/bootstrap.min.js',
        '',
        '',
        '',
        /*
         jgallery.js  jgallery.min.js  jquery-2.0.3.min.js  tinycolor-0.9.16.min.js  touchswipe.js  touchswipe.min.js
         */
    ];


    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];

}

/*














 */





