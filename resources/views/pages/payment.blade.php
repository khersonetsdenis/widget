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
                                    500 pуб.
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 294.081 294.081" enable-background="new 0 0 294.081 294.081">
                                          <g>
                                              <path d="m273.2,88.469h-74.408c9.693-5.134 17.662-10.075 20.464-12.181 6.96-5.22 10.441-13.921 12.181-22.621 1.74-8.701-1.74-17.401-6.96-24.362-12.181-12.181-33.062-15.661-46.983-3.48-5.22,3.48-17.401,17.401-26.102,31.322-2.28,3.428-3.846,6.282-5.569,9.258-1.914-3.445-3.898-6.926-6.613-10.997-8.701-13.921-20.882-26.102-26.102-31.322-13.921-12.181-36.543-10.441-46.983,3.48-5.22,6.96-8.701,15.661-6.96,24.362s5.22,17.401 12.181,22.621c3.585,2.871 12.303,8.405 22.552,13.921h-73.016c-10.441-0.001-20.882,8.699-20.882,20.88v26.102c0,10.441 8.701,20.882 20.882,20.882h12.181v78.305c0,24.362 19.141,43.503 43.503,43.503h139.21c24.362,0 43.503-19.141 43.503-43.503v-78.305h13.921c10.441,0 20.882-10.441 20.882-20.882v-26.102c-0.001-10.441-8.702-20.881-20.882-20.881zm-85.267-50.464c3.48-1.74 6.96-3.48 10.441-3.48 5.22,0 8.701,1.74 12.181,5.22 1.74,3.48 3.48,8.701 3.48,12.181s-1.74,6.96-5.22,10.441c-8.701,6.96-40.023,24.362-53.944,24.362 1.74-10.441 22.622-40.023 33.062-48.724zm-109.627,13.921c0-5.22 0-8.701 3.48-12.181 3.48-3.48 6.96-5.22 12.181-5.22 3.48,0 6.96,1.74 10.441,3.48 10.441,8.701 31.322,38.283 33.062,48.723-13.921,0-45.243-17.401-53.944-24.362-3.48-1.739-5.22-6.96-5.22-10.44zm-59.164,85.266c-1.74,0-3.48-1.74-3.48-3.48v-26.102c0-1.74 1.74-3.48 3.48-3.48h118.328v33.062h-118.328 3.55271e-15zm31.322,97.447v-78.305h87.006v104.407h-60.904c-13.921,0-26.102-12.181-26.102-26.102zm191.413,0c0,13.921-12.181,26.102-26.102,26.102h-60.904v-104.407h87.006v78.305zm33.062-100.927c0,1.74-1.74,3.48-3.48,3.48h-116.588v-33.062h116.588c1.74,0 3.48,1.74 3.48,3.48v26.102z"></path>
                                          </g>
                                      </svg>
                                    </span>
                                    </div>

                                    <span class="no_prize">Без подарка</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="https://account.venyoo.ru/payment/addmoney" accept-charset="UTF-8" class="config_form" id="addmoney"><input name="_token" type="hidden" value="LKCrj0kVyGCEcqIoXxCPU0b2WyKJc5fZGs98mwuT">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn venyoo_btn" type="submit" value="Выбрать">
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
                                    500 pуб.
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 294.081 294.081" enable-background="new 0 0 294.081 294.081">
                                          <g>
                                              <path d="m273.2,88.469h-74.408c9.693-5.134 17.662-10.075 20.464-12.181 6.96-5.22 10.441-13.921 12.181-22.621 1.74-8.701-1.74-17.401-6.96-24.362-12.181-12.181-33.062-15.661-46.983-3.48-5.22,3.48-17.401,17.401-26.102,31.322-2.28,3.428-3.846,6.282-5.569,9.258-1.914-3.445-3.898-6.926-6.613-10.997-8.701-13.921-20.882-26.102-26.102-31.322-13.921-12.181-36.543-10.441-46.983,3.48-5.22,6.96-8.701,15.661-6.96,24.362s5.22,17.401 12.181,22.621c3.585,2.871 12.303,8.405 22.552,13.921h-73.016c-10.441-0.001-20.882,8.699-20.882,20.88v26.102c0,10.441 8.701,20.882 20.882,20.882h12.181v78.305c0,24.362 19.141,43.503 43.503,43.503h139.21c24.362,0 43.503-19.141 43.503-43.503v-78.305h13.921c10.441,0 20.882-10.441 20.882-20.882v-26.102c-0.001-10.441-8.702-20.881-20.882-20.881zm-85.267-50.464c3.48-1.74 6.96-3.48 10.441-3.48 5.22,0 8.701,1.74 12.181,5.22 1.74,3.48 3.48,8.701 3.48,12.181s-1.74,6.96-5.22,10.441c-8.701,6.96-40.023,24.362-53.944,24.362 1.74-10.441 22.622-40.023 33.062-48.724zm-109.627,13.921c0-5.22 0-8.701 3.48-12.181 3.48-3.48 6.96-5.22 12.181-5.22 3.48,0 6.96,1.74 10.441,3.48 10.441,8.701 31.322,38.283 33.062,48.723-13.921,0-45.243-17.401-53.944-24.362-3.48-1.739-5.22-6.96-5.22-10.44zm-59.164,85.266c-1.74,0-3.48-1.74-3.48-3.48v-26.102c0-1.74 1.74-3.48 3.48-3.48h118.328v33.062h-118.328 3.55271e-15zm31.322,97.447v-78.305h87.006v104.407h-60.904c-13.921,0-26.102-12.181-26.102-26.102zm191.413,0c0,13.921-12.181,26.102-26.102,26.102h-60.904v-104.407h87.006v78.305zm33.062-100.927c0,1.74-1.74,3.48-3.48,3.48h-116.588v-33.062h116.588c1.74,0 3.48,1.74 3.48,3.48v26.102z"></path>
                                          </g>
                                      </svg>
                                    </span>
                                    </div>

                                    <span class="no_prize">Без подарка</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="https://account.venyoo.ru/payment/addmoney" accept-charset="UTF-8" class="config_form" id="addmoney"><input name="_token" type="hidden" value="LKCrj0kVyGCEcqIoXxCPU0b2WyKJc5fZGs98mwuT">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn venyoo_btn" type="submit" value="Выбрать">
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
                                    500 pуб.
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 294.081 294.081" enable-background="new 0 0 294.081 294.081">
                                          <g>
                                              <path d="m273.2,88.469h-74.408c9.693-5.134 17.662-10.075 20.464-12.181 6.96-5.22 10.441-13.921 12.181-22.621 1.74-8.701-1.74-17.401-6.96-24.362-12.181-12.181-33.062-15.661-46.983-3.48-5.22,3.48-17.401,17.401-26.102,31.322-2.28,3.428-3.846,6.282-5.569,9.258-1.914-3.445-3.898-6.926-6.613-10.997-8.701-13.921-20.882-26.102-26.102-31.322-13.921-12.181-36.543-10.441-46.983,3.48-5.22,6.96-8.701,15.661-6.96,24.362s5.22,17.401 12.181,22.621c3.585,2.871 12.303,8.405 22.552,13.921h-73.016c-10.441-0.001-20.882,8.699-20.882,20.88v26.102c0,10.441 8.701,20.882 20.882,20.882h12.181v78.305c0,24.362 19.141,43.503 43.503,43.503h139.21c24.362,0 43.503-19.141 43.503-43.503v-78.305h13.921c10.441,0 20.882-10.441 20.882-20.882v-26.102c-0.001-10.441-8.702-20.881-20.882-20.881zm-85.267-50.464c3.48-1.74 6.96-3.48 10.441-3.48 5.22,0 8.701,1.74 12.181,5.22 1.74,3.48 3.48,8.701 3.48,12.181s-1.74,6.96-5.22,10.441c-8.701,6.96-40.023,24.362-53.944,24.362 1.74-10.441 22.622-40.023 33.062-48.724zm-109.627,13.921c0-5.22 0-8.701 3.48-12.181 3.48-3.48 6.96-5.22 12.181-5.22 3.48,0 6.96,1.74 10.441,3.48 10.441,8.701 31.322,38.283 33.062,48.723-13.921,0-45.243-17.401-53.944-24.362-3.48-1.739-5.22-6.96-5.22-10.44zm-59.164,85.266c-1.74,0-3.48-1.74-3.48-3.48v-26.102c0-1.74 1.74-3.48 3.48-3.48h118.328v33.062h-118.328 3.55271e-15zm31.322,97.447v-78.305h87.006v104.407h-60.904c-13.921,0-26.102-12.181-26.102-26.102zm191.413,0c0,13.921-12.181,26.102-26.102,26.102h-60.904v-104.407h87.006v78.305zm33.062-100.927c0,1.74-1.74,3.48-3.48,3.48h-116.588v-33.062h116.588c1.74,0 3.48,1.74 3.48,3.48v26.102z"></path>
                                          </g>
                                      </svg>
                                    </span>
                                    </div>

                                    <span class="no_prize">Без подарка</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="https://account.venyoo.ru/payment/addmoney" accept-charset="UTF-8" class="config_form" id="addmoney"><input name="_token" type="hidden" value="LKCrj0kVyGCEcqIoXxCPU0b2WyKJc5fZGs98mwuT">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn venyoo_btn" type="submit" value="Выбрать">
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
                                    500 pуб.
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 294.081 294.081" enable-background="new 0 0 294.081 294.081">
                                          <g>
                                              <path d="m273.2,88.469h-74.408c9.693-5.134 17.662-10.075 20.464-12.181 6.96-5.22 10.441-13.921 12.181-22.621 1.74-8.701-1.74-17.401-6.96-24.362-12.181-12.181-33.062-15.661-46.983-3.48-5.22,3.48-17.401,17.401-26.102,31.322-2.28,3.428-3.846,6.282-5.569,9.258-1.914-3.445-3.898-6.926-6.613-10.997-8.701-13.921-20.882-26.102-26.102-31.322-13.921-12.181-36.543-10.441-46.983,3.48-5.22,6.96-8.701,15.661-6.96,24.362s5.22,17.401 12.181,22.621c3.585,2.871 12.303,8.405 22.552,13.921h-73.016c-10.441-0.001-20.882,8.699-20.882,20.88v26.102c0,10.441 8.701,20.882 20.882,20.882h12.181v78.305c0,24.362 19.141,43.503 43.503,43.503h139.21c24.362,0 43.503-19.141 43.503-43.503v-78.305h13.921c10.441,0 20.882-10.441 20.882-20.882v-26.102c-0.001-10.441-8.702-20.881-20.882-20.881zm-85.267-50.464c3.48-1.74 6.96-3.48 10.441-3.48 5.22,0 8.701,1.74 12.181,5.22 1.74,3.48 3.48,8.701 3.48,12.181s-1.74,6.96-5.22,10.441c-8.701,6.96-40.023,24.362-53.944,24.362 1.74-10.441 22.622-40.023 33.062-48.724zm-109.627,13.921c0-5.22 0-8.701 3.48-12.181 3.48-3.48 6.96-5.22 12.181-5.22 3.48,0 6.96,1.74 10.441,3.48 10.441,8.701 31.322,38.283 33.062,48.723-13.921,0-45.243-17.401-53.944-24.362-3.48-1.739-5.22-6.96-5.22-10.44zm-59.164,85.266c-1.74,0-3.48-1.74-3.48-3.48v-26.102c0-1.74 1.74-3.48 3.48-3.48h118.328v33.062h-118.328 3.55271e-15zm31.322,97.447v-78.305h87.006v104.407h-60.904c-13.921,0-26.102-12.181-26.102-26.102zm191.413,0c0,13.921-12.181,26.102-26.102,26.102h-60.904v-104.407h87.006v78.305zm33.062-100.927c0,1.74-1.74,3.48-3.48,3.48h-116.588v-33.062h116.588c1.74,0 3.48,1.74 3.48,3.48v26.102z"></path>
                                          </g>
                                      </svg>
                                    </span>
                                    </div>

                                    <span class="no_prize">Без подарка</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="https://account.venyoo.ru/payment/addmoney" accept-charset="UTF-8" class="config_form" id="addmoney"><input name="_token" type="hidden" value="LKCrj0kVyGCEcqIoXxCPU0b2WyKJc5fZGs98mwuT">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn venyoo_btn" type="submit" value="Выбрать">
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
                                    500 pуб.
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 294.081 294.081" enable-background="new 0 0 294.081 294.081">
                                          <g>
                                              <path d="m273.2,88.469h-74.408c9.693-5.134 17.662-10.075 20.464-12.181 6.96-5.22 10.441-13.921 12.181-22.621 1.74-8.701-1.74-17.401-6.96-24.362-12.181-12.181-33.062-15.661-46.983-3.48-5.22,3.48-17.401,17.401-26.102,31.322-2.28,3.428-3.846,6.282-5.569,9.258-1.914-3.445-3.898-6.926-6.613-10.997-8.701-13.921-20.882-26.102-26.102-31.322-13.921-12.181-36.543-10.441-46.983,3.48-5.22,6.96-8.701,15.661-6.96,24.362s5.22,17.401 12.181,22.621c3.585,2.871 12.303,8.405 22.552,13.921h-73.016c-10.441-0.001-20.882,8.699-20.882,20.88v26.102c0,10.441 8.701,20.882 20.882,20.882h12.181v78.305c0,24.362 19.141,43.503 43.503,43.503h139.21c24.362,0 43.503-19.141 43.503-43.503v-78.305h13.921c10.441,0 20.882-10.441 20.882-20.882v-26.102c-0.001-10.441-8.702-20.881-20.882-20.881zm-85.267-50.464c3.48-1.74 6.96-3.48 10.441-3.48 5.22,0 8.701,1.74 12.181,5.22 1.74,3.48 3.48,8.701 3.48,12.181s-1.74,6.96-5.22,10.441c-8.701,6.96-40.023,24.362-53.944,24.362 1.74-10.441 22.622-40.023 33.062-48.724zm-109.627,13.921c0-5.22 0-8.701 3.48-12.181 3.48-3.48 6.96-5.22 12.181-5.22 3.48,0 6.96,1.74 10.441,3.48 10.441,8.701 31.322,38.283 33.062,48.723-13.921,0-45.243-17.401-53.944-24.362-3.48-1.739-5.22-6.96-5.22-10.44zm-59.164,85.266c-1.74,0-3.48-1.74-3.48-3.48v-26.102c0-1.74 1.74-3.48 3.48-3.48h118.328v33.062h-118.328 3.55271e-15zm31.322,97.447v-78.305h87.006v104.407h-60.904c-13.921,0-26.102-12.181-26.102-26.102zm191.413,0c0,13.921-12.181,26.102-26.102,26.102h-60.904v-104.407h87.006v78.305zm33.062-100.927c0,1.74-1.74,3.48-3.48,3.48h-116.588v-33.062h116.588c1.74,0 3.48,1.74 3.48,3.48v26.102z"></path>
                                          </g>
                                      </svg>
                                    </span>
                                    </div>

                                    <span class="no_prize">Без подарка</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="https://account.venyoo.ru/payment/addmoney" accept-charset="UTF-8" class="config_form" id="addmoney"><input name="_token" type="hidden" value="LKCrj0kVyGCEcqIoXxCPU0b2WyKJc5fZGs98mwuT">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn venyoo_btn" type="submit" value="Выбрать">
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
                                    500 pуб.
                                </div>
                            </td>
                            <td>
                                <div class="rb_item_sum_2">
                                    <div class="rb_wrap_icon">
                                    <span class="ico-prize prize_innactive">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 294.081 294.081" enable-background="new 0 0 294.081 294.081">
                                          <g>
                                              <path d="m273.2,88.469h-74.408c9.693-5.134 17.662-10.075 20.464-12.181 6.96-5.22 10.441-13.921 12.181-22.621 1.74-8.701-1.74-17.401-6.96-24.362-12.181-12.181-33.062-15.661-46.983-3.48-5.22,3.48-17.401,17.401-26.102,31.322-2.28,3.428-3.846,6.282-5.569,9.258-1.914-3.445-3.898-6.926-6.613-10.997-8.701-13.921-20.882-26.102-26.102-31.322-13.921-12.181-36.543-10.441-46.983,3.48-5.22,6.96-8.701,15.661-6.96,24.362s5.22,17.401 12.181,22.621c3.585,2.871 12.303,8.405 22.552,13.921h-73.016c-10.441-0.001-20.882,8.699-20.882,20.88v26.102c0,10.441 8.701,20.882 20.882,20.882h12.181v78.305c0,24.362 19.141,43.503 43.503,43.503h139.21c24.362,0 43.503-19.141 43.503-43.503v-78.305h13.921c10.441,0 20.882-10.441 20.882-20.882v-26.102c-0.001-10.441-8.702-20.881-20.882-20.881zm-85.267-50.464c3.48-1.74 6.96-3.48 10.441-3.48 5.22,0 8.701,1.74 12.181,5.22 1.74,3.48 3.48,8.701 3.48,12.181s-1.74,6.96-5.22,10.441c-8.701,6.96-40.023,24.362-53.944,24.362 1.74-10.441 22.622-40.023 33.062-48.724zm-109.627,13.921c0-5.22 0-8.701 3.48-12.181 3.48-3.48 6.96-5.22 12.181-5.22 3.48,0 6.96,1.74 10.441,3.48 10.441,8.701 31.322,38.283 33.062,48.723-13.921,0-45.243-17.401-53.944-24.362-3.48-1.739-5.22-6.96-5.22-10.44zm-59.164,85.266c-1.74,0-3.48-1.74-3.48-3.48v-26.102c0-1.74 1.74-3.48 3.48-3.48h118.328v33.062h-118.328 3.55271e-15zm31.322,97.447v-78.305h87.006v104.407h-60.904c-13.921,0-26.102-12.181-26.102-26.102zm191.413,0c0,13.921-12.181,26.102-26.102,26.102h-60.904v-104.407h87.006v78.305zm33.062-100.927c0,1.74-1.74,3.48-3.48,3.48h-116.588v-33.062h116.588c1.74,0 3.48,1.74 3.48,3.48v26.102z"></path>
                                          </g>
                                      </svg>
                                    </span>
                                    </div>

                                    <span class="no_prize">Без подарка</span>
                                </div>
                            </td>
                            <td> <div class="rb_item_submit">
                                    <form method="POST" action="https://account.venyoo.ru/payment/addmoney" accept-charset="UTF-8" class="config_form" id="addmoney"><input name="_token" type="hidden" value="LKCrj0kVyGCEcqIoXxCPU0b2WyKJc5fZGs98mwuT">
                                        <input name="addmoney" type="hidden" value="1">
                                        <input class="btn venyoo_btn" type="submit" value="Выбрать">
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