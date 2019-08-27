<!doctype html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    @include('includes.head')
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
@include('includes.header')
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
            <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="nav-item  ">
                    <a href="{{ route('home') }}" class="nav-link nav-toggle">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Статистика</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ route('leads') }}" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">Заявки</span>
                        <span class="arrow"></span>
                    </a>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:497px">
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
                            <form action="#" id="form-username" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Hue (default)</label>
                                    <div class="col-md-3">
                                        <div class="minicolors minicolors-theme-bootstrap minicolors-position-bottom minicolors-position-left"><input type="text" id="hue-demo" class="form-control demo minicolors-input" data-control="hue" value="#ff6161" size="7"><span class="minicolors-swatch minicolors-sprite"><span class="minicolors-swatch-color" style="background-color: rgb(255, 97, 97);"></span></span><div class="minicolors-panel minicolors-slider-hue" style="display: none;"><div class="minicolors-slider minicolors-sprite"><div class="minicolors-picker" style="top: 150px;"></div></div><div class="minicolors-opacity-slider minicolors-sprite"><div class="minicolors-picker"></div></div><div class="minicolors-grid minicolors-sprite" style="background-color: rgb(255, 0, 0);"><div class="minicolors-grid-inner"></div><div class="minicolors-picker" style="top: 0px; left: 93px;"><div></div></div></div></div></div> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
        </div>
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->



            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS 1-->

            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN TAB PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-puzzle font-green-sharp"></i>
                                <span class="caption-subject font-green-sharp bold uppercase">Конструктор подарка</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;"> Option 1</a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">Option 2</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Option 3</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Option 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <p> Basic exemple. Resize the window to see how the tabs are moved into the dropdown </p>

                            <div class="tabbable tabbable-tabdrop">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a href="#tab11" data-toggle="tab" aria-expanded="true">Кнопка</a>
                                    </li>
                                    <li class="">
                                        <a href="#tab12" data-toggle="tab" aria-expanded="false">Шаг 1</a>
                                    </li>
                                    <li class="">
                                        <a href="#tab13" data-toggle="tab" aria-expanded="false">Шаг 2</a>
                                    </li>
                                    <li>
                                        <a href="#tab14" data-toggle="tab">Подарки</a>
                                    </li>
                                    <li>
                                        <a href="#tab15" data-toggle="tab">Форма</a>
                                    </li>
                                    <li>
                                        <a href="#tab16" data-toggle="tab">Настройки</a>
                                    </li>
                                    <div class="gift-buttons">

                                        <div class="btn-group-gift">
                                            <button type="submit"
                                                    class="btn mt-20 mb-20 btn-success text-light waves-effect waves-classic">
                                                <i class="icon md-check mr-5" aria-hidden="true"></i>Сохранить
                                            </button>
                                        </div>

                                        <div class="btn-group-gift">
                                            <button type="submit"
                                                    class="btn mt-20 mb-20 btn-danger text-light waves-effect waves-classic">
                                                <i class="icon md-check mr-5" aria-hidden="true"></i>Удалить
                                            </button>
                                        </div>

                                        <div class="btn-group-gift">
                                            <button type="submit"
                                                    class="btn mt-20 mb-20 btn-info text-light waves-effect waves-classic">
                                                <i class="icon md-check mr-5" aria-hidden="true"></i>Установить на сайт
                                            </button>
                                        </div>

                                    </div>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab11">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="panel-body">
                                                    <form action="" method="post">
                                                        <div class="form-group">
                                                            <h4>
                                                                <i class="icon md-format-color-fill"
                                                                   aria-hidden="true"></i>Заголовок
                                                            </h4>
                                                            <span class="field-validation-valid text-danger validation-block"></span>
                                                            <div class="input-group">
                                                                <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                                                       type="text" value="message">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">

                                                            <h4>
                                                                <i class="icon md-format-color-fill"
                                                                   aria-hidden="true"></i>Фон кнопки
                                                            </h4>

                                                            <div class="widget_style_wrap">
                                                                <!-- ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope" ng-repeat="style in wizard.defaults.presence_styles">
                                                                    <input  type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#58616a">
                                                                    <div class="widget_style_item widget_style_color_1" style="background: rgb(88, 97, 106);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#707070">
                                                                    <div class="widget_style_item widget_style_color_2" style="background: rgb(112, 112, 112);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input  type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#b3b1b2">
                                                                    <div class="widget_style_item widget_style_color_3" style="background: rgb(179, 177, 178);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input  type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FFFF00">
                                                                    <div class="widget_style_item widget_style_color_4" style="background: #FFFF00"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#a27b50">
                                                                    <div class="widget_style_item widget_style_color_5" style="background: rgb(162, 123, 80);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#E07318">
                                                                    <div class="widget_style_item widget_style_color_6" style="background: #E07318"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#2f87e1">
                                                                    <div class="widget_style_item widget_style_color_7" style="background: rgb(47, 135, 225);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#339ddb">
                                                                    <div class="widget_style_item widget_style_color_8" style="background: rgb(51, 157, 219);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#3AB004">
                                                                    <div class="widget_style_item widget_style_color_9" style="background: #3AB004"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#0000FE">
                                                                    <div class="widget_style_item widget_style_color_10" style="background: #0000FE"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FFFF">
                                                                    <div class="widget_style_item widget_style_color_11" style="background: #00FFFF"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FF79">
                                                                    <div class="widget_style_item widget_style_color_12" style="background: #00FF79"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#80FF00">
                                                                    <div class="widget_style_item widget_style_color_13" style="background: #80FF00"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FF00">
                                                                    <div class="widget_style_item widget_style_color_14" style="background: #00FF00"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#5a4c81">
                                                                    <div class="widget_style_item widget_style_color_15" style="background: rgb(90, 76, 129);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#AC0480">
                                                                    <div class="widget_style_item widget_style_color_16" style="background: #AC0480"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#dd375b">
                                                                    <div class="widget_style_item widget_style_color_17" style="background: rgb(221, 55, 91);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#e74b94">
                                                                    <div class="widget_style_item widget_style_color_18" style="background: rgb(231, 75, 148);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FE0000">
                                                                    <div class="widget_style_item widget_style_color_19" style="background: #FE0000"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#f03f51">
                                                                    <div class="widget_style_item widget_style_color_20" style="background: rgb(240, 63, 81);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FF00FF">
                                                                    <div class="widget_style_item widget_style_color_21" style="background: #FF00FF"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FF7F00">
                                                                    <div class="widget_style_item widget_style_color_21" style="background: #FF7F00"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#7383b5">
                                                                    <div class="widget_style_item widget_style_color_22" style="background: rgb(115, 131, 181);"></div>
                                                                </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                                <div class="widget_style_cell ng-scope">
                                                                    <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#7F00FF">
                                                                    <div class="widget_style_item widget_style_color_1" style="background: #7F00FF"></div>
                                                                </div>
                                                            </div>

                                                            <span class="field-validation-valid text-danger validation-block"></span>
                                                            <div class="input-group">
                                                                <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                                                       type="text" value="#9657A8">
                                                            </div>
                                                            <div class="form-group">
                                                                <h4>
                                                                    <i class="icon md-border-color" aria-hidden="true"></i>Цвет подарка
                                                                </h4>
                                                                <span class="field-validation-valid text-danger validation-block"></span>
                                                                <div class="form-group">

                                                                    <div class="input-group mb-3">
                                                                        <select class="custom-select form-control" id="inputGroupSelect01">
                                                                            <option value="#000" style="background: #000">Черный</option>
                                                                            <option value="#fff" style="background: #fff">Белый</option>
                                                                            <option value="#ccc" style="background: #ccc">Серый</option>
                                                                        </select></div></div>
                                                            </div>
                                                            <div class="input-group">
                                                                <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                                                       type="text" value="#9657A8">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div id="gift" class="gift">
                                                    <p></p>
                                                    <div :style="colors" class="pulse"><i class="icon-present" :style="colorsIcon" style="font-size: 28px;"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab12">
                                        <div class="col-md-6">
                                            <div class="panel-body">
                                                <h4>
                                                    Пост
                                                </h4>
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <h4>
                                                            <i class="icon md-format-color-fill"
                                                               aria-hidden="true"></i>Верхний Заголовок
                                                        </h4>
                                                        <span class="field-validation-valid text-danger validation-block"></span>
                                                        <div class="input-group">
                                                            <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                                                   type="text" value="top_title">

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>
                                                            <i class="icon md-format-color-fill"
                                                               aria-hidden="true"></i>Фон
                                                        </h4>
                                                        <div class="widget_style_wrap">
                                                            <!-- ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope" ng-repeat="style in wizard.defaults.presence_styles">
                                                                <input  type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#58616a">
                                                                <div class="widget_style_item widget_style_color_1" style="background: rgb(88, 97, 106);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#707070">
                                                                <div class="widget_style_item widget_style_color_2" style="background: rgb(112, 112, 112);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input  type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#b3b1b2">
                                                                <div class="widget_style_item widget_style_color_3" style="background: rgb(179, 177, 178);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input  type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FFFF00">
                                                                <div class="widget_style_item widget_style_color_4" style="background: #FFFF00"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#a27b50">
                                                                <div class="widget_style_item widget_style_color_5" style="background: rgb(162, 123, 80);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#E07318">
                                                                <div class="widget_style_item widget_style_color_6" style="background: #E07318"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#2f87e1">
                                                                <div class="widget_style_item widget_style_color_7" style="background: rgb(47, 135, 225);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#339ddb">
                                                                <div class="widget_style_item widget_style_color_8" style="background: rgb(51, 157, 219);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#3AB004">
                                                                <div class="widget_style_item widget_style_color_9" style="background: #3AB004"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#0000FE">
                                                                <div class="widget_style_item widget_style_color_10" style="background: #0000FE"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FFFF">
                                                                <div class="widget_style_item widget_style_color_11" style="background: #00FFFF"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FF79">
                                                                <div class="widget_style_item widget_style_color_12" style="background: #00FF79"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#80FF00">
                                                                <div class="widget_style_item widget_style_color_13" style="background: #80FF00"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FF00">
                                                                <div class="widget_style_item widget_style_color_14" style="background: #00FF00"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#5a4c81">
                                                                <div class="widget_style_item widget_style_color_15" style="background: rgb(90, 76, 129);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#AC0480">
                                                                <div class="widget_style_item widget_style_color_16" style="background: #AC0480"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#dd375b">
                                                                <div class="widget_style_item widget_style_color_17" style="background: rgb(221, 55, 91);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#e74b94">
                                                                <div class="widget_style_item widget_style_color_18" style="background: rgb(231, 75, 148);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FE0000">
                                                                <div class="widget_style_item widget_style_color_19" style="background: #FE0000"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#f03f51">
                                                                <div class="widget_style_item widget_style_color_20" style="background: rgb(240, 63, 81);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FF00FF">
                                                                <div class="widget_style_item widget_style_color_21" style="background: #FF00FF"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FF7F00">
                                                                <div class="widget_style_item widget_style_color_21" style="background: #FF7F00"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#7383b5">
                                                                <div class="widget_style_item widget_style_color_22" style="background: rgb(115, 131, 181);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#7F00FF">
                                                                <div class="widget_style_item widget_style_color_1" style="background: #7F00FF"></div>
                                                            </div>
                                                        </div>
                                                        <span class="field-validation-valid text-danger validation-block"></span>
                                                        <div class="input-group">
                                                            <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>
                                                            <i class="icon md-format-color-fill"
                                                               aria-hidden="true"></i>Вставьте сылку на пост
                                                        </h4>
                                                        <span class="field-validation-valid text-danger validation-block"></span>
                                                        <div class="input-group">
                                                            <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                                                   type="text" placeholder="Ваша ссылка" value="facebook_m">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h3>
                                                            <i class="icon md-border-color" aria-hidden="true"></i>Кнопка
                                                        </h3>
                                                        <h4>
                                                            <i class="icon md-border-color" aria-hidden="true"></i>Текст кнопки
                                                        </h4>
                                                        <span class="field-validation-valid text-danger validation-block"></span>
                                                        <div class="input-group">
                                                            <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                                                   type="text" placeholder="Текст кнопки" value="btn_text">
                                                        </div>
                                                        <h4>
                                                            <i class="icon md-border-color" aria-hidden="true"></i>Цвет кнопки
                                                        </h4>
                                                        <div class="widget_style_wrap">
                                                            <!-- ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope" ng-repeat="style in wizard.defaults.presence_styles">
                                                                <input  type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#58616a">
                                                                <div class="widget_style_item widget_style_color_1" style="background: rgb(88, 97, 106);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#707070">
                                                                <div class="widget_style_item widget_style_color_2" style="background: rgb(112, 112, 112);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input  type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#b3b1b2">
                                                                <div class="widget_style_item widget_style_color_3" style="background: rgb(179, 177, 178);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input  type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FFFF00">
                                                                <div class="widget_style_item widget_style_color_4" style="background: #FFFF00"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#a27b50">
                                                                <div class="widget_style_item widget_style_color_5" style="background: rgb(162, 123, 80);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#E07318">
                                                                <div class="widget_style_item widget_style_color_6" style="background: #E07318"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#2f87e1">
                                                                <div class="widget_style_item widget_style_color_7" style="background: rgb(47, 135, 225);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#339ddb">
                                                                <div class="widget_style_item widget_style_color_8" style="background: rgb(51, 157, 219);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#3AB004">
                                                                <div class="widget_style_item widget_style_color_9" style="background: #3AB004"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#0000FE">
                                                                <div class="widget_style_item widget_style_color_10" style="background: #0000FE"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FFFF">
                                                                <div class="widget_style_item widget_style_color_11" style="background: #00FFFF"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FF79">
                                                                <div class="widget_style_item widget_style_color_12" style="background: #00FF79"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#80FF00">
                                                                <div class="widget_style_item widget_style_color_13" style="background: #80FF00"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#00FF00">
                                                                <div class="widget_style_item widget_style_color_14" style="background: #00FF00"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#5a4c81">
                                                                <div class="widget_style_item widget_style_color_15" style="background: rgb(90, 76, 129);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#AC0480">
                                                                <div class="widget_style_item widget_style_color_16" style="background: #AC0480"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#dd375b">
                                                                <div class="widget_style_item widget_style_color_17" style="background: rgb(221, 55, 91);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#e74b94">
                                                                <div class="widget_style_item widget_style_color_18" style="background: rgb(231, 75, 148);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FE0000">
                                                                <div class="widget_style_item widget_style_color_19" style="background: #FE0000"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#f03f51">
                                                                <div class="widget_style_item widget_style_color_20" style="background: rgb(240, 63, 81);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FF00FF">
                                                                <div class="widget_style_item widget_style_color_21" style="background: #FF00FF"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#FF7F00">
                                                                <div class="widget_style_item widget_style_color_21" style="background: #FF7F00"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#7383b5">
                                                                <div class="widget_style_item widget_style_color_22" style="background: rgb(115, 131, 181);"></div>
                                                            </div><!-- end ngRepeat: style in wizard.defaults.presence_styles -->
                                                            <div class="widget_style_cell ng-scope">
                                                                <input type="radio" name="widgetStyle" class="widget_style_radio ng-pristine ng-untouched ng-valid" value="#7F00FF">
                                                                <div class="widget_style_item widget_style_color_1" style="background: #7F00FF"></div>
                                                            </div>
                                                        </div>
                                                        <span class="field-validation-valid text-danger validation-block"></span>
                                                        <div class="input-group">
                                                            <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit"
                                                                class="btn btn-lg mt-20 mb-20 btn-success text-light waves-effect waves-classic">
                                                            <i class="icon md-check mr-5" aria-hidden="true"></i>Сохранить
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="hs-gifts-body">
                                                <div class="hs-gifts-header">
                                                    <div class="hs-gifts-headerTitle">

                                                    </div>
                                                    <div class="hs-gifts-headerClose hs-gifts-headerClose__white">
                                                    </div>
                                                </div>
                                                <div class="hs-gifts-middle">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                                    </div>

                                                    <div class="hs-gifts-eraser" >
                                                        <div class="row step-thin">
                                                            <div class="col-lg-6 bg-grey mt-step-col active">
                                                                <div class="mt-step-number first bg-white font-grey">1</div>
                                                                <div class="mt-step-title uppercase font-grey-cascade">Purchase</div>
                                                                <div class="mt-step-content font-grey-cascade">Purchasing the item</div>
                                                            </div>
                                                            <div class="col-lg-6 bg-grey mt-step-col active">
                                                                <div class="mt-step-number bg-white font-grey">2</div>
                                                                <div class="mt-step-title uppercase font-grey-cascade">Payment</div>
                                                                <div class="mt-step-content font-grey-cascade">Complete your payment</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hs-gifts-counter">
                                                        <div class="hs-gifts-counterInner post">

                                                            <iframe width="500" height="449" style="border:none;overflow:hidden"
                                                                    scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                                        </div>


                                                    </div>
                                                    <div class="hs-gifts-button">
                                                        <a href="javascript:;" class="btn btn-lg blue">
                                                            <i class="fa fa-facebook-official"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="hs-gifts-footer">
                                                    <a href="#" target="_blank">
                                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 8L1 0H7L5 5.5H12L4 16L6 8H0Z" fill="rgba(255,255,255,.8)"></path>
                                                            <path d="M1.5 8L4 0H1L0 8H1.5Z" fill="#FFF"></path>
                                                            <path d="M8 8H6L4 16L8 8Z" fill="#FFF"></path>
                                                        </svg>
                                                        виджет от GiftBox
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab13">
                                        <div class="col-md-6">
                                            <div class="panel-body">
                                                <h4>
                                                    Выбор подарка
                                                </h4>
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <h4>
                                                            <i class="icon md-format-color-fill"
                                                               aria-hidden="true"></i>Верхний Заголовок
                                                        </h4>
                                                        <span class="field-validation-valid text-danger validation-block"></span>
                                                        <div class="input-group">
                                                            <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                                                   type="text" value="Верхний Заголовок">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>
                                                            <i class="icon md-format-color-fill"
                                                               aria-hidden="true"></i>Фон
                                                        </h4>
                                                        <span class="field-validation-valid text-danger validation-block"></span>
                                                        <div class="input-group">
                                                            <input class="form-control" id="BackgroundColor" name="BackgroundColor"
                                                                   type="text" value="#9657A8">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4>
                                                            <i class="icon md-format-color-fill"
                                                               aria-hidden="true"></i>Выбирите подарок
                                                        </h4>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text" for="inputGroupSelect01">Подарок</label>
                                                            </div>
                                                            <select class="custom-select form-control" id="inputGroupSelect01">
                                                                <option selected>Выбирите ...</option>
                                                                <option value="1">Подарок 1</option>
                                                                <option value="2">Подарок 2</option>
                                                                <option value="3">Подарок 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit"
                                                                class="btn btn-lg mt-20 mb-20 btn-success text-light waves-effect waves-classic">
                                                            <i class="icon md-check mr-5" aria-hidden="true"></i>Save
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="hs-gifts-body">
                                                <div class="hs-gifts-header">
                                                    <div class="hs-gifts-headerTitle">
                                                        Верхний заголовок
                                                    </div>
                                                    <div class="hs-gifts-headerClose hs-gifts-headerClose__white">
                                                    </div>
                                                </div>
                                                <div class="hs-gifts-middle">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                                    </div>
                                                    <span class="stap_headline">Шаг 2</span>
                                                    <span class="stap_text">Выбирите свой подарок</span>
                                                    <span>(кликните на подарок чтоб его открыть)</span>
                                                    <div class="hs-gifts-eraser">
                                                    </div>
                                                    <div class="hs-gifts-counter">
                                                        <div class="hs-gifts-counterInner">
                                                            Здесь будет загружаться Ваш пост
                                                        </div>
                                                        <div class="hs-gifts-counterInner">
                                                            <a href="javascript:;" class="btn blue">
                                                                <i class="fa fa-file-o"></i> Blue </a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="hs-gifts-footer">
                                                    <a href="#" target="_blank">
                                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 8L1 0H7L5 5.5H12L4 16L6 8H0Z" fill="rgba(255,255,255,.8)"></path>
                                                            <path d="M1.5 8L4 0H1L0 8H1.5Z" fill="#FFF"></path>
                                                            <path d="M8 8H6L4 16L8 8Z" fill="#FFF"></path>
                                                        </svg>
                                                        виджет от GiftBox
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab14">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- BEGIN SAMPLE TABLE PORTLET-->
                                                <div class="portlet light ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-social-dribbble font-green"></i>
                                                            <span class="caption-subject font-green bold uppercase">Simple Table</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <form action="./api/gifts" method="post">
                                                                <label for="giftnameinput">Название подарка</label>
                                                                <input id="giftnameinput" class="form-control" name="title" placeholder="Введите название подарка">
                                                                <button type="submit" class="btn btn-success btn-block  mt-3">
                                                                    Добавить
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-block  mt-3">
                                                                    Обновить
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>



                                                    <div class="portlet-body">
                                                        <div class="table-scrollable">

                                                            <table class="table">
                                                                <tr>
                                                                    <td class="text-left"></td>
                                                                    <td class="text-right">
                                                                        <button class=" btn btn-info ">Редактировать</button>
                                                                        <button class=" btn btn-danger ">X</button>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- END SAMPLE TABLE PORTLET-->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab15">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="hs-gifts-body">
                                                    <div class="hs-gifts-header">
                                                        <div class="hs-gifts-headerTitle">
                                                            Верхний заголовок
                                                        </div>
                                                        <div class="hs-gifts-headerClose hs-gifts-headerClose__white">
                                                        </div>
                                                    </div>
                                                    <div class="hs-gifts-middle">

                                                        <span class="stap_headline">Вы выиграли ...</span><br>
                                                        <span class="stap_text">Заполните форму чтобы актвировать подарок</span>

                                                        <div class="gift-form">
                                                            <form action="./api/leads"  method='POST'>
                                                                <div class="form-group">
                                                                    <label>Имя</label>
                                                                    <input type="text" name="name" class="form-control" placeholder="Введите имя">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Телефон</label>
                                                                    <input type="text" name="phone" class="form-control" placeholder="Введите телефон">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Отправить</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="hs-gifts-footer">
                                                        <a href="#" target="_blank">
                                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 8L1 0H7L5 5.5H12L4 16L6 8H0Z" fill="rgba(255,255,255,.8)"></path>
                                                                <path d="M1.5 8L4 0H1L0 8H1.5Z" fill="#FFF"></path>
                                                                <path d="M8 8H6L4 16L8 8Z" fill="#FFF"></path>
                                                            </svg>
                                                            виджет от GiftBox
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab16">
                                        <p> Howdy, I'm in Section 6. </p>
                                    </div>
                                    <div class="tab-pane" id="tab17">
                                        <p> Howdy, I'm in Section 7. </p>
                                    </div>
                                    <div class="tab-pane" id="tab18">
                                        <p> Howdy, I'm in Section 8. </p>
                                    </div>
                                    <div class="tab-pane" id="tab19">
                                        <p> Howdy, I'm in Section 9. </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TAB PORTLET-->
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
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('includes.footer')
</body>

</html>