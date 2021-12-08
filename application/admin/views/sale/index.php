
<?php
$linkSubmit = URL::createLink('admin', 'sale', 'form');
?>
<?php require_once __DIR__ . '/../toolbar/navbar.php'; ?>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<?php require_once __DIR__ . '/../toolbar/sidebar.php'; ?>
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

                <!-- List Content -->
                <form action="<?php echo $linkSubmit ?>" method="post" class="table-responsive" id="cart-form-table">
                    <div class="cart">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="row">
                                    <div class="col">
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>
                                <div class="user-cart">
                                    <div class="card">
                                        <table id="cartTable" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="row mb-2">
                                        <div class="col">Total</div>
                                        <div class="col text-right">
                                            <input name="form[totalPrice]" class="form-control" id="totalPrice" readonly type="int" value="0">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">Payed </div>
                                        <div class="col text-right">
                                            <input name="form[money_payed]" class="form-control" id="money_payed" type="int" value="0">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button onclick="cancelOrder()" type="button" class="btn-block  btn btn-danger">Cancel</button>
                                    </div>
                                    <div class="col">
                                        <button onclick="submitOrder()" type="button" class="btn-block  btn btn-primary">Submit</button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-8">
                                <div class="mb-2">
                                    <input onchange="posSearchProduct()" name="filter_search" type="text" class="form-control" placeholder="search product ">
                                </div>
                                <div class="order-product">
                                    <table id="selectProductTable" class="table table-bordered table-hover text-nowrap btn-table mb-0">
                                        <thead>
                                            <tr>

                                                <th class="text-center"><a href="javascript:sortList('id', 'desc')">ID </a></th>
                                                <th class="text-center"><a href="javascript:sortList('name', 'desc')">Name </a></th>
                                                <th class="text-center"><a href="javascript:sortList('price', 'desc')">Price </a></th>
                                                <th class="text-center"><a href="javascript:sortList('quantity', 'desc')">Quantity </a></th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!empty($this->Items)) {
                                                foreach ($this->Items as $key => $value) {
                                                    $id = $value['id'];
                                                    $name = $value['name'];
                                                    $price = $value['price'];
                                                    $addBtn = Helper::cmsBtnAction($type = 'add-to-cart', "addToCart(this)", $id);
                                            ?>

                                                    <tr>
                                                        <td class="text-center"><?php echo $id ?></td>
                                                        <td class="text-center"><?php echo $name ?></td>
                                                        <td class="text-center"><?php echo $price ?></td>
                                                        <td class="text-center position-relative">
                                                            <input type="number" value="1" class="form-control form-control-sm m-auto text-center" style="width: 65px" id="quantity" data-id="1" min="1">
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $addBtn; ?>
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
                                </div>
                            </div>
                        </div>
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