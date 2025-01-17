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
class ltAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
//  'js/jquery.js',
//	'js/bootstrap.min.js',
        'js/html5shiv.js',
        'js/respond.min.js',

    ];

    public $jsOptions = [
      'condition' => 'lt IE9',
      'position' => \yii\web\View::POS_HEAD,
    ];

}
