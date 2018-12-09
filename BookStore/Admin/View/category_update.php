<div id="right-panel" class="right-panel">
    <?php include('header-right.php'); ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Category Management</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="animated">
            <form action="Category" method="POST">
                <div class="row">
                    <div class="col-md-2">
                        <label><span class="text-danger">*</span> Category Name</label>
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" type="text" name="categoryName" value="<?php echo isset($dataUpd)?$dataUpd->CategoryName:'' ?>" required>
                        <input type="hidden" name="categoryId" value="<?php echo isset($dataUpd)?$dataUpd->id:'' ?>">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" name="updCategory" value="Update" class="btn btn-success">Update</button>
                        <button type="submit" class="btn btn-warning">Cancel</button>
                    </div>
                </div>
            </form>
        </div><!-- .animated -->

    </div><!-- .content -->
</div><!-- /#right-panel -->