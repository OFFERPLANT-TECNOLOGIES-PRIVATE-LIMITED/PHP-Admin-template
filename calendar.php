<?php require_once('header.php'); ?>
<?php require_once('menu.php'); ?>
 <link rel="stylesheet" href="style/vendor/fullcalendar.min.css">
    <link rel="stylesheet" href="style/core/style.min.css">
        <main>
            <div class="page-breadcrumb">
    <div class="row">
        <div class="col-5">
            <h4 class="page-title">Calendar</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Calendar</li>
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

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div id="calendar"></div>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="calendar-add-button waves-effect">
                <i class="feather icon-plus"></i>
            </a>
        </div>

        <!-- Legend -->
        <div class="card-body border-top">
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <strong>Legend:</strong>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-danger feather icon-circle mr-2"></i> Work </a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-primary feather icon-circle mr-2"></i> Business </a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-warning feather icon-circle mr-2"></i> Family </a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0)" class="list-group-item-action"><i class="text-info feather icon-circle mr-2"></i> Friends </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- BEGIN MODAL -->
<div class="modal none-border" id="my-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add Event</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Category Name</label>
                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Choose Category Color</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                                <option value="inverse">Inverse</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->

<!-- Print Stylesheet -->
<link href="style/vendor/fullcalendar.print.css" rel="stylesheet" media="print" />

<?php require_once('footer.php'); ?>

<script src="scripts/vendor/moment.min.js"></script>
<script src="scripts/vendor/fullcalendar.min.js"></script>
<script src="scripts/init/calendar.js"></script>