<!DOCTYPE html>
<html lang="en">


<!-- index  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('Res/assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('Res/assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet"  href="{{asset('Res/assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>

            <li>
              <form class="form-inline mr-auto">
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right ">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('Res/assets/img/user.png')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-divider"></div>
              <a href="auth-login" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index"> <img alt="image" src="{{asset('Res/assets/img/logo.png')}}" class="header-logo" /> <span
                class="logo-name" >Pak Services</span>
            </a>
          </div>
          <ul class="sidebar-menu" >
            <li class="menu-header" >UI Elements</li>
            <li class="dropdown" >
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span >Accounts
              </span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/addaccountgroup">Add Groups</a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/groupdata">Manage Groups</a></li>
                  </ul>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/addaccount">Add Accounts</a></li>
                  </ul>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/showaccount">Manage Accounts</a></li>
                  </ul>
              </li>
            <li class="dropdown" >
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span >Wheat
            </span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/wheatsalepurchase">Sale and Purchases</a></li>
                <li><a class="nav-link" href="/salepurchasedata"> Purchase Report</a></li>
                <li><a class="nav-link" href="/saledata">Sale Report</a></li>
                <li><a class="nav-link" href="/leadger">Leadger Form</a></li>
                <li><a class="nav-link" href="/debitvoucher">Debit Voucher</a></li>
                <li><a class="nav-link" href="/creditvoucher">Credit Voucher</a></li>
                <li><a class="nav-link" href="/generalvoucher">General Voucher</a></li>
                <li><a class="nav-link" href="/generalpdfShow">General PDF</a></li>



              </ul>
            </li>


          </ul>
        </aside>
      </div>
