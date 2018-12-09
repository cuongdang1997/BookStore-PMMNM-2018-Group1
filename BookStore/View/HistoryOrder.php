<!-- Right Panel -->
<div id="right-panel" class="container">
    <div class="content mt-3">
        <div class="animated">
            <div class="">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">History Order</strong>
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
                                                <td><span class="text-success">Paid</span></td>
                                            <?php } else {?>
                                                <td><span class="text-danger">UnPaid</span></td>
                                            <?php } ?>
                                            <td>
                                                <a class="btn btn-primary text-white btn-block" data-id="<?php echo $value->idOrder?>" data-status="<?php echo $value->paid?>"
                                                   href="#myModal" data-toggle="modal" class="btn-block">
                                                    detail</a>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 100001">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Order Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">

                <strong>services.</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Right Panel -->