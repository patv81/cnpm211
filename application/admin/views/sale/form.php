<?php
$dataForm = $this->singleItem; 
$id= $dataForm['id'];
$products= $dataForm['products'];
$quantities= $dataForm['quantities'];
$names= $dataForm['names'];
$date= $dataForm['created'];
$prices = $dataForm['prices'];
$money_payed= $dataForm['money_payed'];
$cash_tender = $money_payed - array_sum($prices);


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
            <div class="row">
                <div class="row">
                    <a href="sales.php?id=cash&amp;invoice=RS-33232283"><button class="btn btn-default"><i class="icon-arrow-left"></i> Back to Sales</button></a>

                </div>

                <div class="content" id="content">
                    <div style="margin: 0 auto; padding: 20px; width: 900px; font-weight: normal;">
                        <div style="width: 100%; height: 190px;">
                            <div style="width: 900px; float: left;">
                                <center>
                                    <div style="font:bold 25px 'Aleo';">Sales Receipt</div>
                                    Restaurant ABC <br>
                                    123 Nguyen Khai,Ho Chi Minh <br> <br>
                                </center>
                                <div>
                                </div>
                            </div>
                            <div style="width: 136px; float: left; height: 70px;">
                                <table cellpadding="3" cellspacing="0" style="font-family: arial; font-size: 12px;text-align:left;width : 100%;">

                                    <tbody>
                                        <tr>
                                            <td>OR No. :</td>
                                            <td><?php echo $id;?></td>
                                        </tr>
                                        <tr>
                                            <td>Date :</td>
                                            <td><?php echo $date;?></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div style="width: 100%; margin-top:-70px;">
                            <table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
                                <thead>
                                    <tr>
                                        <th width="90"> Product Code </th>
                                        <th> Product Name </th>
                                        <th> Qty </th>
                                        <th> Price </th>
                                        <th> Discount </th>
                                        <th> Amount </th>
                                    </tr>
                                </thead>
                                <tbody>
<?php 
foreach($products as $key=>$value){
?>
                                    <tr class="record">
                                        <td><?php echo $value;?></td>
                                        <td><?php echo $names[$key]; ?> </td>
                                        <td><?php  echo $quantities[$key]; ?></td>
                                        <td>
                                            <?php echo number_format($prices[$key]/$quantities[$key]) ;?>
                                        </td>
                                        <td>
                                            0.00 </td>
                                        <td>
                                            <?php echo number_format($prices[$key]); ?> </td>
                                    </tr>
<?php 
}
?>

                                    <tr>
                                        <td colspan="5" style=" text-align:right;"><strong style="font-size: 12px;">Total: &nbsp;</strong></td>
                                        <td colspan="2">
                                            <strong style="font-size: 12px;">
                                                <?php echo number_format(array_sum($prices)); ?>
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style=" text-align:right;"><strong style="font-size: 12px; color: #222222;">Cash Tendered:&nbsp;</strong></td>
                                        <td colspan="2">
                                            <strong style="font-size: 12px; color: #222222;">
                                                <?php echo number_format($money_payed);?>
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style=" text-align:right;"><strong style="font-size: 12px; color: #222222;">
                                                <font style="font-size:20px;">
                                                    Change:&nbsp;
                                                </font>
                                            </strong></td>
                                        <td colspan="2">
                                            <strong style="font-size: 15px; color: #222222;">
                                                <?php 
                                                echo $cash_tender;
                                                ?>
                                            </strong></td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin-right:100px;">
                <a href="javascript:Clickheretoprint()" style="font-size:20px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
            </div>
        </div>
</div>
</section>
<!-- /.content -->
</div>