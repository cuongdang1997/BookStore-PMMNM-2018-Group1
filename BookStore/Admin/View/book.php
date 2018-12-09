<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <?php include('header-right.php'); ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Book Management</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><a class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal">Add Book</a></strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Describe</th>
                                    <th>Author</th>
                                    <th>Amount</th>
                                    <th>Year</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(isset($lstBook)) {
                                    foreach ($lstBook as $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value->id?></td>
                                            <td><?php echo $value->Title?></td>
                                            <td>€<?php echo number_format($value->price, 2)?></td>
                                            <td><img class="img-frame" src="<?php echo UrlConfig::$baseUrl.'/assets/images/'.$value->image?>" alt=""></td>
                                            <td><?php echo $value->Describe?></td>
                                            <td><?php echo $value->Author?></td>
                                            <td><?php echo $value->amount?></td>
                                            <td><?php echo $value->year?></td>
                                            <td>
                                                <a style="margin-left: 5px;" href=<?php echo UrlConfig::$baseUrl.'/Admin/Book/editBook?id='.$value->id?>><i class="fa fa-edit"></i></a>
                                                    <a href="Book/deleteBook?id=<?php echo $value->id?>"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Book</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="../Admin/Book/addBook" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="title" name="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Price</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="price" name="price" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Page Size</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="pagesize" name="pagesize" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Amount</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="amount" name="amount" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Year</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="year" name="year" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Author</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="author" name="author" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Upload image</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="image" name="image" class="form-control-file" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Describe</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="describe" rows="9" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class="form-control-label">Category</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select  name="categoryName" class="form-control">
                                    <?php foreach ($lstCategory as $value) { ?>
                                        <option value="<?php echo($value); ?>"> <?php echo($value); ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Add
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>