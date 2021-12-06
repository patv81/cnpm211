<?php require_once 'toolbar/navbar.php'; ?>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<?php require_once 'toolbar/sidebar.php'; ?>
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
                            <form class="input-group" id="search-filter-form">
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
                            </form>
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
                    <?php include_once 'toolbar/toolbar.php'; ?>
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
                                    <th class="text-center"><a href="javascript:sortList('username', 'desc')">name </a></th>
                                    <th class="text-center"><a href="javascript:sortList('price', 'desc')">price </a></th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($this->Items)) {
                                    foreach ($this->Items as $key => $value) {
                                        $id = $value['id'];
                                        $checkbox = Helper::cmsCheckBox($id);
                                        $name = $value['name'];
                                        $price = $value['price'];
                                        $editBtn = Helper::cmsBtnAction($type = 'edit', $link = URL::createLink('admin', 'product', 'form', ['id' => $id]));
                                        $deleteBtn = Helper::cmsBtnAction($type = 'delete', $link = URL::createLink('admin', 'product', 'trash', ['id' => $id]));
                                ?>

                                        <tr>
                                            <td class="text-center">
                                                <?php echo $checkbox; ?>
                                            </td>
                                            <td class="text-center"><?php echo $id ?></td>
                                            <td class="text-center"><?php echo $name ?></td>

                                            <td class="text-center"><?php echo $price ?></td>
                                            <td class="text-center">

                                                <?php
                                                echo $editBtn . $deleteBtn; ?>
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