<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="jTHiNXzKOH41hiOj5TKlsKqBDb59MYHgbrdgbsv9">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name='robots' content="NOODP, nofollow, noindex">


    <link rel='shortcut icon' type='image/x-icon' href="https://lms.rocket-soft.org/store/1/favicon.png">
    <link rel="manifest" href="/mix-manifest.json?v=4">
    <meta name="theme-color" content="#FFF">
    <!-- Windows Phone -->
    <meta name="msapplication-starturl" content="/">
    <meta name="msapplication-TileColor" content="#FFF">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-title" content="Rocket LMS">
    <link rel="apple-touch-icon" href="https://lms.rocket-soft.org/store/1/favicon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- Android -->
    <link rel='icon' href='https://lms.rocket-soft.org/store/1/favicon.png'>
    <meta name="application-name" content="Rocket LMS">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Other -->
    <meta name="layoutmode" content="fitscreen/standard">
    <link rel="home" href="https://lms.rocket-soft.org">

    <!-- Open Graph -->
    <meta property='og:title' content='Assignments'>
    <meta name='twitter:card' content='summary'>
    <meta name='twitter:title' content='Assignments'>


    <meta property='og:site_name' content='https://lms.rocket-soft.org/Rocket LMS'>
    <meta property='og:image' content='https://lms.rocket-soft.org/store/1/favicon.png'>
    <meta name='twitter:image' content='https://lms.rocket-soft.org/store/1/favicon.png'>
    <meta property='og:locale' content='https://lms.rocket-soft.org/en_US'>
    <meta property='og:type' content='website'>



    <title>Assignments </title>

    <!-- General CSS File -->
    <link rel="stylesheet" href="/assets/admin/vendor/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/default/vendors/toast/jquery.toast.min.css">



    <link rel="stylesheet" href="/assets/admin/css/style.css">
    <link rel="stylesheet" href="/assets/admin/css/custom.css">
    <link rel="stylesheet" href="/assets/admin/css/components.css">
    <link rel="stylesheet" href="/assets/admin/vendor/daterangepicker/daterangepicker.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">



    <style>
        :root{
            --primary:#6777ef;
        }
    </style>
</head>

<body class="">

