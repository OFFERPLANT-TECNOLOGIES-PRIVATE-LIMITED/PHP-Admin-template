<?php require_once('header.php'); ?>
<?php require_once('menu.php'); ?>

        <main>
            <div class="page-breadcrumb bg-white mb-4 has-shadow">
    <div class="row">
        <div class="col-5">
            <h4 class="page-title">Email</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Inbox</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Email</li>
                </ol>
            </nav>
        </div>
        <div class="col-7">
            <div class="text-right">
                <small>Users</small>
                <h5 class="text-info">3,458</h5>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid app-email">
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <div class="p-2">
                <a href="compose.html" class="btn btn-danger btn-block" role="button">COMPOSE</a>
            </div>

            <ul class="list-group mt-4">
                <li class="list-group-item list-group-item-title">Folders</li>
                <li class="list-group-item d-flex justify-content-between align-items-center active">
                    <a href="javascript:void(0)" class="active list-group-item-action"><i class="mdi mdi-inbox"></i> Inbox <span class="badge badge-success badge-pill float-right">6</span></a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-star"></i> Starred </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-send"></i> Draft <span class="badge badge-danger badge-pill float-right">3</span></a></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-email"></i> Sent Mail </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <hr>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-block-helper"></i> Spam </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"> <i class="mdi mdi-delete"></i> Trash </a>
                </li>
            </ul>

            <ul class="list-group mt-4">
                <li class="list-group-item list-group-item-title">Labels</li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-danger mdi mdi-checkbox-blank-circle"></i> Work </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-cyan mdi mdi-checkbox-blank-circle"></i> Business </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-warning mdi mdi-checkbox-blank-circle"></i> Family </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-info mdi mdi-checkbox-blank-circle"></i> Friends </a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
            <div class="card">
                <div class="card-body card-body-title bg-blue">
                    <button type="button" id="back_to_inbox" class="btn btn-white btn-outline-white mr-2"><i class="feather icon-arrow-left"></i></button>
                    <div class="btn-group mr-3" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-white btn-outline-white"><i class="feather icon-corner-up-left"></i></button>
                        <button type="button" class="btn btn-white btn-outline-white"><i class="feather icon-alert-octagon"></i></button>
                        <button type="button" class="btn btn-white btn-outline-white"><i class="feather icon-delete"></i></button>
                    </div>
                    <div class="btn-group ml-3 float-right" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-white btn-outline-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="feather icon-folder"></i> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-white btn-outline-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="feather icon-tag"></i> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-title border-bottom">
                    <h4 class="card-title mb-0">Goku just won the tournament!</h4>
                </div>
                <div class="card-body border-bottom">
                    <div class="d-flex no-block align-items-center mb-5">
                        <div class="mr-3"><img src="../../images/demo/user.jpg" alt="user" class="rounded-circle" width="45"></div>
                        <div class="">
                            <h5 class="mb-0">Gurinder the Great <small> &lt;<a href="#"><span class="__cf_email__" data-cfemail="721507001b1c161700061a17150017130632151f131b1e5c111d1f">[email&#160;protected]</span></a>&gt;</small></h5>
                            <span>to <a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="6f050e1c080603030600012f08020e0603410c0002">[email&#160;protected]</a></span>
                        </div>
                    </div>
                    <h5>Hi Jas Gillion,</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                </div>
            </div>
        </div>
    </div>


           
<?php require_once('footer.php'); ?>