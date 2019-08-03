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
    <div class="page-content">
      <!-- BEGIN PAGE HEADER-->



      <!-- END PAGE HEADER-->
      <!-- BEGIN DASHBOARD STATS 1-->

      <div class="clearfix"></div>
      <!-- END DASHBOARD STATS 1-->
      <div class="row">
        <div class="col-md-3">
          <!-- BEGIN TAB PORTLET-->
          <div class="portlet light ">
            <div class="portlet-title">
              <div class="caption">
                <i class="icon-puzzle font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase">Создание нового проекта</span>
              </div>
            </div>
            <form method="post" action="{{ route('create_project') }}">
              @csrf
              <div class="form-group">

                <label for="exampleInputEmail1">Введите название проекта</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp" placeholder="Введите название проекта или компании" required>
                <small id="emailHelp" class="form-text text-muted">Это название видно только Вам</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Адрес Вашего сайта</label>
                <input type="text" class="form-control" name="site" id="exampleInputPassword1" placeholder="Введите адрес сайта" required>
                <small id="emailHelp" class="form-text text-muted">Ссылка на Ваш сайт</small>
              </div>
              <button type="submit" class="btn btn-primary">Сохранить проект</button>
            </form>
          </div>
          <!-- END TAB PORTLET-->
        </div>
      </div>
    </div>
    <!-- END CONTENT BODY -->
  </div>
  <!-- END CONTENT -->


</div>
@include('includes.footer')
</body>
</html>