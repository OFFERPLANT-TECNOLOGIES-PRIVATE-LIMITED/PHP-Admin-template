<?php require_once('header.php'); ?>
<?php require_once('menu.php'); ?>
        <main>
            <div class="page-breadcrumb bg-white mb-4 has-shadow">
    <div class="row">
        <div class="col-5">
            <h4 class="page-title">Compose</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Inbox</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Compose</li>
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
                <form>
                    <div class="card-body card-body-title border-bottom">
                        <div class="input-group mb-2">
                            <span class="input-group-addon" style="width: 110px;" id="mailFromTo">To:</span>
                            <input type="text" class="form-control" placeholder="example@example.com">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-addon" style="width: 110px;" id="mailFromCC">CC:</span>
                            <input type="text" class="form-control" placeholder="someone@example.com">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="width: 110px;" id="mailFromSubject">Subject:</span>
                            <input type="text" class="form-control" placeholder="I ran into a bug!">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="editor-container">
                            <div id="summernote">Hello Bootadmin</div>
                        </div>
                        <!--<h5 class="mt-4">Attachments</h5>
                        <div class="dropzone" id="dzid">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </div>-->
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success"><i class="feather icon-send"></i> &nbsp; Send</button>
                            <button type="submit" class="btn btn-dark float-right"><i class="feather icon-trash-2"></i> &nbsp; Discard</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Summernote -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500,
            tabsize: 4
        });
    });
</script>


<?php require_once('footer.php'); ?>