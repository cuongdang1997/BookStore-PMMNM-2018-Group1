<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <?php include('header-right.php'); ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">Basic</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Book</strong>
                        </div>
                        <form action="editBook?id=<?php echo($book->id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="title" name="title" class="form-control" value="<?php echo($book->Title);?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="price" name="price" class="form-control" value="<?php echo($book->price);?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Page Size</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="pagesize" name="pagesize" class="form-control" value="<?php echo($book->pagesize);?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Amount</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="amount" name="amount" class="form-control" value="<?php echo($book->amount);?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Year</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="year" name="year" class="form-control" value="<?php echo($book->year);?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Author</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="author" name="author" class="form-control" value="<?php echo($book->Author);?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Upload image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="image" name="image" class="form-control-file" value="<?php echo($book->image);?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Describe</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="describe" rows="9" class="form-control" value="<?php echo($book->Describe);?>"></textarea>
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
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->