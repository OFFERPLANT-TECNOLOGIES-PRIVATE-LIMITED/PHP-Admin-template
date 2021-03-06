<?php require_once('header.php'); ?>
<?php require_once('menu.php'); ?>

        <main>
            <div class="page-breadcrumb bg-white mb-4 has-shadow">
    <div class="row">
        <div class="col-5">
            <h4 class="page-title">Inbox</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Inbox</li>
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
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-danger feather icon-circle mr-2"></i> Work </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-primary feather icon-circle mr-2"></i> Business </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-warning feather icon-circle mr-2"></i> Family </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-info feather icon-circle mr-2"></i> Friends </a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="bg-light p-15 d-flex align-items-center do-block">
                        <div class="btn-group mt-3 mb-3">
                            <div class="custom-control custom-checkbox ml-3">
                                <input type="checkbox" class="custom-control-input sl-all" id="cstall">
                                <label class="custom-control-label" for="cstall">Check All</label>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <div class="btn-group mr-3" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-outline-secondary font-18"><i class="feather icon-refresh-cw"></i></button>
                                <button type="button" class="btn btn-outline-secondary font-18"><i class="feather icon-flag"></i></button>
                                <button type="button" class="btn btn-outline-secondary font-18"><i class="feather icon-trash"></i></button>
                            </div>
                            <div class="btn-group mr-3" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="feather icon-folder"></i> </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                                </div>
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="feather icon-tag"></i> </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table email-table no-wrap table-hover v-middle">
                            <tbody>
                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst1">
                                            <label class="custom-control-label" for="cst1">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jas Gill</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"><span class="badge badge-danger mr-3">Work</span> <span class="blue-grey-text text-darken-4">Lorem ipsum perspiciatis-</span> unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 PM </td>
                                </tr>
                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst2">
                                            <label class="custom-control-label" for="cst2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Gurinder the Great</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"><span class="badge badge-primary mr-3">Business</span> <span class="blue-grey-text text-darken-4">Inquiry about license </span>for Admin Template please provide us the license detail </a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 11:30 AM </td>
                                </tr>
                                <!-- row -->
                                <tr class="unread">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst3">
                                            <label class="custom-control-label" for="cst3">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name max-texts">
                                        <h6 class="mb-0">Sazzad Hossain</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"><span class="badge badge-warning color-textColor mr-3">Family</span> <span class="blue-grey-text text-darken-4">Bitbucket (commit Pushed) by Ritesh</span>Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 10:30 AM </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst4">
                                            <label class="custom-control-label" for="cst4">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jessica Alba</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"><span class="badge badge-info mr-3">Friends</span>Perspiciatis unde omnis- iste Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 9:30 AM </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst5">
                                            <label class="custom-control-label" for="cst5">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Eliana Ramirez</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"><span class="badge badge-success mr-3">Responded</span> Lorem ipsum perspiciatis- unde omnis iste natus error sitnatus error sit voluptatem voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> Mar 10 </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst6">
                                            <label class="custom-control-label" for="cst6">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jessica Alba</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"> Lorem ipsum perspiciatis - unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> Mar 09 </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst7">
                                            <label class="custom-control-label" for="cst7">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jas Gill</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"> Unde omnis Lorem ipsum perspiciatis - unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> Mar 09 </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst8">
                                            <label class="custom-control-label" for="cst8">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jessica Alba</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"> Iste natus error sit lorem - ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> Mar 09 </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst9">
                                            <label class="custom-control-label" for="cst9">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jas Gill</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"><span class="badge badge-secondary mr-3">Secondary</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 PM </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst10">
                                            <label class="custom-control-label" for="cst10">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jessica Alba</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"> Lorem ipsum perspiciatis - unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> Mar 09 </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst11">
                                            <label class="custom-control-label" for="cst11">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jas Gill</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"> Unde omnis Lorem ipsum perspiciatis - unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> Mar 09 </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst12">
                                            <label class="custom-control-label" for="cst12">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jessica Alba</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html"> Iste natus error sit lorem - ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> Mar 09 </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst13">
                                            <label class="custom-control-label" for="cst13">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jas Gill</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 PM </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst13">
                                            <label class="custom-control-label" for="cst13">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jas Gill</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 PM </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst13">
                                            <label class="custom-control-label" for="cst13">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jas Gill</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 PM </td>
                                </tr>
                                <!-- row -->
                                <tr class="">
                                    <!-- label -->
                                    <td class="js-checkBox">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cst13">
                                            <label class="custom-control-label" for="cst13">&nbsp;</label>
                                        </div>
                                    </td>
                                    <!-- star -->
                                    <td class="starred"><i class="feather icon-star"></i></td>
                                    <!-- User -->
                                    <td class="user-image"><img src="https://images/demo/user.jpg" alt="user" class="rounded-circle" width="30"></td>
                                    <td class="user-name">
                                        <h6 class="mb-0">Jas Gill</h6>
                                    </td>
                                    <!-- Message -->
                                    <td class="max-texts"> <a class="link" href="email.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                    <!-- Attachment -->
                                    <td class="clip"><i class="fa fa-paperclip"></i></td>
                                    <!-- Time -->
                                    <td class="time"> 12:30 PM </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-15 m-t-30">
                        <nav aria-label="inbox navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>