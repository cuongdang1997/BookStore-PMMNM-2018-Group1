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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Add Category
            </button>
        <div class="animated">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped table-category">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stt = 0;
                        foreach($lstCategory as $catItem) {
                            $stt++;
                            $htmlTable = "<tr>";
                            $htmlTable .=   "<td>{$stt}</td>";
                            $htmlTable .=   "<td>{$catItem->CategoryName}</td>";
                            $htmlTable .=   "<td>
                                                    <a href='Category?func=Update&catId={$catItem->id}' title='Update' class='linkupd'><span class='glyphicon glyphicon-pencil'><i class='fa fa-edit'></i></span></a>
                                                    <a href='Category?func=Delete&catId={$catItem->id}' title='Delete' class='linkdel'><span class='glyphicon glyphicon-trash'><i class='fa fa-trash'></i></span></a>
                                                </td>";
                            $htmlTable .= "</tr>";
                            echo $htmlTable;
                        }
                        ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div><!-- .content -->
</div><!-- /#right-panel -->
<!-- Right Panel -->
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="animated">
                    <form action="Category" method="POST">
                        <div class="">
                            <div class="col-md-6">
                                <label><span class="text-danger">*</span> Category Name</label>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="categoryName" required>
                            </div>
                            <br><br>
                            <div class="float-lg-right">
                                <button type="submit" name="addCategory" class="btn btn-success" value="Add">Add</button>
                                <button type="reset" class="btn btn-default">Resets</button>
                            </div>
                        </div>
                    </form>
                </div><!-- .animated -->
            </div>
        </div>
    </div>
</div>