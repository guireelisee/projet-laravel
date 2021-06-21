<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MOPHY - Payment Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>
<body>

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!--*******************
            Preloader end
            ********************-->

            <!--**********************************
                Main wrapper start
                ***********************************-->
                <div id="main-wrapper">

                    <!--**********************************
                        Nav header start
                        ***********************************-->
                        <div class="nav-header">
                            <a href="index.html" class="brand-logo">
                                <img class="logo-abbr" src="images/logo.png" alt="">
                                <img class="logo-compact" src="images/logo-text.png" alt="">
                                <img class="brand-title" src="images/logo-text.png" alt="">
                            </a>

                            <div class="nav-control">
                                <div class="hamburger">
                                    <span class="line"></span><span class="line"></span><span class="line"></span>
                                </div>
                            </div>
                        </div>
                        <!--**********************************
                            Nav header end
                            ***********************************-->

                            <!--**********************************
                                Header start
                                ***********************************-->
                                <div class="header">
                                    <div class="header-content">
                                        <nav class="navbar navbar-expand">
                                            <div class="collapse navbar-collapse justify-content-between">
                                                <div class="header-left">

                                                </div>
                                                <ul class="navbar-nav header-right">
                                                    <li class="nav-item dropdown notification_dropdown">
                                                        <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6001 4.3008V1.4C12.6001 0.627199 13.2273 0 14.0001 0C14.7715 0 15.4001 0.627199 15.4001 1.4V4.3008C17.4805 4.6004 19.4251 5.56639 20.9287 7.06999C22.7669 8.90819 23.8001 11.4016 23.8001 14V19.2696L24.9327 21.5348C25.4745 22.6198 25.4171 23.9078 24.7787 24.9396C24.1417 25.9714 23.0147 26.6 21.8023 26.6H15.4001C15.4001 27.3728 14.7715 28 14.0001 28C13.2273 28 12.6001 27.3728 12.6001 26.6H6.19791C4.98411 26.6 3.85714 25.9714 3.22014 24.9396C2.58174 23.9078 2.52433 22.6198 3.06753 21.5348L4.20011 19.2696V14C4.20011 11.4016 5.23194 8.90819 7.07013 7.06999C8.57513 5.56639 10.5183 4.6004 12.6001 4.3008ZM14.0001 6.99998C12.1423 6.99998 10.3629 7.73779 9.04973 9.05099C7.73653 10.3628 7.00011 12.1436 7.00011 14V19.6C7.00011 19.817 6.94833 20.0312 6.85173 20.2258C6.85173 20.2258 6.22871 21.4718 5.57072 22.7864C5.46292 23.0034 5.47412 23.2624 5.60152 23.4682C5.72892 23.674 5.95431 23.8 6.19791 23.8H21.8023C22.0445 23.8 22.2699 23.674 22.3973 23.4682C22.5247 23.2624 22.5359 23.0034 22.4281 22.7864C21.7701 21.4718 21.1471 20.2258 21.1471 20.2258C21.0505 20.0312 21.0001 19.817 21.0001 19.6V14C21.0001 12.1436 20.2623 10.3628 18.9491 9.05099C17.6359 7.73779 15.8565 6.99998 14.0001 6.99998Z" fill="#3E4954"/>
                                                            </svg>
                                                            <span class="badge light text-white bg-warning rounded-circle">12</span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 ">
                                                                <ul class="timeline">
                                                                    <li>
                                                                        <div class="timeline-panel">
                                                                            <div class="media mr-2 media-success">
                                                                                <i class="fa fa-home"></i>
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item dropdown header-profile">
                                                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                                            <img src="images/profile/17.jpg" width="20" alt=""/>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="app-profile.html" class="dropdown-item ai-icon">
                                                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                                <span class="ml-2">Profil </span>
                                                            </a>
                                                            <a href="page-login.html" class="dropdown-item ai-icon">
                                                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                                <span class="ml-2">Se déconnecter </span>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <!--**********************************
                                    Header end ti-comment-alt
                                    ***********************************-->

                                    <!--**********************************
                                        Sidebar start
                                        ***********************************-->
                                        <div class="deznav">
                                            <div class="deznav-scroll">
                                                <ul class="metismenu" id="menu">
                                                    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                                                        <i class="flaticon-381-notepad"></i>
                                                        <span class="nav-text">Tableau de bord</span>
                                                    </a>
                                                </li>
                                                <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                                                    <i class="flaticon-381-settings-2"></i>
                                                    <span class="nav-text">Utilisateurs</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="copyright">
                                            <p><strong>Mophy Payment Admin Dashboard</strong> © 2021 All Rights Reserved</p>
                                            <p>Made with <span class="heart"></span> by DexignZone</p>
                                        </div>
                                    </div>
                                </div>
                                <!--**********************************
                                    Sidebar end
                                    ***********************************-->

                                    <!--**********************************
                                        Content body start
                                        ***********************************-->
                                        <div class="content-body">
                                            <!-- row -->
                                            <div class="container-fluid">
                                                <div class="form-head mb-4">
                                                    <h2 class="text-black font-w600 mb-0">Fiches</h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <a class="btn btn-outline-primary rounded d-block btn-lg" data-toggle="modal" data-target="#newspends">Enregistrer une demande de salle</a>
                                                        <div class="col-xl-3 mb-3 col-xxl-6 col-sm-6">
                                                            <div class="modal fade" id="newspends">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Modal title</h5>
                                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="card">
                                                            <div class="card-header d-block d-sm-flex border-0">
                                                                <div>
                                                                    <h4 class="fs-20 text-black">Tanguettes</h4>
                                                                    <p class="mb-0 fs-13">Fiches de suivi des demandes</p>
                                                                </div>
                                                                <div class="card-action card-tabs mt-3 mt-sm-0">
                                                                    <ul class="nav nav-tabs" role="tablist">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">Par mois</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-toggle="tab" href="#Weekly" role="tab">Par semaine</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" data-toggle="tab" href="#Today" role="tab">Aujourd'hui</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="card-body payment-bx tab-content p-0">
                                                                <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                                                                    <div id="accordion-one" class="accordion accordion-primary">
                                                                        <div class="accordion__item border-bottom mb-0">
                                                                            <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne1">
                                                                                <div class="mb-lg-0 mb-3 d-flex align-items-center">
                                                                                    <div class="profile-image mr-4">
                                                                                        <img src="images/avatar/10.png" alt="" width="63" class="rounded-circle">
                                                                                        <span class="bg-success">
                                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                                <g clip-path="url(#clip3)">
                                                                                                    <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"/>
                                                                                                    <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"/>
                                                                                                </g>
                                                                                                <defs>
                                                                                                    <clipPath id="clip3">
                                                                                                        <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"/>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">GUIRE Elisée</a></h6>
                                                                                        <span class="fs-14">Etudiant</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="mb-lg-0 mb-3 text-black px-2">June 1, 2020 <br>08:22 AM</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$5,553</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span>
                                                                                <a class="mb-lg-0 mb-3 btn btn-outline-success btn-md btn-rounded mx-2" href="javascript:void(0)">Completed</a>
                                                                                <span class="accordion__header--indicator"></span>
                                                                            </div>
                                                                            <div id="default_collapseOne1" class="collapse accordion__body" data-parent="#accordion-one">
                                                                                <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">ID Payment</p>
                                                                                        <span class="text-black font-w500">#00123521</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Payment Method</p>
                                                                                        <span class="text-black font-w500">MasterCard 404</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Invoice Date</p>
                                                                                        <span class="text-black font-w500">April 29, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Due Date</p>
                                                                                        <span class="text-black font-w500">June 5, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Date Paid</p>
                                                                                        <span class="text-black font-w500">June 4, 2020</span>
                                                                                    </div>
                                                                                    <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                                                                                        <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                                                                                        </svg>
                                                                                        <p class="mb-0 fs-14">Lorem ipsum dolor sit<br> amet, consectetur </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="accordion__item border-bottom mb-0">
                                                                            <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne5">
                                                                                <div class="mb-lg-0 mb-3 d-flex align-items-center">
                                                                                    <div class="profile-image mr-4">
                                                                                        <img src="images/avatar/13.png" alt="" width="63" class="rounded-circle">
                                                                                        <span class="bg-danger">
                                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                                <g clip-path="url(#clip6)">
                                                                                                    <path d="M10.4125 1.15001C10.225 1.53751 10.3906 2.00627 10.7781 2.19377C11.8563 2.71252 12.7688 3.51876 13.4188 4.52814C14.0844 5.56251 14.4375 6.76251 14.4375 8.00001C14.4375 11.55 11.55 14.4375 8 14.4375C4.45 14.4375 1.5625 11.55 1.5625 8.00002C1.5625 6.76251 1.91562 5.56252 2.57812 4.52501C3.225 3.51564 4.14062 2.70939 5.21875 2.19064C5.60625 2.00314 5.77187 1.53752 5.58437 1.14689C5.39687 0.759391 4.93125 0.593765 4.54062 0.781265C3.2 1.42502 2.06562 2.42501 1.2625 3.68126C0.4375 4.96877 -4.16897e-07 6.46251 -3.49691e-07 8.00002C-2.56258e-07 10.1375 0.83125 12.1469 2.34375 13.6563C3.85313 15.1688 5.8625 16 8 16C10.1375 16 12.1469 15.1688 13.6563 13.6563C15.1688 12.1438 16 10.1375 16 8.00001C16 6.46251 15.5625 4.96876 14.7344 3.68126C13.9281 2.42814 12.7938 1.42501 11.4563 0.781265C11.0656 0.59689 10.6 0.759389 10.4125 1.15001Z" fill="white"/>
                                                                                                    <path d="M11.0407 7.58437C11.1938 7.43125 11.2688 7.23125 11.2688 7.03125C11.2688 6.83125 11.1938 6.63125 11.0407 6.47812L9.07503 4.5125C8.78753 4.225 8.40628 4.06875 8.00315 4.06875C7.60003 4.06875 7.21565 4.22813 6.93127 4.5125L4.96565 6.47812C4.6594 6.78437 4.6594 7.27812 4.96565 7.58437C5.2719 7.89062 5.76565 7.89062 6.0719 7.58437L7.22502 6.43125L7.22502 10.8719C7.22502 11.3031 7.57503 11.6531 8.00628 11.6531C8.43753 11.6531 8.78753 11.3031 8.78753 10.8719L8.78753 6.42812L9.94065 7.58125C10.2407 7.8875 10.7344 7.8875 11.0407 7.58437Z" fill="white"/>
                                                                                                </g>
                                                                                                <defs>
                                                                                                    <clipPath id="clip6">
                                                                                                        <rect width="16" height="16" fill="white" transform="translate(0 16) rotate(-90)"/>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Peter Parkur</a></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="mb-lg-0 mb-3 text-black px-2">June 10, 2020 <br>08:22 AM</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$5,553</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span>
                                                                                <a class="mb-lg-0 mb-3 btn btn-outline-warning btn-md btn-rounded mx-2" href="javascript:void(0)">Pending</a>
                                                                                <span class="accordion__header--indicator"></span>
                                                                            </div>
                                                                            <div id="default_collapseOne5" class="collapse accordion__body" data-parent="#accordion-one">
                                                                                <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">ID Payment</p>
                                                                                        <span class="text-black font-w500">#00123521</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Payment Method</p>
                                                                                        <span class="text-black font-w500">MasterCard 404</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Invoice Date</p>
                                                                                        <span class="text-black font-w500">April 29, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Due Date</p>
                                                                                        <span class="text-black font-w500">June 5, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Date Paid</p>
                                                                                        <span class="text-black font-w500">June 4, 2020</span>
                                                                                    </div>
                                                                                    <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                                                                                        <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                                                                                        </svg>
                                                                                        <p class="mb-0 fs-14">Lorem ipsum dolor sit<br> amet, consectetur </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="Weekly" role="tabpanel">
                                                                    <div id="accordion-two" class="accordion accordion-primary">
                                                                        <div class="accordion__item border-bottom mb-0">
                                                                            <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne1d">
                                                                                <div class="mb-lg-0 mb-3 d-flex align-items-center">
                                                                                    <div class="profile-image mr-4">
                                                                                        <img src="images/avatar/10.png" alt="" width="63" class="rounded-circle">
                                                                                        <span class="bg-success">
                                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                                <g clip-path="url(#clip7)">
                                                                                                    <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"/>
                                                                                                    <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"/>
                                                                                                </g>
                                                                                                <defs>
                                                                                                    <clipPath id="clip7">
                                                                                                        <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"/>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">XYZ Store ID</a></h6>
                                                                                        <span class="fs-14">Online Shop</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="mb-lg-0 mb-3 text-black px-2">June 1, 2020 <br>08:22 AM</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$5,553</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span>
                                                                                <a class="mb-lg-0 mb-3 btn btn-outline-success btn-md btn-rounded mx-2" href="#">Terminé</a>
                                                                                <span class="accordion__header--indicator"></span>
                                                                            </div>
                                                                            <div id="default_collapseOne1d" class="collapse accordion__body" data-parent="#accordion-one">
                                                                                <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">ID Payment</p>
                                                                                        <span class="text-black font-w500">#00123521</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Payment Method</p>
                                                                                        <span class="text-black font-w500">MasterCard 404</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Invoice Date</p>
                                                                                        <span class="text-black font-w500">April 29, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Due Date</p>
                                                                                        <span class="text-black font-w500">June 5, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Date Paid</p>
                                                                                        <span class="text-black font-w500">June 4, 2020</span>
                                                                                    </div>
                                                                                    <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                                                                                        <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                                                                                        </svg>
                                                                                        <p class="mb-0 fs-14">Lorem ipsum dolor sit<br> amet, consectetur </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion__item border-bottom mb-0">
                                                                            <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne222">
                                                                                <div class="mb-lg-0 mb-3 d-flex align-items-center">
                                                                                    <div class="profile-image mr-4">
                                                                                        <img src="images/avatar/11.png" alt="" width="63" class="rounded-circle">
                                                                                        <span class="bg-danger">
                                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                                <g clip-path="url(#clip8)">
                                                                                                    <path d="M10.4125 1.15001C10.225 1.53751 10.3906 2.00627 10.7781 2.19377C11.8563 2.71252 12.7688 3.51876 13.4188 4.52814C14.0844 5.56251 14.4375 6.76251 14.4375 8.00001C14.4375 11.55 11.55 14.4375 8 14.4375C4.45 14.4375 1.5625 11.55 1.5625 8.00002C1.5625 6.76251 1.91562 5.56252 2.57812 4.52501C3.225 3.51564 4.14062 2.70939 5.21875 2.19064C5.60625 2.00314 5.77187 1.53752 5.58437 1.14689C5.39687 0.759391 4.93125 0.593765 4.54062 0.781265C3.2 1.42502 2.06562 2.42501 1.2625 3.68126C0.4375 4.96877 -4.16897e-07 6.46251 -3.49691e-07 8.00002C-2.56258e-07 10.1375 0.83125 12.1469 2.34375 13.6563C3.85313 15.1688 5.8625 16 8 16C10.1375 16 12.1469 15.1688 13.6563 13.6563C15.1688 12.1438 16 10.1375 16 8.00001C16 6.46251 15.5625 4.96876 14.7344 3.68126C13.9281 2.42814 12.7938 1.42501 11.4563 0.781265C11.0656 0.59689 10.6 0.759389 10.4125 1.15001Z" fill="white"/>
                                                                                                    <path d="M11.0407 7.58437C11.1938 7.43125 11.2688 7.23125 11.2688 7.03125C11.2688 6.83125 11.1938 6.63125 11.0407 6.47812L9.07503 4.5125C8.78753 4.225 8.40628 4.06875 8.00315 4.06875C7.60003 4.06875 7.21565 4.22813 6.93127 4.5125L4.96565 6.47812C4.6594 6.78437 4.6594 7.27812 4.96565 7.58437C5.2719 7.89062 5.76565 7.89062 6.0719 7.58437L7.22502 6.43125L7.22502 10.8719C7.22502 11.3031 7.57503 11.6531 8.00628 11.6531C8.43753 11.6531 8.78753 11.3031 8.78753 10.8719L8.78753 6.42812L9.94065 7.58125C10.2407 7.8875 10.7344 7.8875 11.0407 7.58437Z" fill="white"/>
                                                                                                </g>
                                                                                                <defs>
                                                                                                    <clipPath id="clip8">
                                                                                                        <rect width="16" height="16" fill="white" transform="translate(0 16) rotate(-90)"/>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Andrew Lee</a></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="mb-lg-0 mb-3 text-black px-2">June 3, 2020 <br>04:29 AM</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$2,351</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span>
                                                                                <a class="mb-lg-0 mb-3 btn btn-outline-dark btn-md btn-rounded mx-2" href="javascript:void(0)">Canceled</a>
                                                                                <span class="accordion__header--indicator"></span>
                                                                            </div>
                                                                            <div id="default_collapseOne222" class="collapse accordion__body" data-parent="#accordion-one">
                                                                                <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">ID Payment</p>
                                                                                        <span class="text-black font-w500">#00123521</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Payment Method</p>
                                                                                        <span class="text-black font-w500">MasterCard 404</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Invoice Date</p>
                                                                                        <span class="text-black font-w500">April 29, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Due Date</p>
                                                                                        <span class="text-black font-w500">June 5, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Date Paid</p>
                                                                                        <span class="text-black font-w500">June 4, 2020</span>
                                                                                    </div>
                                                                                    <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                                                                                        <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                                                                                        </svg>
                                                                                        <p class="mb-0 fs-14">Lorem ipsum dolor sit<br> amet, consectetur </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="accordion__item border-bottom mb-0">
                                                                            <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne321">
                                                                                <div class="mb-lg-0 mb-3 d-flex align-items-center">
                                                                                    <div class="profile-image mr-4">
                                                                                        <img src="images/avatar/12.png" alt="" width="63" class="rounded-circle">
                                                                                        <span class="bg-success">
                                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                                <g clip-path="url(#clip9)">
                                                                                                    <path d="M10.4125 14.85C10.225 14.4625 10.3906 13.9937 10.7781 13.8062C11.8563 13.2875 12.7688 12.4812 13.4188 11.4719C14.0844 10.4375 14.4375 9.23749 14.4375 7.99999C14.4375 4.44999 11.55 1.56249 8 1.56249C4.45 1.56249 1.5625 4.44999 1.5625 7.99999C1.5625 9.23749 1.91562 10.4375 2.57812 11.475C3.225 12.4844 4.14062 13.2906 5.21875 13.8094C5.60625 13.9969 5.77187 14.4625 5.58437 14.8531C5.39687 15.2406 4.93125 15.4062 4.54062 15.2187C3.2 14.575 2.06562 13.575 1.2625 12.3187C0.4375 11.0312 -4.16897e-07 9.53749 -3.49691e-07 7.99999C-2.56258e-07 5.86249 0.83125 3.85312 2.34375 2.34374C3.85313 0.831242 5.8625 -7.37314e-06 8 -7.2797e-06C10.1375 -7.18627e-06 12.1469 0.831243 13.6563 2.34374C15.1688 3.85624 16 5.86249 16 7.99999C16 9.53749 15.5625 11.0312 14.7344 12.3187C13.9281 13.5719 12.7938 14.575 11.4563 15.2187C11.0656 15.4031 10.6 15.2406 10.4125 14.85Z" fill="white"/>
                                                                                                    <path d="M11.0407 8.41563C11.1938 8.56876 11.2688 8.76876 11.2688 8.96876C11.2688 9.16876 11.1938 9.36876 11.0407 9.52188L9.07503 11.4875C8.78753 11.775 8.40628 11.9313 8.00315 11.9313C7.60003 11.9313 7.21565 11.7719 6.93127 11.4875L4.96565 9.52188C4.6594 9.21563 4.6594 8.72188 4.96565 8.41563C5.2719 8.10938 5.76565 8.10938 6.0719 8.41563L7.22502 9.56876L7.22502 5.12814C7.22502 4.69689 7.57503 4.34689 8.00628 4.34689C8.43753 4.34689 8.78753 4.69689 8.78753 5.12814L8.78753 9.57188L9.94065 8.41876C10.2407 8.11251 10.7344 8.11251 11.0407 8.41563Z" fill="white"/>
                                                                                                </g>
                                                                                                <defs>
                                                                                                    <clipPath id="clip9">
                                                                                                        <rect width="16" height="16" fill="white" transform="matrix(-4.37114e-08 1 1 4.37114e-08 0 -7.62939e-06)"/>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Olivia Brownlee</a></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="mb-lg-0 mb-3 text-black px-2">June 4, 2020 <br>02:37 AM</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$3,543</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span>
                                                                                <a class="mb-lg-0 mb-3 btn btn-outline-success btn-md btn-rounded mx-2" href="javascript:void(0)">Completed</a>
                                                                                <span class="accordion__header--indicator"></span>
                                                                            </div>
                                                                            <div id="default_collapseOne321" class="collapse accordion__body" data-parent="#accordion-one">
                                                                                <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">ID Payment</p>
                                                                                        <span class="text-black font-w500">#00123521</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Payment Method</p>
                                                                                        <span class="text-black font-w500">MasterCard 404</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Invoice Date</p>
                                                                                        <span class="text-black font-w500">April 29, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Due Date</p>
                                                                                        <span class="text-black font-w500">June 5, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Date Paid</p>
                                                                                        <span class="text-black font-w500">June 4, 2020</span>
                                                                                    </div>
                                                                                    <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                                                                                        <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                                                                                        </svg>
                                                                                        <p class="mb-0 fs-14">Lorem ipsum dolor sit<br> amet, consectetur </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="Today" role="tabpanel">
                                                                    <div id="accordion-three" class="accordion accordion-primary">
                                                                        <div class="accordion__item border-bottom mb-0">
                                                                            <div class="d-flex flex-wrap align-items-center accordion__header collapsed rounded" data-toggle="collapse" data-target="#default_collapseOne51">
                                                                                <div class="mb-lg-0 mb-3 d-flex align-items-center">
                                                                                    <div class="profile-image mr-4">
                                                                                        <img src="images/avatar/13.png" alt="" width="63" class="rounded-circle">
                                                                                        <span class="bg-danger">
                                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                                <g clip-path="url(#clip10)">
                                                                                                    <path d="M10.4125 1.15001C10.225 1.53751 10.3906 2.00627 10.7781 2.19377C11.8563 2.71252 12.7688 3.51876 13.4188 4.52814C14.0844 5.56251 14.4375 6.76251 14.4375 8.00001C14.4375 11.55 11.55 14.4375 8 14.4375C4.45 14.4375 1.5625 11.55 1.5625 8.00002C1.5625 6.76251 1.91562 5.56252 2.57812 4.52501C3.225 3.51564 4.14062 2.70939 5.21875 2.19064C5.60625 2.00314 5.77187 1.53752 5.58437 1.14689C5.39687 0.759391 4.93125 0.593765 4.54062 0.781265C3.2 1.42502 2.06562 2.42501 1.2625 3.68126C0.4375 4.96877 -4.16897e-07 6.46251 -3.49691e-07 8.00002C-2.56258e-07 10.1375 0.83125 12.1469 2.34375 13.6563C3.85313 15.1688 5.8625 16 8 16C10.1375 16 12.1469 15.1688 13.6563 13.6563C15.1688 12.1438 16 10.1375 16 8.00001C16 6.46251 15.5625 4.96876 14.7344 3.68126C13.9281 2.42814 12.7938 1.42501 11.4563 0.781265C11.0656 0.59689 10.6 0.759389 10.4125 1.15001Z" fill="white"/>
                                                                                                    <path d="M11.0407 7.58437C11.1938 7.43125 11.2688 7.23125 11.2688 7.03125C11.2688 6.83125 11.1938 6.63125 11.0407 6.47812L9.07503 4.5125C8.78753 4.225 8.40628 4.06875 8.00315 4.06875C7.60003 4.06875 7.21565 4.22813 6.93127 4.5125L4.96565 6.47812C4.6594 6.78437 4.6594 7.27812 4.96565 7.58437C5.2719 7.89062 5.76565 7.89062 6.0719 7.58437L7.22502 6.43125L7.22502 10.8719C7.22502 11.3031 7.57503 11.6531 8.00628 11.6531C8.43753 11.6531 8.78753 11.3031 8.78753 10.8719L8.78753 6.42812L9.94065 7.58125C10.2407 7.8875 10.7344 7.8875 11.0407 7.58437Z" fill="white"/>
                                                                                                </g>
                                                                                                <defs>
                                                                                                    <clipPath id="clip10">
                                                                                                        <rect width="16" height="16" fill="white" transform="translate(0 16) rotate(-90)"/>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div>
                                                                                        <h6 class="fs-16 font-w700 mb-0"><a class="text-black" href="javascript:void(0)">Peter Parkur</a></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="mb-lg-0 mb-3 text-black px-2">June 10, 2020 <br>08:22 AM</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">+$5,553</span>
                                                                                <span class="mb-lg-0 mb-3 text-black font-w600 px-2">MasterCard 404</span>
                                                                                <a class="mb-lg-0 mb-3 btn btn-outline-warning btn-md btn-rounded mx-2" href="javascript:void(0)">Pending</a>
                                                                                <span class="accordion__header--indicator"></span>
                                                                            </div>
                                                                            <div id="default_collapseOne51" class="collapse accordion__body" data-parent="#accordion-one">
                                                                                <div class="d-flex flex-wrap align-items-center accordion__body--text p-0">
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">ID Payment</p>
                                                                                        <span class="text-black font-w500">#00123521</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Payment Method</p>
                                                                                        <span class="text-black font-w500">MasterCard 404</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Invoice Date</p>
                                                                                        <span class="text-black font-w500">April 29, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Due Date</p>
                                                                                        <span class="text-black font-w500">June 5, 2020</span>
                                                                                    </div>
                                                                                    <div class="mr-3 mb-3">
                                                                                        <p class="fs-12 mb-2">Date Paid</p>
                                                                                        <span class="text-black font-w500">June 4, 2020</span>
                                                                                    </div>
                                                                                    <div class="d-flex p-3 rounded bgl-dark align-items-center mb-3">
                                                                                        <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="../../www.w3.org/2000/svg.html">
                                                                                            <path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#A4A4A4"/>
                                                                                            <path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#A4A4A4"/>
                                                                                        </svg>
                                                                                        <p class="mb-0 fs-14">Lorem ipsum dolor sit<br> amet, consectetur </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--**********************************
                                    Content body end
                                    ***********************************-->

                                    <!--**********************************
                                        Footer start
                                        ***********************************-->
                                        <div class="footer">
                                            <div class="copyright">
                                                <p>Copyright © Désigné &amp; Developpé par <a href="#" target="_blank">ACWE</a> 2021</p>
                                            </div>
                                        </div>
                                        <!--**********************************
                                            Footer end
                                            ***********************************-->

                                            <!--**********************************
                                                Support ticket button start
                                                ***********************************-->

                                                <!--**********************************
                                                    Support ticket button end
                                                    ***********************************-->


                                                </div>
                                                <!--**********************************
                                                    Main wrapper end
                                                    ***********************************-->

                                                    <!--**********************************
                                                        Scripts
                                                        ***********************************-->
                                                        <!-- Required vendors -->
                                                        <script src="vendor/global/global.min.js"></script>
                                                        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
                                                        <script src="vendor/chart.js/Chart.bundle.min.js"></script>
                                                        <script src="js/custom.min.js"></script>
                                                        <script src="js/deznav-init.js"></script>


                                                        <!-- Chart piety plugin files -->
                                                        <script src="vendor/peity/jquery.peity.min.js"></script>

                                                        <!-- Apex Chart -->
                                                        <script src="vendor/apexchart/apexchart.js"></script>

                                                        <!-- Dashboard 1 -->
                                                        <script src="js/dashboard/my-wallet.js"></script>


                                                    </body>

                                                    </html>
