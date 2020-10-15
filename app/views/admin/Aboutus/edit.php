<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit about us</h1>
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
                <form action="<?=ADMIN;?>/aboutus/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Content-geo</label>
                            <textarea type="text" name="content_geo" id="content_geo" class="form-control textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> <?=$aboutus->content_geo?>
                            </textarea>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Content-eng</label>
                            <textarea type="text" name="content_eng" id="content_eng" class="form-control textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$aboutus->content_eng?>
                            </textarea>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Content-rus</label>
                            <textarea type="text" name="content_rus" id="content_rus" class="form-control textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$aboutus->content_rus?>
                            </textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?=$aboutus->id?>">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->