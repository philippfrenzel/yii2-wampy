<?php
namespace net\frenzel\assets\wampy;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */
class wampyAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower/Wampy.js/src';
    
    public $css = [
        // none existing
    ];

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'wampy.js'
    ];

    /**
     * [$depends description]
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}