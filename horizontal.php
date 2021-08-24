<?php require_once('hheader.php'); ?>
<?php //require_once('hmenu.php'); ?>
<!-- Main Menu -->
<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 hidden-xs">
                <div class="logo">
                    <a href="../index.html">
                        <span class="logo-emblem"><img src="images/boot.png" alt="BA" /></span>
                        <span class="logo-full">Bootadmin</span>
                    </a>
                </div>
                <a href="#" class="menu-toggle wave-effect">
                    <i class="feather icon-menu"></i>
                </a>
            </div>
            <div class="col-md-7 text-right">
                <ul>
                    <!-- Profile Menu -->
                    <li class="btn-group user-account">
                        <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-content">
                                <div class="user-name">Andrew Gill</div>
                                <div class="user-plan">BeeBack Free Tier</div>
                            </div>
                            <div class="avatar">
                                <img src="images/demo/user.jpg" alt="profile" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="../account/profile.html" class="animsition-link dropdown-item wave-effect"><i class="feather icon-user"></i> Profile</a></li>
                            <li><a href="../account/billing.html" class="animsition-link dropdown-item wave-effect"><i class="feather icon-dollar-sign"></i> Billing</a></li>
                            <li><a href="../account/settings.html" class="animsition-link dropdown-item wave-effect"><i class="feather icon-settings"></i> Settings</a></li>
                            <li><a href="../login/index.html" class="animsition-link dropdown-item wave-effect"><i class="feather icon-log-in"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- Offcanvas Menu -->
                    <li>
                        <a href="#" class="btn wave-effect offcanvas-toggle"><i class="feather icon-settings"></i></a>
                    </li>
                    <!-- Notification Menu -->
                    <li class="btn-group notification">
                        <a href="javascript:;" class="btn dropdown-toggle wave-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-bell"><span class="notification-count">27</span></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="#" class="wave-effect">
                                    <span class="avatar">
                                        <img src="images/demo/profile.png" alt="Mr. Chu" />
                                    </span>
                                    <span class="name">Jas Gillionaire</span>
                                    <span class="message">Like your post: “Contact Form 7 Multi-Step”</span>
                                    <span class="time">45 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="wave-effect">
                                    <span class="avatar">
                                        <img src="images/demo/user.jpg" alt="Andrew" />
                                    </span>
                                    <span class="name">Gurinder Singh</span>
                                    <span class="message">Like your post: “Contact Form 7 Multi-Step”</span>
                                    <span class="time">45 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="wave-effect">
                                    <span class="avatar">
                                        <img src="images/demo/profile.png" alt="Mr. Chu" />
                                    </span>
                                    <span class="name">Andrew the Canadian</span>
                                    <span class="message">Like your post: “Contact Form 7 Multi-Step”</span>
                                    <span class="time">45 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="wave-effect">
                                    <span class="avatar">
                                        <img src="images/demo/user.jpg" alt="Mr. Chu" />
                                    </span>
                                    <span class="name">Artsy Shohan</span>
                                    <span class="message">Like your post: “Contact Form 7 Multi-Step”</span>
                                    <span class="time">45 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="wave-effect">
                                    <span class="avatar">
                                        <img src="images/demo/profile.png" alt="Mr. Chu" />
                                    </span>
                                    <span class="name">Sazzad Shammad</span>
                                    <span class="message">Like your post: “Contact Form 7 Multi-Step”</span>
                                    <span class="time">45 min</span>
                                </a>
                            </li>
                            <li><a href="../notification.html" class="dropdown-item all-notifications wave-effect">See more messages <i class="feather icon-arrow-down"></i></a></li>
                        </ul>
                    </li>
                    <li class="mobile-menu-toggle">
                        <a href="#" class="menu-toggle wave-effect">
                            <i class="feather icon-menu"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<aside class="offcanvas-menu">
    <div class="offcanvas-button">
        <a href="#" class="btn wave-effect offcanvas-toggle font-20"><span aria-hidden="true">&times;</span></a>
    </div>
    <h5 class="offcanvas-title">List Group</h4>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>

    <h5 class="offcanvas-title">List Group</h4>
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Cras justo odio
            <span class="badge badge-primary badge-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Dapibus ac facilisis in
            <span class="badge badge-primary badge-pill">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Morbi leo risus
            <span class="badge badge-primary badge-pill">1</span>
        </li>
    </ul>

    <h5 class="offcanvas-title">List Group Content</h4>
    <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small>3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small>Donec id elit non mi porta.</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
        </a>
    </div>
</aside>

        

