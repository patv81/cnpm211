<?php 
$inputUserName = Helper::cmsInput($type='text',$name='name',$id='form[username]',$value='',$class='form-control form-control-sm');
$inputEmail = Helper::cmsInput($type='text',$name='name',$id='form[email]',$value='',$class='form-control form-control-sm');
$inputFullName = Helper::cmsInput($type = 'text', $name = 'name', $id = 'form[fullname]', $value = '', $class = 'form-control form-control-sm');
$inputPassword = Helper::cmsInput($type = 'text', $name = 'name', $id = 'form[fullname]', $value = '', $class = 'form-control form-control-sm');
$inputSelectStatus = Helper::cmsSelectbox($name='form[status]', $class= 'custom-select custom-select-sm',$id='form[status]', 
                                    $arrValue=['1'=>'Active','0'=>'Inactive'], $keySelect = '1', $style = null);


//row
$rowUserName = Helper::cmsRowForm('UserName', $inputUserName,true);
$rowEmail = Helper::cmsRowForm('Email', $inputEmail,true);
$rowFullName = Helper::cmsRowForm('FullName', $inputFullName);
$rowStatus = Helper::cmsRowForm('Status', $inputSelectStatus);

?>
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
                    <div class="card card-info card-outline">
                        <div class="card-body">
                            <form action="" method="post" class="mb-0" id="admin-form">

                                <?php 
                                echo $rowUserName.$rowEmail.$rowFullName.$rowStatus;
                                ?>
                                <input type="hidden" id="form[token]" name="form[token]" value="1596364518">
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="col-12 col-sm-8 offset-sm-2">
                                <a href="" class="btn btn-sm btn-success mr-1"> Save</a>
                                <a href="" class="btn btn-sm btn-success mr-1"> Save &amp; Close</a>
                                <a href="" class="btn btn-sm btn-success mr-1"> Save &amp; New</a>
                                <a href="list.php" class="btn btn-sm btn-danger mr-1"> Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>