<div id="app">
    <div class="main-wrapper">
        <button type="button" class="sidebar-close">
            <i class="fa fa-times"></i>
        </button>

        <div class="navbar-bg"></div>

        <nav class="navbar navbar-expand-lg main-navbar">

            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">

                <form action="/locale" method="post" class="mr-2 mr-md-3 mb-0 admin-navbar-locale">
                    <input type="hidden" name="_token" value="jTHiNXzKOH41hiOj5TKlsKqBDb59MYHgbrdgbsv9">

                    <input type="hidden" name="locale">


                    <div class="language-select">
                        <div id="localItems" data-selected-country="US" data-countries='{&quot;IQ&quot;:&quot;Arabic&quot;,&quot;US&quot;:&quot;English&quot;,&quot;ES&quot;:&quot;Spanish&quot;}'></div>
                    </div>
                </form>


                <div class="js-currency-select custom-dropdown position-relative admin-navbar-currency mr-2 mr-md-3">
                    <form action="/set-currency" method="post" class="mb-0">
                        <input type="hidden" name="_token" value="jTHiNXzKOH41hiOj5TKlsKqBDb59MYHgbrdgbsv9">
                        <input type="hidden" name="currency" value="USD">

                        <div class="custom-dropdown-toggle d-flex align-items-center cursor-pointer w-100">
                            <div class="mr-1 text-black">
                                <span class="js-lang-title font-14">USD ($)</span>
                            </div>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                    </form>

                    <div class="custom-dropdown-body py-2">

                        <div class="js-currency-dropdown-item custom-dropdown-body__item cursor-pointer active" data-value="USD" data-title="USD ($)">
                            <div class=" d-flex align-items-center w-100 px-2 py-1 text-gray bg-transparent">
                                <div class="size-32 position-relative d-flex-center bg-gray100 rounded-sm">
                                    $
                                </div>

                                <span class="ml-1 font-14">United States Dollar</span>
                            </div>
                        </div>
                        <div class="js-currency-dropdown-item custom-dropdown-body__item cursor-pointer " data-value="EUR" data-title="EUR (€)">
                            <div class=" d-flex align-items-center w-100 px-2 py-1 text-gray bg-transparent">
                                <div class="size-32 position-relative d-flex-center bg-gray100 rounded-sm">
                                    €
                                </div>

                                <span class="ml-1 font-14">Euro Member Countries</span>
                            </div>
                        </div>
                        <div class="js-currency-dropdown-item custom-dropdown-body__item cursor-pointer " data-value="INR" data-title="INR (₹)">
                            <div class=" d-flex align-items-center w-100 px-2 py-1 text-gray bg-transparent">
                                <div class="size-32 position-relative d-flex-center bg-gray100 rounded-sm">
                                    ₹
                                </div>

                                <span class="ml-1 font-14">India Rupee</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="js-show-ai-content-drawer show-ai-content-drawer-btn d-flex-center mr-4">
                    <div class="d-flex-center size-32 rounded-circle bg-white">
                        <img src="/assets/default/img/ai/ai-chip.svg" alt="ai" class="" width="16px" height="16px">
                    </div>
                    <span class="ml-1 font-weight-500 font-14">AI Content</span>
                </div>



                <li class="dropdown dropdown-list-toggle">
                    <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg">
                        <i class="fa fa-info-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-list-icons mb-0" height="150px">
                            <a href="https://codecanyon.net/user/rocketsoft/portfolio" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="fa fa-info"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Rocket LMS Version 1.9.7
                                    <div class="time text-primary">All rights reserved for Rocket Soft</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>


                <li class="dropdown dropdown-list-toggle">
                    <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg  beep ">
                        <i class="far fa-bell"></i>
                    </a>

                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Notifications
                            <div class="float-right">
                                <a href="/admin/notifications/mark_all_read">Mark All As Read</a>
                            </div>
                        </div>

                        <div class="dropdown-list-content dropdown-list-icons">
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New item created
                                    <div class="time text-primary">2024 Nov 7 | 13:53</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment verification request submitted (Admin)
                                    <div class="time text-primary">2023 Jun 3 | 05:05</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User got cashback (Admin)
                                    <div class="time text-primary">2023 Jun 3 | 05:05</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment request submitted (Admin)
                                    <div class="time text-primary">2023 Jun 3 | 05:05</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment verification request submitted (Admin)
                                    <div class="time text-primary">2023 Jun 3 | 05:04</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User got cashback (Admin)
                                    <div class="time text-primary">2023 Jun 3 | 05:04</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment request submitted (Admin)
                                    <div class="time text-primary">2023 Jun 3 | 05:03</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New item review (Rating)
                                    <div class="time text-primary">2023 Mar 17 | 18:50</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New course enrollment
                                    <div class="time text-primary">2023 Mar 17 | 17:27</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment verification request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 16 | 06:14</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User got cashback (Admin)
                                    <div class="time text-primary">2023 Mar 16 | 06:14</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 16 | 06:14</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New course enrollment
                                    <div class="time text-primary">2023 Mar 16 | 06:06</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User got cashback (Admin)
                                    <div class="time text-primary">2023 Mar 16 | 06:06</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment verification request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 16 | 06:03</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 16 | 06:03</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New user registered
                                    <div class="time text-primary">2023 Mar 16 | 05:37</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New course enrollment
                                    <div class="time text-primary">2023 Mar 16 | 05:33</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New user registered
                                    <div class="time text-primary">2023 Mar 16 | 05:25</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User submitted in waitlist
                                    <div class="time text-primary">2023 Mar 16 | 05:17</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User submitted in waitlist
                                    <div class="time text-primary">2023 Mar 16 | 04:31</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User submitted in waitlist
                                    <div class="time text-primary">2023 Mar 16 | 04:30</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User submitted in waitlist
                                    <div class="time text-primary">2023 Mar 16 | 04:29</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User got cashback (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 20:20</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment paid successfully (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 20:20</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment verification request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 20:18</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User got cashback (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 20:18</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 20:18</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment verification request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 20:16</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User got cashback (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 20:16</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 20:16</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment verification request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 19:39</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User got cashback (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 19:39</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 19:39</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment paid successfully (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 19:24</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User got cashback (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 19:24</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment verification request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 19:21</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    User got cashback (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 19:21</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 19:21</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New course enrollment
                                    <div class="time text-primary">2023 Mar 15 | 18:30</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Gift request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 18:30</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment verification request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 18:02</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 18:02</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment verification request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 17:24</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Installment request submitted (Admin)
                                    <div class="time text-primary">2023 Mar 15 | 17:23</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Content review request
                                    <div class="time text-primary">2023 Mar 15 | 17:18</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Content review request
                                    <div class="time text-primary">2023 Mar 15 | 16:25</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New item created
                                    <div class="time text-primary">2023 Mar 15 | 16:07</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    new badge
                                    <div class="time text-primary">2022 Jun 19 | 01:54</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 17 | 04:12</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 17 | 04:08</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 17 | 04:06</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 16 | 23:50</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New support ticket
                                    <div class="time text-primary">2021 Jul 14 | 04:08</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New badge
                                    <div class="time text-primary">2021 Jul 14 | 02:09</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 14 | 01:43</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 14 | 01:42</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 14 | 01:21</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 14 | 00:07</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New reply on support ticket
                                    <div class="time text-primary">2021 Jul 12 | 00:19</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New support ticket
                                    <div class="time text-primary">2021 Jul 12 | 00:17</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New payout request
                                    <div class="time text-primary">2021 Jul 11 | 23:40</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New payout request
                                    <div class="time text-primary">2021 Jul 11 | 23:39</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New reply on support ticket
                                    <div class="time text-primary">2021 Jul 10 | 02:34</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New reply on support ticket
                                    <div class="time text-primary">2021 Jul 10 | 02:05</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New support ticket
                                    <div class="time text-primary">2021 Jul 10 | 01:44</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New support ticket
                                    <div class="time text-primary">2021 Jul 10 | 00:43</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New support ticket
                                    <div class="time text-primary">2021 Jul 10 | 00:37</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New support ticket
                                    <div class="time text-primary">2021 Jul 10 | 00:34</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New support ticket
                                    <div class="time text-primary">2021 Jul 10 | 00:27</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 9 | 17:02</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 9 | 17:00</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 9 | 16:57</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 9 | 16:44</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 9 | 16:42</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 9 | 16:40</div>
                                </div>
                            </a>
                            <a href="/admin/notifications" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white d-flex align-items-center justify-content-center">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    New comment for your class
                                    <div class="time text-primary">2021 Jul 9 | 16:38</div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="/admin/notifications">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="/store/1/default_images/logo-new.jpg" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Admin</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a href="/" class="dropdown-item has-icon">
                            <i class="fas fa-globe"></i> Show Website
                        </a>

                        <a href="/admin/users/1/edit" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Change Password
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="/admin/logout" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="/">
                        ROCKET LMS
                    </a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="/">
                        RO
                    </a>
                </div>

                <ul class="sidebar-menu">
                    <li class="">
                        <a href="/admin" class="nav-link">
                            <i class="fas fa-fire"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="/admin/marketing" class="nav-link">
                            <i class="fas fa-chart-pie"></i>
                            <span>Marketing Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-header">Education</li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Courses</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link " href="/admin/webinars?type=course">Courses</a>
                            </li>

                            <li class="">
                                <a class="nav-link " href="/admin/webinars?type=webinar">Live Classes</a>
                            </li>

                            <li class="">
                                <a class="nav-link " href="/admin/webinars?type=text_lesson">Text Courses</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/webinars/create">New</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/agora_history">In-App live history</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/webinars/personal-notes">Course Notes</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-cube"></i>
                            <span>Course Bundles</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a href="/admin/bundles" class="nav-link ">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/bundles/create">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-calendar"></i>
                            <span>Upcoming Courses</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/upcoming_courses">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/upcoming_courses/new">New</a>
                            </li>

                        </ul>
                    </li>

                    <li class="">
                        <a class="nav-link " href="/admin/quizzes">
                            <i class="fas fa-file"></i>
                            <span>Quizzes</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-certificate"></i>
                            <span>Certificates</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/certificates">Quiz Certificates</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/certificates/course-competition">Completion Certificates</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/certificates/templates">Certificate Templates</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/certificates/templates/new">New Template</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/certificates/settings">Settings</a>
                            </li>
                        </ul>
                    </li>

                    <li class="active">
                        <a href="/admin/assignments" class="nav-link">
                            <i class="fas fa-pen"></i>
                            <span>Assignments</span>
                        </a>
                    </li>

                    <li class="">
                        <a class="nav-link " href="/admin/webinars/course_forums">
                            <i class="fas fa-comment-alt"></i>
                            <span>Course Forum</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-clipboard-check"></i>
                            <span>Course Notices</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/course-noticeboards">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/course-noticeboards/send">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-user-plus"></i>
                            <span>Enrollment</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/enrollments/history">History</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/enrollments/add-student-to-class">Add a student to course</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="/admin/waitlists" class="nav-link">
                            <i class="fas fa-user-graduate"></i>
                            <span>Waitlists</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-th"></i>
                            <span>Categories</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/categories">List</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/categories/create">New</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/categories/trends">Trends</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-filter"></i>
                            <span>Filters</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/filters">List</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/filters/create">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="/admin/reviews" class="nav-link ">
                            <i class="fas fa-star"></i>
                            <span>Reviews</span>
                        </a>
                    </li>






                    <li class="menu-header">Meetings</li>

                    <li class="">
                        <a href="/admin/consultants" class="nav-link">
                            <i class="fas fa-id-card"></i>
                            <span>Consultants</span>
                        </a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="/admin/appointments">
                            <i class="fas fa-address-book"></i>
                            <span>Meetings</span>
                        </a>
                    </li>

                    <li class="menu-header">Users</li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-users"></i>
                            <span>Users</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/staffs">Staff</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/students">Students</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/instructors">Instructors</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/organizations">Organizations</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/users/create">New</a>
                            </li>
                        </ul>
                    </li>


                    <li class="">
                        <a class="nav-link" href="/admin/users/not-access-to-content">
                            <i class="fas fa-user-lock"></i> <span>Access Management</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-user-circle"></i> <span>User Roles</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link active" href="/admin/roles">List</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/roles/create">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-sitemap"></i>
                            <span>Groups</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/users/groups">List</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/users/groups/create">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a class="nav-link" href="/admin/users/badges">
                            <i class="fas fa-trophy"></i>
                            <span>Badges</span>
                        </a>
                    </li>



                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-list-alt"></i>
                            <span>Instructor Requests</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/users/become-instructors/instructors">
                                    <span>Instructors</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/users/become-instructors/organizations">
                                    <span>Organizations</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a href="/admin/users/delete-account-requests" class="nav-link">
                            <i class="fa fa-user-times"></i>
                            <span>Delete Account Requests</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-user-clock"></i>
                            <span>IP Management</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item ">
                                <a href="/admin/users/login-history" class="nav-link">
                                    <span>Login History</span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a href="/admin/users/ip-restriction" class="nav-link">
                                    <span>IP Restriction</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu-header">Forum</li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-comment-dots"></i>
                            <span>Forums</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/forums">List</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/forums/create">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-comment"></i>
                            <span>Featured Topics</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/featured-topics">List</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/featured-topics/create">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-thumbs-up"></i>
                            <span>Recommended Topics</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/recommended-topics">List</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/recommended-topics/create">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-header">CRM</li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-headphones"></i>
                            <span>Support</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/supports">Tickets</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/supports/create">New Support Ticket</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/supports/departments">Departments</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a class="nav-link" href="/admin/supports?type=course_conversations">
                            <i class="fas fa-envelope-square"></i>
                            <span>Courses Support</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-comments"></i> <span>Comments</span></a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link  beep beep-sidebar " href="/admin/comments/webinars">Course Comments</a>
                            </li>

                            <li class="">
                                <a class="nav-link " href="/admin/comments/bundles">Bundle Comments</a>
                            </li>

                            <li class="">
                                <a class="nav-link " href="/admin/comments/blog">Blog Comments</a>
                            </li>

                            <li class="">
                                <a class="nav-link " href="/admin/comments/products">Product comments</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-info-circle"></i> <span>Reports</span></a>

                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/reports/webinars">Courses</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/comments/webinars/reports">Course Comments</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/comments/blog/reports">Blog Comments</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/reports/reasons">Report Reasons</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/reports/forum-topics">Forum topics</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a class="nav-link" href="/admin/contacts">
                            <i class="fas fa-phone-square"></i>
                            <span>Contact Messages</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-sticky-note"></i> <span>Noticeboard</span></a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/noticeboards">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/noticeboards/send">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-bell"></i>
                            <span>Notifications</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/notifications">History</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/notifications/posted">Posted</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/notifications/send">New</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/notifications/templates">Templates</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/notifications/templates/create">New Template</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-header">Content</li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-store-alt"></i>
                            <span>Store</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="">
                                <a class="nav-link" href="/admin/store/products/create">New Product</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/store/products">Products</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/store/in-house-products">In-house Products</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/store/orders">Orders</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/store/in-house-orders">In-house Orders</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/store/sellers">Sellers</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/store/categories">Categories</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/store/filters">Filters</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/store/specifications">Specifications</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/store/discounts">Discounts</a>
                            </li>



                            <li class="">
                                <a class="nav-link" href="/admin/store/reviews">Reviews</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/store/settings">Settings</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-rss-square"></i>
                            <span>Blog</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/blog">Posts</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/blog/create">New Post</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/blog/categories">Categories</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-pager"></i>
                            <span>Pages</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/pages">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/pages/create">New Page</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-plus-circle"></i> <span>Additional Pages</span></a>
                        <ul class="dropdown-menu">

                            <li class="">
                                <a class="nav-link" href="/admin/additional_page/404">404 Page</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/additional_page/contact_us">Contact</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/additional_page/footer">Footer</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/additional_page/navbar_links">Top Navbar</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-address-card"></i>
                            <span>Testimonials</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/testimonials">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/testimonials/create">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="/admin/tags" class="nav-link">
                            <i class="fas fa-tags"></i>
                            <span>Tags</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-map-marked"></i>
                            <span>Localization</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/regions/countries">Countries</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/regions/provinces">Provinces</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/regions/cities">Cities</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/regions/districts">Districts</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-file-alt"></i>
                            <span>Form Builder</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/forms/create">New</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/forms">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/forms/submissions">Submissions</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-robot"></i>
                            <span>AI Content</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/ai-contents/lists">Generated Contents</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/ai-contents/templates/create">New Template</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/ai-contents/templates">Service Template</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/ai-contents/settings">Settings</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a href="/admin/content-delete-requests" class="nav-link">
                            <i class="fas fa-trash"></i>
                            <span>Content Delete Requests</span>
                        </a>
                    </li>

                    <li class="menu-header">Financial</li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span>Balances</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="">
                                <a class="nav-link" href="/admin/financial/documents">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/documents/new">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a href="/admin/financial/sales" class="nav-link">
                            <i class="fas fa-list-ul"></i>
                            <span>Sales List</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-credit-card"></i> <span>Payout</span></a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a href="/admin/financial/payouts?payout=requests" class="nav-link ">
                                    <span>Requests</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="/admin/financial/payouts?payout=history" class="nav-link">
                                    <span>History</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-university"></i> <span>Offline Payments</span></a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a href="/admin/financial/offline_payments?page_type=requests" class="nav-link  beep beep-sidebar ">
                                    <span>Requests</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="/admin/financial/offline_payments?page_type=history" class="nav-link">
                                    <span>History</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-cart-plus"></i>
                            <span>Subscribe</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/financial/subscribes">Packages</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/subscribes/new">New Package</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fa fa-gift"></i>
                            <span>Reward Points</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/rewards">History</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/rewards/items">Conditions</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/rewards/settings">Settings</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fa fa-gem"></i>
                            <span>SaaS Packages</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/financial/registration-packages">Packages</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/registration-packages/new">New Package</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/registration-packages/reports">Reports</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/registration-packages/settings">Settings</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fa fa-money-bill-wave"></i>
                            <span>Installments</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/financial/installments/create">New Plan</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/installments">Plans</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/installments/purchases">Purchases</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/installments/overdue">Overdue</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/installments/overdue_history">Overdue History</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/installments/verification_requests">Verification Requests</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/installments/verified_users">Verified Users</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/installments/settings">Settings</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-header">Marketing</li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-percent"></i>
                            <span>Coupons</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/financial/discounts">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/discounts/new">New</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/discounts?instructor_coupons=1">Instructor Coupons</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a href="/admin/cart_discount" class="nav-link">
                            <i class="fa fa-percentage"></i>
                            <span>Cart Discount</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fa fa-fire"></i>
                            <span>Course Discounts</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/financial/special_offers">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/special_offers/new">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fa fa-cart-plus"></i>
                            <span>Abandoned Cart</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/abandoned-cart/rules/create">New Rule</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/abandoned-cart/rules">Rules</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/abandoned-cart/users-carts">User Carts</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/abandoned-cart/settings">Settings</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-star"></i>
                            <span>Featured Courses</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/webinars/features">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/webinars/features/create">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-wallet"></i>
                            <span>Cashback</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/cashback/rules/new">New Rule</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/cashback/rules">Rules</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/cashback/transactions">Transactions</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/cashback/history">History</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-gift"></i>
                            <span>Gifts</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/gifts">History</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/gifts/settings">Settings</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-rocket"></i>
                            <span>Promotion Plans</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/financial/promotions">Plans</a>
                            </li>
                            <li class="">
                                <a class="nav-link" href="/admin/financial/promotions/sales">Promotion Sales</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/financial/promotions/new">New Plan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-file-image"></i>
                            <span>Ad. Banners</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/advertising/banners">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/advertising/banners/new">New</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas fa-newspaper"></i>
                            <span>Email Newsletter</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/newsletters">List</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/newsletters/send">Send</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/newsletters/history">History</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fa fa-bullhorn"></i>
                            <span>Affiliate</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a class="nav-link" href="/admin/referrals/history">History</a>
                            </li>

                            <li class="">
                                <a class="nav-link" href="/admin/referrals/users">Affiliate Users</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fa fa-gem"></i>
                            <span>Registration Bonus</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="">
                                <a class="nav-link" href="/admin/registration_bonus/history">Bonus History</a>
                            </li>


                            <li class="">
                                <a class="nav-link" href="/admin/registration_bonus/settings">Settings</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a href="/admin/advertising_modal" class="nav-link">
                            <i class="fa fa-ad"></i>
                            <span>Advertising Modal</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="/admin/floating_bars" class="nav-link">
                            <i class="fa fa-pager"></i>
                            <span>Top/Bottom Bar</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fa fa-clipboard-check"></i>
                            <span>Sales Pop-ups</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="">
                                <a class="nav-link" href="/admin/purchase_notifications">List</a>
                            </li>


                            <li class="">
                                <a class="nav-link" href="/admin/purchase_notifications/create">New</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fa fa-tag"></i>
                            <span>Custom Badges</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="">
                                <a class="nav-link" href="/admin/product-badges">List</a>
                            </li>


                            <li class="">
                                <a class="nav-link" href="/admin/product-badges/create">New</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-header">Settings</li>

                    <li class="nav-item ">
                        <a href="/admin/translator" class="nav-link">
                            <i class="fa fa-language"></i>
                            <span>Translator</span>
                        </a>
                    </li>


                    <li class="nav-item ">
                        <a href="/admin/settings" class="nav-link">
                            <i class="fas fa-cogs"></i>
                            <span>Settings</span>
                        </a>
                    </li>


                    <li>
                        <a class="nav-link" href="/admin/logout">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>
                <br>
                <br>
                <br>
            </aside>
        </div>


        <div class="main-content">

            <section class="section">
                <div class="section-header">
                    <h1>Assignments</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="/admin">Dashboard</a>
                        </div>
                        <div class="breadcrumb-item">Assignments</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-pen"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Course Assignments</h4>
                                </div>
                                <div class="card-body">
                                    2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-eye"></i></div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Pending Review</h4>
                                </div>
                                <div class="card-body">
                                    0
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-check"></i></div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Passed</h4>
                                </div>
                                <div class="card-body">
                                    1
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-times"></i></div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Failed</h4>
                                </div>
                                <div class="card-body">
                                    2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-body">
                    <section class="card">
                        <div class="card-body">
                            <form method="get" class="mb-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="input-label">Start Date</label>
                                            <div class="input-group">
                                                <input type="date" id="fsdate" class="text-center form-control" name="from" value="" placeholder="Start Date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="input-label">End Date</label>
                                            <div class="input-group">
                                                <input type="date" id="lsdate" class="text-center form-control" name="to" value="" placeholder="End Date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="input-label">Course</label>
                                            <select name="webinar_ids[]" multiple="multiple" class="form-control search-webinar-select2" data-placeholder="Search classes">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="input-label">Status</label>
                                            <select name="status" class="form-control populate">
                                                <option value="">All</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Disable</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group mt-1">
                                            <label class="input-label mb-4"> </label>
                                            <input type="submit" class="text-center btn btn-primary w-100" value="Show Results">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </section>

                    <section class="card">
                        <div class="card-body">
                            <table class="table table-striped font-14" id="datatable-details">

                                <tr>
                                    <th>Title/Course</th>
                                    <th class="text-center">Students</th>
                                    <th class="text-center">Grade</th>
                                    <th class="text-center">Pass Grade</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-right">Action</th>
                                </tr>

                                <tr>
                                    <td class="text-left">
                                        <span class="d-block font-16 font-weight-500 text-dark-blue">Mid-term Homework</span>
                                        <span class="d-block font-12 font-weight-500 text-gray">New Learning Page</span>
                                    </td>

                                    <td class="align-middle">
                                        <span class="font-weight-500">1</span>
                                    </td>

                                    <td class="align-middle">
                                        <span>100</span>
                                    </td>

                                    <td class="align-middle">
                                        <span>75</span>
                                    </td>

                                    <td class="align-middle">
                                        Active
                                    </td>

                                    <td class="align-middle text-right">
                                        <a href="/admin/assignments/2/students" class="btn-transparent text-primary mr-1" data-toggle="tooltip" data-placement="top" title="Students">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>

                                        <a href="/admin/webinars/2008/edit" target="_blank" class="btn-transparent text-primary" data-toggle="tooltip" data-placement="top" title="Course">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left">
                                        <span class="d-block font-16 font-weight-500 text-dark-blue">Students Assignment</span>
                                        <span class="d-block font-12 font-weight-500 text-gray">New Update Features</span>
                                    </td>

                                    <td class="align-middle">
                                        <span class="font-weight-500">3</span>
                                    </td>

                                    <td class="align-middle">
                                        <span>100</span>
                                    </td>

                                    <td class="align-middle">
                                        <span>70</span>
                                    </td>

                                    <td class="align-middle">
                                        Active
                                    </td>

                                    <td class="align-middle text-right">
                                        <a href="/admin/assignments/1/students" class="btn-transparent text-primary mr-1" data-toggle="tooltip" data-placement="top" title="Students">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>

                                        <a href="/admin/webinars/2010/edit" target="_blank" class="btn-transparent text-primary" data-toggle="tooltip" data-placement="top" title="Course">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </section>
                </div>
            </section>


        </div>
    </div>

    <div class="modal fade" id="fileViewModal" tabindex="-1" aria-labelledby="fileViewModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <img src="" class="w-100" height="350px" alt="">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="ai-content-generator-drawer bg-white">
    <div class="ai-content-generator-drawer-header d-flex align-items-center justify-content-between p-15">
        <div class="">
            <h5 class="font-16 font-weight-bold mb-0">AI Content Generator</h5>
            <p class="mt-1 font-12 text-gray mb-0">Generate content using AI fast and professional</p>
        </div>

        <button type="button" class="js-right-drawer-close d-flex btn-transparent">
            <i data-feather="x" width="33" height="33" class=""></i>
        </button>
    </div>

    <div class="drawer-content p-15" data-simplebar>

        <form action="/admin/ai-contents/generate" method="post">
            <input type="hidden" name="_token" value="jTHiNXzKOH41hiOj5TKlsKqBDb59MYHgbrdgbsv9">

            <div class="d-flex align-items-center p-15 rounded-sm  bg-info-light border-gray300 mb-15">
                <div class="d-flex-center size-40 rounded-circle bg-white">
                    <img src="/assets/default/img/ai/ai-chip.svg" alt="ai" class="" width="20px" height="20px">
                </div>
                <div class="ml-2">
                    <h5 class="d-block font-weight-bold text-gray font-14 mb-0">Generate content easily!</h5>
                    <p class="font-12 text-gray mb-0">Select the content type you want and describe your requirements and get the content</p>
                </div>
            </div>

            <div class="form-group mb-1">
                <label class="input-label">Service Type</label>
                <select name="service_type" class="form-control">
                    <option value="">Select a service type</option>
                    <option value="text">Text</option>
                    <option value="image">Image</option>
                </select>
            </div>
            <div class="">
                <span class="js-ajax-service_type"></span>
                <div class="invalid-feedback d-block"></div>
            </div>


            <div class="js-text-templates-field mt-20 d-none">
                <div class="form-group">
                    <label class="input-label">Service</label>
                    <select name="text_service_id" class="js-ajax-text_service_id js-text-service-templates form-control">
                        <option value="">Select a service</option>

                        <option value="1" data-enable-length="yes" data-length="5">Course Title</option>
                        <option value="2" data-enable-length="yes" data-length="40">Course Short Description</option>
                        <option value="3" data-enable-length="yes" data-length="300">Course Long Description</option>
                        <option value="4" data-enable-length="yes" data-length="5">Blog Title</option>
                        <option value="5" data-enable-length="yes" data-length="100">Blog Short Description</option>
                        <option value="6" data-enable-length="yes" data-length="300">Blog Long Description</option>
                        <option value="8" data-enable-length="yes" data-length="160">Course SEO Description</option>
                        <option value="9" data-enable-length="yes" data-length="160">Blog SEO Description</option>
                        <option value="10" data-enable-length="yes" data-length="300">Upcoming Course Description</option>
                        <option value="11" data-enable-length="yes" data-length="150">Quiz Question</option>
                        <option value="12" data-enable-length="no" data-length="">Generate FAQ</option>
                        <option value="13" data-enable-length="no" data-length="">Course Requirements</option>
                        <option value="14" data-enable-length="yes" data-length="200">Form Description</option>
                        <option value="15" data-enable-length="yes" data-length="200">Course Advertising Description</option>
                        <option value="16" data-enable-length="yes" data-length="300">&quot;About Us&quot; Page Description</option>
                        <option value="17" data-enable-length="yes" data-length="100">Generate Notice</option>
                        <option value="18" data-enable-length="yes" data-length="5">Store Product Title</option>
                        <option value="19" data-enable-length="yes" data-length="300">Store Product Description</option>
                        <option value="20" data-enable-length="yes" data-length="160">Store Product SEO Description</option>

                        <option value="custom_text">Custom Text</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="js-for-service-fields form-group d-none">
                    <label class="input-label">Language</label>
                    <select name="language" class="js-ajax-language form-control">
                        <option value="EN">English</option>
                        <option value="AR">Arabic</option>
                        <option value="ES">Spanish</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="js-for-service-fields form-group d-none">
                    <label class="input-label">Keyword</label>
                    <input type="text" name="keyword" class="js-ajax-keyword form-control" />
                    <div class="invalid-feedback"></div>
                    <p class="mt-1 font-12 text-gray">Describe in some words about what you want</p>
                </div>

                <div class="form-group js-question-field d-none">
                    <label class="input-label">Question</label>
                    <input type="text" name="question" class="js-ajax-question form-control" />
                    <div class="invalid-feedback"></div>
                    <p class="mt-1 font-12 text-gray">Ask AI what you want</p>
                </div>


                <div class="js-service-length-field form-group d-none">
                    <label class="input-label">Length</label>
                    <input type="number" name="length" class="js-ajax-length form-control" min="1" max="" data-max-error="The maximum allowed is:" />
                    <div class="invalid-feedback"></div>
                </div>
            </div>


            <div class="js-image-templates-field d-none">

                <div class="form-group mt-20">
                    <label class="input-label">Service</label>
                    <select name="image_service_id" class="js-ajax-image_service_id js-image-service-templates form-control">
                        <option value="">Select a service</option>

                        <option value="7">Genrate Image</option>

                        <option value="custom_image">Custom Image</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="form-group js-image-question-field d-none">
                    <label class="input-label">Question</label>
                    <input type="text" name="image_question" class="js-ajax-image_question form-control" />
                    <div class="invalid-feedback"></div>
                    <p class="mt-1 font-12 text-gray">Ask AI what you want</p>
                </div>

                <div class="js-image-keyword-field form-group d-none">
                    <label class="input-label">Keyword</label>
                    <input type="text" name="image_keyword" class="js-ajax-image_keyword form-control" />
                    <div class="invalid-feedback"></div>
                    <p class="mt-1 font-12 text-gray">Describe in some words about what you want</p>
                </div>

                <div class="js-image-size-field form-group d-none">
                    <label class="input-label">Image Size</label>
                    <select name="image_size" class="js-ajax-image_size form-control">
                        <option value="">Select Image Size</option>
                        <option value="256">256x256</option>
                        <option value="512">512x512</option>
                        <option value="1024">1024x1024</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>

            </div>

            <button type="button" class="js-submit-ai-content-form btn btn-primary btn-block mt-20" disabled>Disabled in Demo version</button>
        </form>


        <div id="generatedTextContents" class="d-none"></div>



        <div class="js-image-generated mt-20 p-15 bg-info-light border-gray300 rounded-sm d-none">
            <div class="">
                <h4 class="font-14 text-gray">Generated Content</h4>
                <p class="mt-1 text-gray font-12">Click on images to download them</p>
            </div>

            <div class="js-content mt-15 d-flex-center flex-wrap">

            </div>
        </div>

    </div>
</div>
<div class="ai-content-generator-drawer-mask"></div>


<!-- General JS Scripts -->
<script src="/assets/admin/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="/assets/admin/vendor/poper/popper.min.js"></script>
<script src="/assets/admin/vendor/bootstrap/bootstrap.min.js"></script>
<script src="/assets/admin/vendor/nicescroll/jquery.nicescroll.min.js"></script>
<script src="/assets/admin/vendor/moment/moment.min.js"></script>
<script src="/assets/admin/js/stisla.js"></script>
<script src="/assets/default/vendors/toast/jquery.toast.min.js"></script>

<script>
    (function () {
        "use strict";

        window.csrfToken = $('meta[name="csrf-token"]');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        window.adminPanelPrefix = '/admin';

    })(jQuery);
</script>

<script src="/assets/admin/vendor/daterangepicker/daterangepicker.min.js"></script>
<script src="/assets/default/vendors/select2/select2.min.js"></script>

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<!-- Template JS File -->
<script src="/assets/admin/js/scripts.js"></script>


<link href="/assets/default/vendors/flagstrap/css/flags.css" rel="stylesheet">
<script src="/assets/default/vendors/flagstrap/js/jquery.flagstrap.min.js"></script>
<script src="/assets/default/js/parts/top_nav_flags.min.js"></script>

<script>
    var deleteAlertTitle = 'Are you sure?';
    var deleteAlertHint = 'This action cannot be undone!';
    var deleteAlertConfirm = 'Delete';
    var deleteAlertCancel = 'Cancel';
    var deleteAlertSuccess = 'Success';
    var deleteAlertFail = 'Failed';
    var deleteAlertFailHint = 'Error while deleting item!';
    var deleteAlertSuccessHint = 'Item successfully deleted.';
    var forbiddenRequestToastTitleLang = '&quot;FORBIDDEN&quot; Request';
    var forbiddenRequestToastMsgLang = 'You not access to this content.';
    var generatedContentLang = 'Generated Content';
    var copyLang = 'Copy';
    var doneLang = 'Done';
</script>

<script src="/assets/admin/js/custom.js"></script>
<script src="/assets/default/js/panel/ai-content-generator.min.js"></script>

<script>
</script>
</body>

</html>
