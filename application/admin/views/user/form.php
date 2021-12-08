<?php
$dataForm = $this->arrParam['form'];

$inputUserName = Helper::cmsInput($type = 'text', $name = 'form[username]', $id = 'form[username]', $value = $dataForm['username'], $class = 'form-control form-control-sm');
$inputEmail = Helper::cmsInput($type = 'text', $name = 'form[email]', $id = 'form[email]', $value = $dataForm['email'], $class = 'form-control form-control-sm');
$inputFullName = Helper::cmsInput($type = 'text', $name = 'form[fullname]', $id = 'form[fullname]', $value = $dataForm['fullname'], $class = 'form-control form-control-sm');
$inputPassword = Helper::cmsInput($type = 'text', $name = 'form[password]', $id = 'form[password]', $value = $dataForm['password'], $class = 'form-control form-control-sm');
$inputSelectStatus = Helper::cmsSelectbox(
    $name = 'form[status]',
    $class = 'custom-select custom-select-sm',
    $id = 'form[status]',
    $arrValue = ['1' => 'Active', '0' => 'Inactive'],
    $keySelect = $dataForm['status'],
    $style = null
);
$inputID        = '';
$rowID            = '';
if (isset($this->arrParam['id']) || $dataForm['id']) {
    $inputID    = Helper::cmsInput($type = 'text', $name = 'form[id]', $id = 'form[id]', $value = $dataForm['id'], $class = 'form-control form-control-sm', $option = 'readonly');
    $rowID        = Helper::cmsRowForm('ID', $inputID);
}
$inputToken = Helper::cmsInput($type = 'hidden', $name = 'form[token]', $id = 'form[token]', $value = time(), $class = '');
//row
$rowUserName = Helper::cmsRowForm('UserName', $inputUserName, true);
$rowEmail = Helper::cmsRowForm('Email', $inputEmail, true);
$rowFullName = Helper::cmsRowForm('FullName', $inputFullName);
$rowStatus = Helper::cmsRowForm('Status', $inputSelectStatus);
$rowPassword = Helper::cmsRowForm('Password', $inputPassword);

//button
$linkSave = URL::createLink('admin', 'user', 'form', array('type' => 'save'));
$linkSaveClose =  URL::createLink('admin', 'user', 'form', array('type' => 'save-close'));
$linkSaveNew = URL::createLink('admin', 'user', 'form', array('type' => 'save-new'));

$btnSave = Helper::cmsButton('Save', $linkSave, 'btn btn-sm btn-success mr-1', 'submit');
$btnSaveClose = Helper::cmsButton('Save &amp; Close', $linkSaveClose, 'btn btn-sm btn-success mr-1', 'submit');
$btnSaveNew = Helper::cmsButton('Save &amp; New', $linkSaveNew, 'btn btn-sm btn-success mr-1', 'submit');
$btnCancel = Helper::cmsButton('Cancel', URL::createLink('admin', 'user', 'index'), 'btn btn-sm btn-danger mr-1');
?>
<!-- Navbar -->
<?php require_once __DIR__ . '/../toolbar/navbar.php'; ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php require_once __DIR__ . '/../toolbar/sidebar.php'; ?>

<div class="content-wrapper">
    <?php

    ?>
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
                        echo $rowUserName . $rowEmail . $rowFullName . $rowPassword . $rowStatus . $rowID . $inputToken;
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