<?php

namespace maswahyu\yii2admin\assets;

use ReflectionClass;
use Yii;

use yii\base\Exception;
use yii\helpers\FileHelper;
use yii\web\AssetBundle;

/**
 * Yii2 Admin asset bundle.
 * @author Nur Wahyudin <wahyu1790@gmail.com>
 * @since 0.1
 */
class AdminAsset extends AssetBundle
{
    public $user = 'user';

    public $navbarVariant = 'navbar-light bg-white';

    public $sidebarVariant = 'sidebar-dark-primary';

    public $brandVariant = 'bg-white';

    public $brandUrl = '/';

    public $brandLogo;

    public $navbarId = 'navbar';

    public $bodyClass = 'hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed';

    public $bodyId = 'body';

    public $sidebarId = 'sidebar';

    public $contentHeaderCssClass = 'content-header';

    public $contentCssId = 'content';

    public $contentCssClass = 'content';

    public $footerId = 'footer';

    public $disableContentHeader = false;

    public $disableSidebar = false;

    /**
     * Whether to show logged in user badge on the sidebar. Default to true.
     * @var boolean
     */
    public $showUserOnSidebar = true;

    /**
     * Use this option to show your app version. Will be displayed on right side of the footer.
     * @var string
     */
    public $version;

    /**
     * Use this option to customize your copyright text on the footer.
     * @var STRING
     */
    public $copyright;

    /**
     * Navbar menu on the left side
     * @var array
     */
    public $navbarMenuLeft = [
        ['label' => '<i class="fa fa-bars"></i>', 'url' => '#', 'options' => ['data-widget' => 'pushmenu']],
        ['label' => 'Home', 'url' => ['site/index']],
        ['label' => 'About', 'url' => ['site/about']],
        ['label' => 'Contact', 'url' => ['site/contact']],
    ];

    /**
     * Navbar menu on the right side
     * @var array
     */
    public $navbarMenuRight = [
        ['label' => '<i class="fa fa-sign-out-alt"></i> Logout', 'url' => ['site/logout']],
    ];

    /**
     * Sidebar menu items
     * @var array
     */
    public $sidebarMenu = [
        ['icon' => 'fa fa-tachometer-alt', 'label' => 'Dashboard', 'url' => ['site/index']],
    ];
}