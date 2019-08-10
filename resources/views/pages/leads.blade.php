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

            <h3 class="page-title"> Выигранные подарки
            </h3>

            <!-- END PAGE HEADER-->

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div id="cardToLoad" class="card">
                            <div class="card-body">
                                <!--<form class="form searchform" method="GET" action="/user/chat_leads/" style="margin-bottom:10px">
                                    <div class="row">
                                        <div class="col-xs-8 col-sm-9 col-lg-10">
                                            <input type="text" class="form-control searchword" name="searchword" placeholder="Телефон, имя клиента или подарок">
                                        </div>
                                        <div class="col-xs-4 col-sm-3 col-lg-2">
                                            <button type="submit" class="btn btn-info btn-raised btn-block">Найти</button>
                                        </div>
                                    </div>
                                </form>-->
                                <!--<div class="analytics-btns">
                                    <div class="btn-group">
                                        <button type="button" class="btn ink-reaction btn-default-light current-date active" data-type="today">Сегодня</button>
                                        <button type="button" class="btn ink-reaction btn-default-light current-date" data-type="yesterday">Вчера</button>
                                        <button type="button" class="btn ink-reaction btn-default-light current-date" data-type="week">Неделя</button>
                                        <button type="button" class="btn ink-reaction btn-default-light current-date" data-type="month">Месяц</button>
                                        <button type="button" class="hidden-xs btn ink-reaction btn-default-light current-date" data-type="3month">3 месяца</button>
                                    </div>-->



                                    <input type="hidden" id="startDate" value="2019-07-30">
                                    <input type="hidden" id="endDate" value="2019-07-30">
                                    <input type="hidden" id="startDateOld" value="2019-07-30">
                                    <input type="hidden" id="endDateOld" class="btn-last" value="2019-07-30">
                                </div>
                                <div class="table-responsive hidden-xs">
                                <!--<span class="label label-default">Всего: <strong>0</strong></span>-->
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Имя</th>
                                            <th>Телефон</th>
                                            <th>Подарок</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($leads as $lead)
                                            <tr>
                                                <td>{{ $lead->id }}</td>
                                                <td>{{ $lead->name }}</td>
                                                <td>{{ $lead->phone }}</td>
                                                <td>{{ $lead->gift }}</td>
                                            </tr>


                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <div class="visible-xs">
                                </div>
                            </div>
                            <div class="text-center"></div>
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