<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <?php echo $this->_title; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        
        <div class="container-fluid">
            <!-- Search & Filter -->
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h6 class="card-title">Search & Filter</h6>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mb-1 text-right">
                            <div class="input-group">
                                <div class="input-group-prepend input-group-sm">
                                    <select class="custom-select select-search-field" style="width: unset">
                                        <option value="all">Search by All</option>
                                        <option value="id">Search by ID</option>
                                        <option value="name">Search by Name</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control form-control-sm" name="search_value" value="">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-sm btn-danger" id="btn-clear-search">Clear</button>
                                    <button type="button" class="btn btn-sm btn-info" id="btn-search">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- List -->
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h4 class="card-title">List</h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Control -->

                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                        <div class="mb-1">
                            <select id="bulk-action" name="bulk-action" class="custom-select custom-select-sm mr-1" style="width: unset">
                                <option value="" selected="">Bulk Action</option>
                                <option value="multi-delete">Multi Delete</option>
                                <option value="multi-active">Multi Active</option>
                                <option value="multi-inactive">Multi Inactive</option>
                            </select> <button id="bulk-apply" class="btn btn-sm btn-info">Apply <span class="badge badge-pill badge-danger navbar-badge" style="display: none"></span></button>
                        </div>
                        <div class="mb-1">
                            <select id="filter_groupacp" name="filter_groupacp" class="custom-select custom-select-sm mr-1" style="width: unset">
                                <option value="default" selected="">- Group ACP -</option>
                                <option value="false">No</option>
                                <option value="true">Yes</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <a href="form.php" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add New</a>
                            <a href="#" class="btn btn-sm btn-info"><i class="fas fa-sync"></i> Reload</a>
                        </div>
                    </div>
                    <!-- List Content -->
                    <form action="" method="post" class="table-responsive" id="form-table">
                        <table class="table table-bordered table-hover text-nowrap btn-table mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check-all">
                                            <label for="check-all" class="custom-control-label"></label>
                                        </div>
                                    </th>
                                    <th class="text-center"><a href="javascript:sortList('id', 'desc')">ID </a></th>
                                    <th class="text-center"><a href="javascript:sortList('username', 'desc')">Username </a></th>
                                    <th class="text-center"><a href="javascript:sortList('email', 'desc')">Email </a></th>
                                    <th class="text-center"><a href="javascript:sortList('fullname', 'desc')">Fullname </a></th>
                                    <th class="text-center"><a href="javascript:sortList('status', 'desc')">Status </a></th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($this->Items)) {
                                    foreach ($this->Items as $key => $value) {
                                        $id = $value['id'];
                                        $checkbox = Helper::cmsCheckBox($id);
                                        $username = $value['username'];
                                        $email = $value['email'];
                                        $fullname = $value['fullname'];
                                        $status = Helper::cmsStatus($value['status'],
                                                                    URL::createLink('admin','user','ajaxStatus',['id' => $id, 'status' => $value['status']]),
                                                                    $id);
                                ?>

                                        <tr>
                                            <td class="text-center">
                                                <?php echo $checkbox;?>
                                            </td>
                                            <td class="text-center"><?php echo $id ?></td>
                                            <td class="text-center"><?php echo $username ?></td>

                                            <td class="text-center"><?php echo $email ?></td>
                                            <td class="text-center"><?php echo $fullname ?></td>
                                            <td class="text-center">
                                                <?php echo $status;?>
                                            </td>
                                            <td class="text-center">
                                                <a href="" class="rounded-circle btn btn-sm btn-info" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <a href="#" class="rounded-circle btn btn-sm btn-danger" title="Delete">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                        <div>
                            <input type="hidden" name="sort_field" value="">
                            <input type="hidden" name="sort_order" value="">
                        </div>
                    </form>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item disabled"><a href="" class="page-link"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item disabled"><a href="" class="page-link"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>