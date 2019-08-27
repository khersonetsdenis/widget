<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic | Color Pickers</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/css/style.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/jquery-minicolors/jquery.minicolors.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="../assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="../assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="../assets/layouts/layout2/img/logo-default.png" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->

        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->

        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- END SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->

            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <!-- END THEME PANEL -->
            <h3 class="page-title"> Color Pickers
                <small>advanced color pickers</small>
            </h3>

            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light  form-fit">
                        <div class="portlet-title">
                            <div class="caption font-red-intense">
                                <i class="icon-speech font-red-intense"></i>
                                <span class="caption-subject bold uppercase">jQuery MiniColors</span>
                                <span class="caption-helper"></span>
                            </div>
                            <div class="actions">
                                <a href="javascript:;" class="btn btn-circle btn-default btn-sm">
                                    <i class="fa fa-pencil"></i> Edit </a>
                                <a href="javascript:;" class="btn btn-circle btn-default btn-sm">
                                    <i class="fa fa-plus"></i> Add </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-wrench"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form action="#" id="form-username" class="form-horizontal form-bordered col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Заголовок</label>
                                    <div class="col-md-3">
                                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom minicolors-position-left">
                                            <input type="text" class="form-control minicolors-input" value="Получите подарок" >

                                         </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Hue (default)</label>
                                    <div class="col-md-3">
                                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom minicolors-position-left"><input type="text" id="hue-demo" class="form-control demo minicolors-input" data-control="hue" value="#ff6161" size="7"><span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color" style="background-color: rgb(255, 97, 97);"></span></span><div class="minicolors-panel minicolors-slider-hue"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker" style="top: 150px;"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite" style="background-color: rgb(255, 0, 0);"><div class="minicolors-grid-inner"></div><div class="minicolors-picker" style="top: 0px; left: 93px;"><div></div></div></div></div></div> </div>
                                </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Заголовок</label>
                                        <div class="col-md-3">
                                            <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom minicolors-position-left">
                                                <input type="text" class="form-control minicolors-input" value="Получите подарок" >

                                            </div>
                                        </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Wheel</label>
                                    <div class="col-md-3">
                                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom minicolors-position-left"><input type="text" id="wheel-demo" class="form-control demo minicolors-input" data-control="wheel" value="#ff99ee" size="7"><span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color" style="background-color: rgb(255, 153, 238);"></span></span><div class="minicolors-panel minicolors-slider-wheel"><div class="minicolors-slider minicolors-sprite" style="background-color: rgb(255, 153, 238);"><div class="minicolors-picker" style="top: 0px;"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite"><div class="minicolors-grid-inner"></div><div class="minicolors-picker" style="top: 97.9813px; left: 55.7164px;"><div></div></div></div></div></div> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Hidden Input</label>
                                    <div class="col-md-3">
                                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom minicolors-position-left"><input type="hidden" id="hidden-input" class="demo minicolors-input" value="#db913d" size="7"><span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color" style="background-color: rgb(219, 145, 61);"></span></span><div class="minicolors-panel minicolors-slider-hue"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker" style="top: 136.709px;"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite" style="background-color: rgb(255, 136, 0);"><div class="minicolors-grid-inner"></div><div class="minicolors-picker" style="top: 21px; left: 109px;"><div></div></div></div></div></div> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Bottom left (default)</label>
                                    <div class="col-md-3">
                                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom minicolors-position-left"><input type="text" id="position-bottom-left" class="form-control demo minicolors-input" data-position="bottom left" value="#0088cc" size="7"><span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color" style="background-color: rgb(0, 136, 204);"></span></span><div class="minicolors-panel minicolors-slider-hue"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker" style="top: 66.6667px;"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite" style="background-color: rgb(0, 170, 255);"><div class="minicolors-grid-inner"></div><div class="minicolors-picker" style="top: 30px; left: 150px;"><div></div></div></div></div></div> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Bottom right</label>
                                    <div class="col-md-3">
                                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-top minicolors-position-left"><input type="text" id="position-top-left" class="form-control demo minicolors-input" data-position="top left" value="#0088cc" size="7"><span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color" style="background-color: rgb(0, 136, 204);"></span></span><div class="minicolors-panel minicolors-slider-hue"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker" style="top: 66.6667px;"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite" style="background-color: rgb(0, 170, 255);"><div class="minicolors-grid-inner"></div><div class="minicolors-picker" style="top: 30px; left: 150px;"><div></div></div></div></div></div> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Top left</label>
                                    <div class="col-md-3">
                                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom minicolors-position-right"><input type="text" id="position-bottom-right" class="form-control demo minicolors-input" data-position="bottom right" value="#0088cc" size="7"><span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color" style="background-color: rgb(0, 136, 204);"></span></span><div class="minicolors-panel minicolors-slider-hue"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker" style="top: 66.6667px;"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite" style="background-color: rgb(0, 170, 255);"><div class="minicolors-grid-inner"></div><div class="minicolors-picker" style="top: 30px; left: 150px;"><div></div></div></div></div></div> </div>
                                </div>
                                <div class="form-group last">
                                    <label class="col-md-3 control-label">Top right</label>
                                    <div class="col-md-3">
                                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-top minicolors-position-right"><input type="text" id="position-top-right" class="form-control demo minicolors-input" data-position="top right" value="#0088cc" size="7"><span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color" style="background-color: rgb(0, 136, 204);"></span></span><div class="minicolors-panel minicolors-slider-hue"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker" style="top: 66.6667px;"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite" style="background-color: rgb(0, 170, 255);"><div class="minicolors-grid-inner"></div><div class="minicolors-picker" style="top: 30px; left: 150px;"><div></div></div></div></div></div> </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">
                                                <i class="fa fa-check"></i> Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>
    <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
        <div class="page-quick-sidebar">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                        <span class="badge badge-danger">2</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                        <span class="badge badge-success">7</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-bell"></i> Alerts </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-info"></i> Notifications </a>
                        </li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-speech"></i> Activities </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                <i class="icon-settings"></i> Settings </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2015 &copy; Metronic by keenthemes.
        <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-minicolors/jquery.minicolors.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/components-color-pickers.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>