<!-- Main Menu -->
<div class="sidebar">
    <div class="logo">
        <a href="../index.html">
            <span class="logo-emblem"><img src="images/boot.png" alt="BA" /></span>
            <span class="logo-full">Bootadmin</span>
        </a>
    </div>
    <ul id="sidebarCookie">
        <li class="spacer"></li>
        <li class="profile">
            <span class="profile-image">
                <img src="images/demo/user.jpg" alt="profile" />
            </span>
            <span class="profile-name">
                Daniel Craig
            </span>
            <span class="profile-info">
                Premium User
            </span>
        </li>
        <li class="spacer"></li>
        <li class="title">
            <i class="feather icon-more-horizontal"></i>
            <span class="menu-title">Main</span>
        </li>
        <li class="nav-item">
            <a class="nav-link wave-effect collapsed wave-effect" data-parent="#sidebarCookie" data-toggle="collapse" href="#navDashboard" aria-expanded="false" aria-controls="page-dashboards">
                <i class="feather icon-grid"></i>
                <span class="menu-title">Dashboard</span>
                <i class="feather icon-chevron-down down-arrow"></i>
            </a>
            <div class="collapse" id="navDashboard">
                <ul class="flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../index.html">
                            <i class="feather icon-layout"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../index.html">
                            <i class="feather icon-shopping-bag"></i>
                            <span class="menu-title">eCommerce</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-darkSidebar wave-effect" href="javascript: void();">
                            <i class="feather icon-shopping-bag"></i>
                            <span class="menu-title">Toggle Sidebar Color</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="#navPageLayouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="feather icon-sidebar"></i>
                <span class="menu-title">Page Layouts</span>
                <i class="feather icon-chevron-down down-arrow"></i>
            </a>
            <div class="collapse" id="navPageLayouts">
                <ul class="flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../index.html">
                            <i class="feather icon-layout"></i>
                            <span class="menu-title">Default</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../boxed/index.html">
                            <i class="feather icon-bold"></i>
                            <span class="menu-title">Boxed</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="index.html">
                            <i class="feather icon-pause"></i>
                            <span class="menu-title">Horizontal Menu</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../boxedhorizontal/index.html">
                            <i class="feather icon-copy"></i>
                            <span class="menu-title">Boxed &amp; Horizontal</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="#navElements" aria-expanded="false" aria-controls="page-elements">
                <i class="feather icon-layout"></i>
                <span class="menu-title">Elements</span>
                <i class="feather icon-chevron-down down-arrow"></i>
            </a>
            <div class="collapse" id="navElements">
                <ul class="flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../elements/bootstrap/index.html">
                            <i class="feather icon-bold"></i>
                            <span class="menu-title">Bootstrap</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../elements/gallery/index.html">
                            <i class="feather icon-image"></i>
                            <span class="menu-title">Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../elements/cards/index.html">
                            <i class="feather icon-credit-card"></i>
                            <span class="menu-title">Cards</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../elements/grid/index.html">
                            <i class="feather icon-grid"></i>
                            <span class="menu-title">Grid</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="title">
            <i class="feather icon-more-horizontal"></i>
            <span class="menu-title">App Features</span>
        </li>
        <li class="nav-item">
            <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="#navMailbox" aria-expanded="false" aria-controls="page-mailbox">
                <i class="feather icon-mail"></i>
                <span class="menu-title">Mailbox</span>
                <i class="feather icon-chevron-down down-arrow"></i>
            </a>
            <div class="collapse" id="navMailbox">
                <ul class="flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../app/inbox/index.html">
                            <i class="feather icon-inbox"></i>
                            <span class="menu-title">Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../app/inbox/email.html">
                            <i class="feather icon-mail"></i>
                            <span class="menu-title">Email</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../app/inbox/compose.html">
                            <i class="feather icon-send"></i>
                            <span class="menu-title">Compose</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="../app/calendar/index.html" class="nav-link wave-effect nav-single">
                <i class="feather icon-calendar"></i>
                <span class="menu-title">Calendar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="#navProfilebox" aria-expanded="false" aria-controls="page-profilebox">
                <i class="feather icon-users"></i>
                <span class="menu-title">Account</span>
                <i class="feather icon-chevron-down down-arrow"></i>
            </a>
            <div class="collapse" id="navProfilebox">
                <ul class="flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../account/profile.html">
                            <i class="feather icon-user"></i>
                            <span class="menu-title">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../account/billing.html">
                            <i class="feather icon-dollar-sign"></i>
                            <span class="menu-title">Billing</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="../account/settings.html">
                            <i class="feather icon-settings"></i>
                            <span class="menu-title">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="title">
            <i class="feather icon-more-horizontal"></i>
            <span class="menu-title">Misc</span>
        </li>
        <li class="nav-item">
            <a href="../credits/index.html" class="nav-link wave-effect nav-single">
                <i class="feather icon-zap"></i>
                <span class="menu-title">Credits</span>
            </a>
        </li>
        <li class="spacer"></li>
        <li class="button-container">
            <a href="https://github.com/iamshipon1988/bootadmin" class="btn btn-primary display-block"><i class="feather icon-download"></i> Download on Github</a>
        </li>
    </ul>
