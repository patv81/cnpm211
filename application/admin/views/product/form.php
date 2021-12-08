<?php
$dataForm = $this->arrParam['form'];
$inputName = Helper::cmsInput($type = 'text', $name = 'form[name]', $id = 'form[name]', $value = $dataForm['name'], $class = 'form-control form-control-sm');
$inputPrice = Helper::cmsInput($type = 'text', $name = 'form[price]', $id = 'form[price]', $value = $dataForm['price'], $class = 'form-control form-control-sm');
$inputID        = '';
$rowID            = '';
if (isset($this->arrParam['id']) || $dataForm['id']) {
    $inputID    = Helper::cmsInput($type = 'text', $name = 'form[id]', $id = 'form[id]', $value = $dataForm['id'], $class = 'form-control form-control-sm', $option = 'readonly');
    $rowID        = Helper::cmsRowForm('ID', $inputID);
}
$inputToken = Helper::cmsInput($type = 'hidden', $name = 'form[token]', $id = 'form[token]', $value = time(), $class = '');
//row
$rowName = Helper::cmsRowForm('Name', $inputName, true);
$rowPrice = Helper::cmsRowForm('Price', $inputPrice, true);

//button
$linkSave = URL::createLink('admin', 'product', 'form', array('type' => 'save'));
$linkSaveClose =  URL::createLink('admin', 'product', 'form', array('type' => 'save-close'));
$linkSaveNew = URL::createLink('admin', 'product', 'form', array('type' => 'save-new'));

$btnSave = Helper::cmsButton('Save', $linkSave, 'btn btn-sm btn-success mr-1', 'submit');
$btnSaveClose = Helper::cmsButton('Save &amp; Close', $linkSaveClose, 'btn btn-sm btn-success mr-1', 'submit');
$btnSaveNew = Helper::cmsButton('Save &amp; New', $linkSaveNew, 'btn btn-sm btn-success mr-1', 'submit');
$btnCancel = Helper::cmsButton('Cancel', URL::createLink('admin', 'product', 'index'), 'btn btn-sm btn-danger mr-1');
?>
<!-- Navbar -->
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
                    <h1 class="m-0 text-dark"><?php echo $this->_title; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php
            echo $this->errors ?? '';
            ?>
            <div class="card card-info card-outline">
                <div class="card-body">
                    <form action="" method="post" class="mb-0" id="admin-form">

                        <?php
                        echo $rowName . $rowPrice . $rowID . $inputToken;
                        ?>

                    </form>
                </div>
                <div class="card-footer">
                    <div class="col-12 col-sm-8 offset-sm-2">
                        <?php
                        echo $btnSave . $btnSaveClose . $btnSaveNew . $btnCancel; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>