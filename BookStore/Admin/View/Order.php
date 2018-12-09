<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <?php include('header-right.php'); ?>
    <!-- Header-->
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Order Management</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="animated">
            <div class="">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Order</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID Order</th>
                                    <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Total</th>
                                    <th>Quantity</th>
                                    <th>Order Date</th>
                                    <th>Paid</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(isset($lstOrder)) {
                                    foreach ($lstOrder as $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value->idOrder?></td>
                                            <td><?php echo $value->nameCustomer?></td>
                                            <td><?php echo $value->phoneNumber?></td>
                                            <td><?php echo $value->address?></td>
                                            <td>€<?php echo number_format($value->total, 2)?></td>
                                            <td><?php echo $value->sumQuantity?></td>
                                            <td><?php echo $value->orderDate?></td>
                                            <?php if($value->paid){ ?>
                                                <td><span class="btn btn-success">Paid</span></td>
                                            <?php } else {?>
                                                <td><span class="btn btn-danger">UnPaid</span></td>
                                            <?php } ?>
                                            <td>
                                                <a class="btn btn-default" onclick="updateStatusForOrder(this)" data-id="<?php echo $value->idOrder?>" data-status="<?php echo $value->paid?>">
                                                    <i class='fa fa-edit'></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
