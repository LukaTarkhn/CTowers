<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">media list <br><br>
                    <a href="<?=ADMIN;?>/current/add">
                        <i class="fa fa-fw fa-plus text-primary"></i>
                    </a>
                </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th>Image</th>
                                <th>Video</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($medias as $media): ?>
                                <tr>
                                    <th><img style="width:200px" src="/images/<?=$media['image']?>" alt=""></th>
                                    <th>
                                    <?php if ($media['video'] == ''): ?>
                                    <?php else: ?> 
                                        <iframe height="220" width="240"  
                                            src="https://www.youtube.com/embed/<?=$media['video']?>"> 
                                        </iframe>
                                    <?php endif; ?> 
                                    </th>
                                    <th>
                                        <a href="<?=ADMIN;?>/current/edit?id=<?=$media['id']?>">
                                            <i class="fa fa-fw fa-edit text-info"></i>
                                        </a>
                                        <a href="<?=ADMIN;?>/current/delete?id=<?=$media['id']?>">
                                            <i class="fa fa-fw fa-times text-danger delete"></i>
                                        </a>
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->