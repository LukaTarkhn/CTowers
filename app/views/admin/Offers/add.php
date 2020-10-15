<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add new offer</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i><?=$_SESSION['success']; unset($_SESSION['success']);?></h5>
                    </div>
                <?php endif; ?>
                <form action="<?=ADMIN;?>/offers/add" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="" required>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title-eng</label>
                            <input type="text" class="form-control" name="title_eng" id="title_eng" value="" required>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title-rus</label>
                            <input type="text" class="form-control" name="title_rus" id="title_rus" value="" required>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Sale</label>
                            <input type="number" class="form-control" name="sale" id="sale" value="" required>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Mini text</label>
                            <input type="text" class="form-control" name="text" id="text" value="" required>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Mini text-eng</label>
                            <input type="text" class="form-control" name="text_eng" id="text_eng" value="" required>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Mini text-rus</label>
                            <input type="text" class="form-control" name="text_rus" id="text_rus" value="" required>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->