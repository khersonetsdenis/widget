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
@extends('includes.header')
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
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->

            <h3 class="page-title"> Настройка профиля
            </h3>

            <!-- END PAGE HEADER-->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="container content_box">
                            <div class="config_block">
                                <div class="col-md-6" style="padding: 20px 40px">
                                    <form method="POST" action="{{ route('update_profile') }}" accept-charset="UTF-8" class="profile_form" enctype="multipart/form-data"><input name="_token" type="hidden" value="hrguCDXlbIEaB8IMQLOY6bDClUKlJToyOMigJeRT">
                                        <h2 class="title_config_block profile_change">Контактные данные</h2>
                                        @csrf
                                        <div class="row form-group">


                                            <div class="form-group">
                                                <label class="label_form">ФИО</label>
                                                <input class="form-control venyoo_input" required="required" name="name" type="text" value="{{ Auth::user()->name }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="label_form">E-mail</label>
                                                <input class="form-control venyoo_input" required="required" name="email" type="email" value="{{ Auth::user()->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="label_form">Телефон</label>
                                                <input class="form-control venyoo_input" id="account_phone" name="phone" type="text" value="{{ Auth::user()->phone }}">
                                            </div>

                                        </div>
                                        <div class="text-center save_changes">
                                            <input class="btn btn-success" type="submit" value="Сохранить изменения">
                                        </div>

                                    </form>
                                </div>





                                <form method="POST" action="" accept-charset="UTF-8" class="profile_form last_form"><input name="_token" type="hidden" value="hrguCDXlbIEaB8IMQLOY6bDClUKlJToyOMigJeRT">
                                    <h2 class="title_config_block mailing_settings"  style="padding: 30px 20px 0 20px">Настройка почтовых уведомлений</h2>
                                    <div class="form_block">
                                        <div class="row form-group">
                                            <div class="col-xs-6 half_block mail_stream_notf"  style="padding: 20px 40px">
                                                Здесь вы можете включить, отключить некоторые потоки почтовых уведомлений для всего вашего аккаунта.
                                            </div>
                                            <div class="col-xs-6 half_block"  style="padding: 0 40px">

                                                <div class="md-checkbox-list">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox1" class="md-check" checked="">
                                                        <label for="checkbox1">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Присылать на mail уведомления о новых заявках </label>
                                                    </div>
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox2" class="md-check" >
                                                        <label for="checkbox2">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Присылать на mail уведомления от службы поддержки </label>
                                                    </div>
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="checkbox3" class="md-check">
                                                        <label for="checkbox3">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Присылать на mail информационные рассылки </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center save_changes">
                                        <input class="btn btn-success" type="submit" value="Сохранить настройки">
                                    </div>
                                </form>


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
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
@include('includes.footer')
</body>

</html>