</div>

        <main>
            <div class="page-breadcrumb">
    <div class="row">
        <div class="col-md-5">
            <h4 class="page-title">Horizontal Dashboard</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Horizontal Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-7 hidden-xs">
            <div class="text-right">
                <small>Users</small>
                <h5 class="text-info">3,458</h5>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Wallet Balance</small>
                            <h4 class="mb-0">$3,567.53</h4>
                        </div>
                        <div class="chart ml-auto">
                            asdfadf
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover bg-red">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Wallet Balance</small>
                            <h4 class="mb-0">$3,567.53</h4>
                        </div>
                        <div class="chart ml-auto">
                            asdfadf
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover bg-green">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Wallet Balance</small>
                            <h4 class="mb-0">$3,567.53</h4>
                        </div>
                        <div class="chart ml-auto">
                            asdfadf
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Top Selling Products</h4>
                            <p class="card-subtitle">Overview of Top Selling Items</p>
                        </div>
                        <div class="ml-auto">
                            <div class="dl">
                                <select class="custom-select">
                                    <option value="0" selected="">Monthly</option>
                                    <option value="1">Daily</option>
                                    <option value="2">Weekly</option>
                                    <option value="3">Yearly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- title -->
                </div>
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Products</th>
                                <th class="border-top-0">License</th>
                                <th class="border-top-0">Support Agent</th>
                                <th class="border-top-0">Technology</th>
                                <th class="border-top-0">Tickets</th>
                                <th class="border-top-0">Sales</th>
                                <th class="border-top-0">Earnings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><a class="btn btn-circle btn-info text-white">EA</a></div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Single Use</td>
                                <td>John Doe</td>
                                <td>
                                    <label class="label label-danger">Angular</label>
                                </td>
                                <td>46</td>
                                <td>356</td>
                                <td>
                                    <h5 class="m-b-0">$2850.06</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><a class="btn btn-circle btn-warning text-white">MA</a></div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Monster Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Single Use</td>
                                <td>Venessa Fern</td>
                                <td>
                                    <label class="label label-info">Vue Js</label>
                                </td>
                                <td>46</td>
                                <td>356</td>
                                <td>
                                    <h5 class="m-b-0">$2850.06</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><a class="btn btn-circle btn-success text-white">MP</a></div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Single Use</td>
                                <td>John Doe</td>
                                <td>
                                    <label class="label label-success">Bootstrap</label>
                                </td>
                                <td>46</td>
                                <td>356</td>
                                <td>
                                    <h5 class="m-b-0">$2850.06</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="m-r-10"><a class="btn btn-circle btn-primary text-white">AA</a></div>
                                        <div class="">
                                            <h4 class="m-b-0 font-16">Ample Admin</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Single Use</td>
                                <td>John Doe</td>
                                <td>
                                    <label class="label label-purple">React</label>
                                </td>
                                <td>46</td>
                                <td>356</td>
                                <td>
                                    <h5 class="m-b-0">$2850.06</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- column -->
        <div class="col-lg-6">
            <div class="card card-hover">
                <div class="card-body">
                    <h4 class="card-title">Recent Comments</h4>
                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                        <thead>
                            <tr class="text-uppercase">
                                <th class="font-w700">Product</th>
                                <th class="d-none d-sm-table-cell font-w700">Date</th>
                                <th class="font-w700">State</th>
                                <th class="d-none d-sm-table-cell font-w700 text-right" style="width: 120px;">Price</th>
                                <th class="font-w700 text-center" style="width: 60px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="font-w600">iPhone X</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $999,99
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">MacBook Pro 15"</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $2.299,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">Nvidia GTX 1080 Ti</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $1200,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">Playstation 4 Pro</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-danger">Cancelled</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $399,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">Nintendo Switch</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $349,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">iPhone X</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $999,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">Echo Dot</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $39,99
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="font-w600">Xbox One X</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="font-w600 text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    $499,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    asdf <br />
                    aseasdf<br />
                    aseasdf<br />
                    aseasdf<br />
                    aseasdf<br />
                    aseasdf
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-lg-6">
            <div class="card has-shadow">
                <div class="card-body border-top">
                    asdf <br />
                    aseasdf<br />
                    aseasdf<br />
                    aseasdf<br />
                    aseasdf<br />
                    aseasdf
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Comments</h4>
                    duh
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('hfooter.php');  ?> 