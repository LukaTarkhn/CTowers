<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add new Media</h1>
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
                <form action="<?=ADMIN;?>/current/add" method="post" data-toggle="validator">
                    <div class="form-group">
                                <label for="image">Image</label>
                                <div class="box-body">
                                    <div id="single" class="btn btn-success" data-url="current/add-image" data-name="single">Select Image</div>
                                    <p><small>Recomended size: 1000x1000px</small></p>
                                    <div class="single"></div>
                                </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="video">Video <small>https://www.youtube.com/watch?v=<b>yEOFdEDAAhQ</b> მიუთითეთ დასამატებელი youtube ლინკის მხოლოდ კოდი v= შემდეგ რაც წერია</small></label>
                            <input type="text" class="form-control" name="video" id="video" value="">
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