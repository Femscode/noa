<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Veenode</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('adminasset/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminasset/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('adminasset/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('adminasset/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index.html">
                        <img src="{{ asset('adminasset/assets/img/veenodelogo.png')}}" style='width:150px;height:50px'
                            class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    {{-- <a href="index.html" class="nav-link"> VEENODE </a> --}}
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-0 ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-search toggle-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto"
                                placeholder="Search...">
                        </div>
                    </form>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-auto">


                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-mail">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                        <div class="">
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">KY</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Kara Young</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">
                                    <div class="media">
                                        <div class="user-img">
                                            <img src="{{ asset('adminasset/assets/img/90x90.jpg')}}"
                                                class="img-fluid mr-2" alt="avatar">
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Daisy Anderson</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">OG</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Oscar Garner</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-server">
                                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                        <line x1="6" y1="6" x2="6" y2="6"></line>
                                        <line x1="6" y1="18" x2="6" y2="18"></line>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-heart">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-check">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="{{ asset('adminasset/assets/img/90x90.jpg')}}" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="user_profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> Profile</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-inbox">
                                        <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                        <path
                                            d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                        </path>
                                    </svg> Notifications</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" onclick='return confirm("Are you sure you want to sign out?")'
                                    href="/logout"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg> Sign Out</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Dashboard</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            <ul class="navbar-nav flex-row ml-auto ">
                <li class="nav-item more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><span>Settings</span> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Settings</a>
                            <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                            <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                            <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true"
                            class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        {{-- <ul class="collapse submenu list-unstyled show" id="dashboard"
                            data-parent="#accordionExample">
                            <li class="active">
                                <a href="index.html"> Sales </a>
                            </li>
                            <li>
                                <a href="index2.html"> Analytics </a>
                            </li>
                        </ul> --}}
                    </li>

                    <li class="menu">
                        <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-cpu">
                                    <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                    <rect x="9" y="9" width="6" height="6"></rect>
                                    <line x1="9" y1="1" x2="9" y2="4"></line>
                                    <line x1="15" y1="1" x2="15" y2="4"></line>
                                    <line x1="9" y1="20" x2="9" y2="23"></line>
                                    <line x1="15" y1="20" x2="15" y2="23"></line>
                                    <line x1="20" y1="9" x2="23" y2="9"></line>
                                    <line x1="20" y1="14" x2="23" y2="14"></line>
                                    <line x1="1" y1="9" x2="4" y2="9"></line>
                                    <line x1="1" y1="14" x2="4" y2="14"></line>
                                </svg>
                                <span>Payments</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                            <li>
                                <a href="/wallet"> Wallet Balance </a>
                            </li>
                            <li>
                                <a href="/airtime"> Buy Airtime </a>
                            </li>
                            <li>
                                <a href="/data"> Buy Data </a>
                            </li>
                            <li>
                                <a href="/fetchpin"> Fetch Airtime Pin </a>
                            </li>
                            <li>
                                <a href="/fundwallet">Fund Wallet</a>
                            </li>
                            <li>
                                <a href="/transactions"> Transactions </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-box">
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span>Data Menu</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                            <li>
                                <a href="/datapricing"> Data Pricing </a>
                            </li>
                            <li>
                                <a href="/dataplans/mtn"> MTN Data Plans </a>
                            </li>
                            <li>
                                <a href="/dataplans/glo"> GLO Data Plans </a>
                            </li>
                            <li>
                                <a href="dataplans/airtel"> Airtel Data Plans </a>
                            </li>
                            <li>
                                <a href="dataplans/9mobile">9Mobile Data Plans</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-zap">
                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                </svg>
                                <span>Pay BIlls</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                            <li>
                                <a href="/dstv"> DSTV </a>
                            </li>
                            <li>
                                <a href="/gotv"> GOTV </a>
                            </li>
                            <li>
                                <a href="/startimes"> STARTIMES </a>
                            </li>
                            <li>
                                <a href="/electricity"> ELECTRICITY </a>
                            </li>
                            <li>
                                <a href="/waec"> WAEC PIN </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu">
                        <a href="fonticons.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-target">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                                <span>Refer and Earn</span>
                            </div>
                        </a>
                    </li>


                    <li class="menu">
                        <a href="#datatables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span>Account Settings</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="datatables" data-parent="#accordionExample">
                            <li>
                                <a href="table_dt_basic.html"> Profile </a>
                            </li>
                            <li>
                                <a href="table_dt_striped_table.html"> Change Pin </a>
                            </li>
                            <li>
                                <a onclick='return confirm("Are you sure you want to sign out");' href="/logout"> Logout
                                </a>
                            </li>

                        </ul>
                    </li>






                    <li class="menu">
                        <a href="dragndrop_dragula.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-move">
                                    <polyline points="5 9 2 12 5 15"></polyline>
                                    <polyline points="9 5 12 2 15 5"></polyline>
                                    <polyline points="15 19 12 22 9 19"></polyline>
                                    <polyline points="19 9 22 12 19 15"></polyline>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <line x1="12" y1="2" x2="12" y2="22"></line>
                                </svg>
                                <span>Website Services</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="map_jvector.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map">
                                    <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                    <line x1="8" y1="2" x2="8" y2="18"></line>
                                    <line x1="16" y1="6" x2="16" y2="22"></line>
                                </svg>
                                <span>Whatsapp Group</span>
                            </div>
                        </a>
                    </li>


                </ul>

            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">


                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                        <div class="widget widget-account-invoice-three">

                            <div class="widget-heading">
                                <div class="wallet-usr-info">
                                    <div class="usr-name">
                                        <span><img src="{{ asset('adminasset/assets/img/90x90.jpg')}}"
                                                alt="admin-profile" class="img-fluid">
                                            {{ Auth::user()->name }}</span>
                                    </div>
                                    <div class="add">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg></span>
                                    </div>
                                </div>
                                <div class="card-body skew-shadow">
                                    <img src="https://setsub.com/dashboard/images/Wema-logo.jpg" width="100"
                                        alt="Bank Logo">
                                    <h4 class="py-4 mb-0 text-white">8117204728</h4>

                                </div>

                            </div>

                            <div class="widget-amount">

                                <div class="w-a-info funds-received">
                                    <span>Funded <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-up">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg></span>
                                    <p> ₦97.99</p>
                                </div>

                                <div class="w-a-info funds-spent">
                                    <span>Spent <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></span>
                                    <p> ₦53.00</p>
                                </div>
                            </div>

                            <div class="widget-content">

                                <div class="bills-stats">
                                    <span>Pending</span>
                                </div>
                                <div class="wallet-balance">
                                    <p>Wallet Balance</p>
                                    <h5 class=""><span class="w-currency"> ₦</span>2953</h5>
                                </div>


                            </div>

                        </div>
                    </div>


                    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-three">
                            <h5 class="">Summary</h5>
                            <div class="widget-heading">

                                <div class="widget-content widget-content-area br-6 col-md-12">
                                    <div id="default-ordering_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="dt--top-section">
                                            <div class="row">
                                                <div
                                                    class="col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center">
                                                    <div class="dataTables_length" id="default-ordering_length">
                                                        <label>Results : <select name="default-ordering_length"
                                                                aria-controls="default-ordering" class="form-control">
                                                                <option value="7">7</option>
                                                                <option value="10">10</option>
                                                                <option value="20">20</option>
                                                                <option value="50">50</option>
                                                            </select></label></div>
                                                </div>
                                                <div
                                                    class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3">
                                                    <div id="default-ordering_filter" class="dataTables_filter">
                                                        <label><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-search">
                                                                <circle cx="11" cy="11" r="8"></circle>
                                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                            </svg><input type="search" class="form-control"
                                                                placeholder="Search..."
                                                                aria-controls="default-ordering"></label></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="default-ordering" class="table table-hover dataTable"
                                                style="width: 100%;" role="grid"
                                                aria-describedby="default-ordering_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="default-ordering" rowspan="1" colspan="1"
                                                            aria-label="Name: activate to sort column ascending"
                                                            style="width: 108px;">Name</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="default-ordering" rowspan="1" colspan="1"
                                                            aria-label="Position: activate to sort column ascending"
                                                            style="width: 166px;">Position</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="default-ordering" rowspan="1" colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width: 77px;">Office</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr role="row">
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td class="text-center"><button
                                                                class="btn btn-primary btn-sm">View</button> </td>
                                                    </tr>
                                                    <tr role="row">
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td class="text-center"><button
                                                                class="btn btn-primary btn-sm">View</button> </td>
                                                    </tr>
                                                    <tr role="row">
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td class="text-center"><button
                                                                class="btn btn-primary btn-sm">View</button> </td>
                                                    </tr>
                                                    <tr role="row">
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td class="text-center"><button
                                                                class="btn btn-primary btn-sm">View</button> </td>
                                                    </tr>
                                                    <tr role="row">
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td class="text-center"><button
                                                                class="btn btn-primary btn-sm">View</button> </td>
                                                    </tr>
                                                    <tr role="row">
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td class="text-center"><button
                                                                class="btn btn-primary btn-sm">View</button> </td>
                                                    </tr>
                                                    <tr role="row">
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td class="text-center"><button
                                                                class="btn btn-primary btn-sm">View</button> </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">Name</th>
                                                        <th rowspan="1" colspan="1">Position</th>
                                                        <th class="invisible" rowspan="1" colspan="1"></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div
                                            class="dt--bottom-section d-sm-flex justify-content-sm-between text-center">
                                            <div class="dt--pages-count  mb-sm-0 mb-3">
                                                <div class="dataTables_info" id="default-ordering_info" role="status"
                                                    aria-live="polite">Showing page 1 of 4</div>
                                            </div>
                                            <div class="dt--pagination">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="default-ordering_paginate">
                                                    <ul class="pagination pagination-style-13 pagination-bordered">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="default-ordering_previous"><a href="#"
                                                                aria-controls="default-ordering" data-dt-idx="0"
                                                                tabindex="0" class="page-link"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-arrow-left">
                                                                    <line x1="19" y1="12" x2="5" y2="12"></line>
                                                                    <polyline points="12 19 5 12 12 5"></polyline>
                                                                </svg></a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="default-ordering" data-dt-idx="1"
                                                                tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="default-ordering" data-dt-idx="2"
                                                                tabindex="0" class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="default-ordering" data-dt-idx="3"
                                                                tabindex="0" class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="default-ordering" data-dt-idx="4"
                                                                tabindex="0" class="page-link">4</a></li>
                                                        <li class="paginate_button page-item next"
                                                            id="default-ordering_next"><a href="#"
                                                                aria-controls="default-ordering" data-dt-idx="5"
                                                                tabindex="0" class="page-link"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-arrow-right">
                                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                    <polyline points="12 5 19 12 12 19"></polyline>
                                                                </svg></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget-four">
                            <div class="widget-heading">
                                <h5 class="">Visitors by Browser</h5>
                            </div>
                            <div class="widget-content">
                                <div class="vistorsBrowser">
                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            <div class="w-browser-info">
                                                <h6>Chrome</h6>
                                                <p class="browser-count">65%</p>
                                            </div>
                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            
                                            <div class="w-browser-info">
                                                <h6>Safari</h6>
                                                <p class="browser-count">25%</p>
                                            </div>

                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="browser-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                        </div>
                                        <div class="w-browser-details">
                                            
                                            <div class="w-browser-info">
                                                <h6>Others</h6>
                                                <p class="browser-count">15%</p>
                                            </div>

                                            <div class="w-browser-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row widget-statistic">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                                <div class="widget widget-one_hybrid widget-followers">
                                    <div class="widget-heading">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                            </div>
                                            <div class="">
                                                <p class="w-value">31.6K</p>
                                                <h5 class="">Followers</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content">    
                                        <div class="w-chart" style="position: relative;">
                                            <div id="hybrid_followers" style="min-height: 160px;"><div id="apexcharts6b7mqcy5" class="apexcharts-canvas apexcharts6b7mqcy5 light" style="width: 183px; height: 160px;"><svg id="SvgjsSvg1900" width="183" height="160" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1902" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1901"><clipPath id="gridRectMask6b7mqcy5"><rect id="SvgjsRect1906" width="185" height="162" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask6b7mqcy5"><rect id="SvgjsRect1907" width="185" height="162" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1913" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1914" stop-opacity="0.65" stop-color="rgba(67,97,238,0.65)" offset="0"></stop><stop id="SvgjsStop1915" stop-opacity="0.5" stop-color="rgba(161,176,247,0.5)" offset="1"></stop><stop id="SvgjsStop1916" stop-opacity="0.5" stop-color="rgba(161,176,247,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1905" x1="0" y1="0" x2="0" y2="160" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="160" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1919" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1920" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1923" class="apexcharts-grid"><line id="SvgjsLine1925" x1="0" y1="160" x2="183" y2="160" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1924" x1="0" y1="1" x2="0" y2="160" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1909" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1910" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 160L 0 61.29870129870129C 10.674999999999999 61.29870129870129 19.825000000000003 4.155844155844136 30.5 4.155844155844136C 41.175 4.155844155844136 50.325 61.29870129870129 61 61.29870129870129C 71.675 61.29870129870129 80.825 24.93506493506493 91.5 24.93506493506493C 102.175 24.93506493506493 111.325 66.49350649350649 122 66.49350649350649C 132.675 66.49350649350649 141.825 56.10389610389609 152.5 56.10389610389609C 163.175 56.10389610389609 172.325 87.27272727272727 183 87.27272727272727C 183 87.27272727272727 183 87.27272727272727 183 160M 183 87.27272727272727z" fill="url(#SvgjsLinearGradient1913)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask6b7mqcy5)" pathTo="M 0 160L 0 61.29870129870129C 10.674999999999999 61.29870129870129 19.825000000000003 4.155844155844136 30.5 4.155844155844136C 41.175 4.155844155844136 50.325 61.29870129870129 61 61.29870129870129C 71.675 61.29870129870129 80.825 24.93506493506493 91.5 24.93506493506493C 102.175 24.93506493506493 111.325 66.49350649350649 122 66.49350649350649C 132.675 66.49350649350649 141.825 56.10389610389609 152.5 56.10389610389609C 163.175 56.10389610389609 172.325 87.27272727272727 183 87.27272727272727C 183 87.27272727272727 183 87.27272727272727 183 160M 183 87.27272727272727z" pathFrom="M -1 160L -1 160L 30.5 160L 61 160L 91.5 160L 122 160L 152.5 160L 183 160"></path><path id="apexcharts-area-0" d="M 0 61.29870129870129C 10.674999999999999 61.29870129870129 19.825000000000003 4.155844155844136 30.5 4.155844155844136C 41.175 4.155844155844136 50.325 61.29870129870129 61 61.29870129870129C 71.675 61.29870129870129 80.825 24.93506493506493 91.5 24.93506493506493C 102.175 24.93506493506493 111.325 66.49350649350649 122 66.49350649350649C 132.675 66.49350649350649 141.825 56.10389610389609 152.5 56.10389610389609C 163.175 56.10389610389609 172.325 87.27272727272727 183 87.27272727272727" fill="none" fill-opacity="1" stroke="#4361ee" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask6b7mqcy5)" pathTo="M 0 61.29870129870129C 10.674999999999999 61.29870129870129 19.825000000000003 4.155844155844136 30.5 4.155844155844136C 41.175 4.155844155844136 50.325 61.29870129870129 61 61.29870129870129C 71.675 61.29870129870129 80.825 24.93506493506493 91.5 24.93506493506493C 102.175 24.93506493506493 111.325 66.49350649350649 122 66.49350649350649C 132.675 66.49350649350649 141.825 56.10389610389609 152.5 56.10389610389609C 163.175 56.10389610389609 172.325 87.27272727272727 183 87.27272727272727" pathFrom="M -1 160L -1 160L 30.5 160L 61 160L 91.5 160L 122 160L 152.5 160L 183 160"></path><g id="SvgjsG1911" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1931" r="0" cx="0" cy="0" class="apexcharts-marker ww2seo34 no-pointer-events" stroke="#ffffff" fill="#4361ee" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1912" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1926" x1="0" y1="0" x2="183" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1927" x1="0" y1="0" x2="183" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1928" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1929" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1930" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1904" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1921" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1922" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(67, 97, 238);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 184px; height: 161px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                                <div class="widget widget-one_hybrid widget-referral">
                                    <div class="widget-heading">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                            </div>
                                            <div class="">
                                                <p class="w-value">1,900</p>
                                                <h5 class="">Referral</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content">    
                                        <div class="w-chart" style="position: relative;">
                                            <div id="hybrid_followers1" style="min-height: 160px;"><div id="apexchartse07nxbm8" class="apexcharts-canvas apexchartse07nxbm8 light" style="width: 183px; height: 160px;"><svg id="SvgjsSvg1935" width="183" height="160" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1937" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1936"><clipPath id="gridRectMaske07nxbm8"><rect id="SvgjsRect1941" width="185" height="162" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaske07nxbm8"><rect id="SvgjsRect1942" width="185" height="162" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1948" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1949" stop-opacity="0.65" stop-color="rgba(231,81,90,0.65)" offset="0"></stop><stop id="SvgjsStop1950" stop-opacity="0.5" stop-color="rgba(243,168,173,0.5)" offset="1"></stop><stop id="SvgjsStop1951" stop-opacity="0.5" stop-color="rgba(243,168,173,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1940" x1="0" y1="0" x2="0" y2="160" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="160" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1954" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1955" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1958" class="apexcharts-grid"><line id="SvgjsLine1960" x1="0" y1="160" x2="183" y2="160" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1959" x1="0" y1="1" x2="0" y2="160" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1944" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1945" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 160L 0 4.155844155844136C 10.674999999999999 4.155844155844136 19.825000000000003 87.27272727272727 30.5 87.27272727272727C 41.175 87.27272727272727 50.325 24.93506493506493 61 24.93506493506493C 71.675 24.93506493506493 80.825 61.29870129870129 91.5 61.29870129870129C 102.175 61.29870129870129 111.325 56.10389610389609 122 56.10389610389609C 132.675 56.10389610389609 141.825 66.49350649350649 152.5 66.49350649350649C 163.175 66.49350649350649 172.325 61.29870129870129 183 61.29870129870129C 183 61.29870129870129 183 61.29870129870129 183 160M 183 61.29870129870129z" fill="url(#SvgjsLinearGradient1948)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaske07nxbm8)" pathTo="M 0 160L 0 4.155844155844136C 10.674999999999999 4.155844155844136 19.825000000000003 87.27272727272727 30.5 87.27272727272727C 41.175 87.27272727272727 50.325 24.93506493506493 61 24.93506493506493C 71.675 24.93506493506493 80.825 61.29870129870129 91.5 61.29870129870129C 102.175 61.29870129870129 111.325 56.10389610389609 122 56.10389610389609C 132.675 56.10389610389609 141.825 66.49350649350649 152.5 66.49350649350649C 163.175 66.49350649350649 172.325 61.29870129870129 183 61.29870129870129C 183 61.29870129870129 183 61.29870129870129 183 160M 183 61.29870129870129z" pathFrom="M -1 160L -1 160L 30.5 160L 61 160L 91.5 160L 122 160L 152.5 160L 183 160"></path><path id="apexcharts-area-0" d="M 0 4.155844155844136C 10.674999999999999 4.155844155844136 19.825000000000003 87.27272727272727 30.5 87.27272727272727C 41.175 87.27272727272727 50.325 24.93506493506493 61 24.93506493506493C 71.675 24.93506493506493 80.825 61.29870129870129 91.5 61.29870129870129C 102.175 61.29870129870129 111.325 56.10389610389609 122 56.10389610389609C 132.675 56.10389610389609 141.825 66.49350649350649 152.5 66.49350649350649C 163.175 66.49350649350649 172.325 61.29870129870129 183 61.29870129870129" fill="none" fill-opacity="1" stroke="#e7515a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaske07nxbm8)" pathTo="M 0 4.155844155844136C 10.674999999999999 4.155844155844136 19.825000000000003 87.27272727272727 30.5 87.27272727272727C 41.175 87.27272727272727 50.325 24.93506493506493 61 24.93506493506493C 71.675 24.93506493506493 80.825 61.29870129870129 91.5 61.29870129870129C 102.175 61.29870129870129 111.325 56.10389610389609 122 56.10389610389609C 132.675 56.10389610389609 141.825 66.49350649350649 152.5 66.49350649350649C 163.175 66.49350649350649 172.325 61.29870129870129 183 61.29870129870129" pathFrom="M -1 160L -1 160L 30.5 160L 61 160L 91.5 160L 122 160L 152.5 160L 183 160"></path><g id="SvgjsG1946" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1966" r="0" cx="0" cy="0" class="apexcharts-marker w1iv9u6nfk no-pointer-events" stroke="#ffffff" fill="#e7515a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1947" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1961" x1="0" y1="0" x2="183" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1962" x1="0" y1="0" x2="183" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1963" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1964" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1965" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1939" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1956" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1957" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(231, 81, 90);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 184px; height: 161px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                                <div class="widget widget-one_hybrid widget-engagement">
                                    <div class="widget-heading">
                                        <div class="w-title">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                            </div>
                                            <div class="">
                                                <p class="w-value">18.2%</p>
                                                <h5 class="">Engagement</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content">    
                                        <div class="w-chart" style="position: relative;">
                                            <div id="hybrid_followers3" style="min-height: 160px;"><div id="apexchartspupqa5nl" class="apexcharts-canvas apexchartspupqa5nl light" style="width: 183px; height: 160px;"><svg id="SvgjsSvg1970" width="183" height="160" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1972" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1971"><clipPath id="gridRectMaskpupqa5nl"><rect id="SvgjsRect1976" width="185" height="162" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskpupqa5nl"><rect id="SvgjsRect1977" width="185" height="162" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1983" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1984" stop-opacity="0.65" stop-color="rgba(26,188,156,0.65)" offset="0"></stop><stop id="SvgjsStop1985" stop-opacity="0.5" stop-color="rgba(141,222,206,0.5)" offset="1"></stop><stop id="SvgjsStop1986" stop-opacity="0.5" stop-color="rgba(141,222,206,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1975" x1="0" y1="0" x2="0" y2="160" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="160" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1989" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1990" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1993" class="apexcharts-grid"><line id="SvgjsLine1995" x1="0" y1="160" x2="183" y2="160" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1994" x1="0" y1="1" x2="0" y2="160" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1979" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1980" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M 0 160L 0 87.27272727272727C 10.674999999999999 87.27272727272727 19.825000000000003 30.129870129870113 30.5 30.129870129870113C 41.175 30.129870129870113 50.325 66.49350649350649 61 66.49350649350649C 71.675 66.49350649350649 80.825 4.155844155844136 91.5 4.155844155844136C 102.175 4.155844155844136 111.325 61.29870129870129 122 61.29870129870129C 132.675 61.29870129870129 141.825 24.93506493506493 152.5 24.93506493506493C 163.175 24.93506493506493 172.325 61.29870129870129 183 61.29870129870129C 183 61.29870129870129 183 61.29870129870129 183 160M 183 61.29870129870129z" fill="url(#SvgjsLinearGradient1983)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpupqa5nl)" pathTo="M 0 160L 0 87.27272727272727C 10.674999999999999 87.27272727272727 19.825000000000003 30.129870129870113 30.5 30.129870129870113C 41.175 30.129870129870113 50.325 66.49350649350649 61 66.49350649350649C 71.675 66.49350649350649 80.825 4.155844155844136 91.5 4.155844155844136C 102.175 4.155844155844136 111.325 61.29870129870129 122 61.29870129870129C 132.675 61.29870129870129 141.825 24.93506493506493 152.5 24.93506493506493C 163.175 24.93506493506493 172.325 61.29870129870129 183 61.29870129870129C 183 61.29870129870129 183 61.29870129870129 183 160M 183 61.29870129870129z" pathFrom="M -1 160L -1 160L 30.5 160L 61 160L 91.5 160L 122 160L 152.5 160L 183 160"></path><path id="apexcharts-area-0" d="M 0 87.27272727272727C 10.674999999999999 87.27272727272727 19.825000000000003 30.129870129870113 30.5 30.129870129870113C 41.175 30.129870129870113 50.325 66.49350649350649 61 66.49350649350649C 71.675 66.49350649350649 80.825 4.155844155844136 91.5 4.155844155844136C 102.175 4.155844155844136 111.325 61.29870129870129 122 61.29870129870129C 132.675 61.29870129870129 141.825 24.93506493506493 152.5 24.93506493506493C 163.175 24.93506493506493 172.325 61.29870129870129 183 61.29870129870129" fill="none" fill-opacity="1" stroke="#1abc9c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpupqa5nl)" pathTo="M 0 87.27272727272727C 10.674999999999999 87.27272727272727 19.825000000000003 30.129870129870113 30.5 30.129870129870113C 41.175 30.129870129870113 50.325 66.49350649350649 61 66.49350649350649C 71.675 66.49350649350649 80.825 4.155844155844136 91.5 4.155844155844136C 102.175 4.155844155844136 111.325 61.29870129870129 122 61.29870129870129C 132.675 61.29870129870129 141.825 24.93506493506493 152.5 24.93506493506493C 163.175 24.93506493506493 172.325 61.29870129870129 183 61.29870129870129" pathFrom="M -1 160L -1 160L 30.5 160L 61 160L 91.5 160L 122 160L 152.5 160L 183 160"></path><g id="SvgjsG1981" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2001" r="0" cx="0" cy="0" class="apexcharts-marker w1t4yg6t8 no-pointer-events" stroke="#ffffff" fill="#1abc9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1982" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1996" x1="0" y1="0" x2="183" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1997" x1="0" y1="0" x2="183" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1998" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1999" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2000" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1974" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1991" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1992" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(26, 188, 156);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 184px; height: 161px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All
                        rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('adminasset/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('adminasset/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('adminasset/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('adminasset/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('adminasset/assets/js/app.js')}}"></script>
    <script>
        ₦(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/js/dashboard/dash_1.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>