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
                    <h1 class="reffil_balance_title text-center">Выберите сумму пополнения баланса</h1>
                    <p class="reffil_balance_top">
                        Чем больше сумма, тем больше бонус!
                    </p>
                    <div class="reffil_balance_wrap">
                        <div class="refill_balance">
                    <table class="table table-hover table-light">

                        <tbody>
                        <tr>
                            <td>
                                <div class="rb_item_sum">
                                    <div class="rb_wrap_icon">
                                        <span class="ico ico-1"></span>
                                    </div>
                                    10$
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                        <i class="fa fa-gift icon-gift-fs" aria-hidden="true"></i>
                                    </span>
                                    </div>

                                    <span class="no_prize">10 подарков (Без бонусов)</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="" class="config_form" id="addmoney">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn" type="submit" value="Выбрать">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rb_item_sum">
                                    <div class="rb_wrap_icon">
                                        <span class="ico ico-1"></span>
                                    </div>
                                    25$
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                        <i class="fa fa-gift icon-gift-fs" aria-hidden="true"></i>
                                    </span>
                                    </div>

                                    <span class="no_prize">25 подарков (Без бонусов)</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="" class="config_form" id="addmoney">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn" type="submit" value="Выбрать">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rb_item_sum">
                                    <div class="rb_wrap_icon">
                                        <span class="ico ico-1"></span>
                                    </div>
                                    35$
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                        <i class="fa fa-gift icon-gift-fs" aria-hidden="true"></i>
                                    </span>
                                    </div>

                                    <span class="no_prize">35 подарков + 5 бонусных</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="" class="config_form" id="addmoney">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn" type="submit" value="Выбрать">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rb_item_sum">
                                    <div class="rb_wrap_icon">
                                        <span class="ico ico-1"></span>
                                    </div>
                                    50$
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                        <i class="fa fa-gift icon-gift-fs" aria-hidden="true"></i>
                                    </span>
                                    </div>

                                    <span class="no_prize">50 подарков + 10 бонусных</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="" class="config_form" id="addmoney">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn" type="submit" value="Выбрать">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rb_item_sum">
                                    <div class="rb_wrap_icon">
                                        <span class="ico ico-1"></span>
                                    </div>
                                    75$
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                        <i class="fa fa-gift icon-gift-fs" aria-hidden="true"></i>
                                    </span>
                                    </div>

                                    <span class="no_prize">75 подарков + 20 бонусных</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="" class="config_form" id="addmoney">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn" type="submit" value="Выбрать">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rb_item_sum">
                                    <div class="rb_wrap_icon">
                                        <span class="ico ico-1"></span>
                                    </div>
                                    90$
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                        <i class="fa fa-gift icon-gift-fs" aria-hidden="true"></i>
                                    </span>
                                    </div>

                                    <span class="no_prize">90 подарков + 30 бонусных</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="" class="config_form" id="addmoney">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn" type="submit" value="Выбрать">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rb_item_sum">
                                    <div class="rb_wrap_icon">
                                        <span class="ico ico-1"></span>
                                    </div>
                                    150$
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                        <i class="fa fa-gift icon-gift-fs" aria-hidden="true"></i>
                                    </span>
                                    </div>

                                    <span class="no_prize">150 подарков + 55 бонусных</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="" class="config_form" id="addmoney">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn" type="submit" value="Выбрать">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rb_item_sum">
                                    <div class="rb_wrap_icon">
                                        <span class="ico ico-1"></span>
                                    </div>
                                    250$
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                        <i class="fa fa-gift icon-gift-fs" aria-hidden="true"></i>
                                    </span>
                                    </div>

                                    <span class="no_prize">250 подарков + 100 бонусных</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="" class="config_form" id="addmoney">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn" type="submit" value="Выбрать">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rb_item_sum">
                                    <div class="rb_wrap_icon">
                                        <span class="ico ico-1"></span>
                                    </div>
                                    500$
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                        <i class="fa fa-gift icon-gift-fs" aria-hidden="true"></i>
                                    </span>
                                    </div>

                                    <span class="no_prize">500 подарков + 250 бонусных</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="" class="config_form" id="addmoney">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn" type="submit" value="Выбрать">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rb_item_sum">
                                    <div class="rb_wrap_icon">
                                        <span class="ico ico-1"></span>
                                    </div>
                                    1000$
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                        <i class="fa fa-gift icon-gift-fs" aria-hidden="true"></i>
                                    </span>
                                    </div>

                                    <span class="no_prize">1000 подарков + 1000 бонусных</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="" class="config_form" id="addmoney">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn" type="submit" value="Выбрать">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
