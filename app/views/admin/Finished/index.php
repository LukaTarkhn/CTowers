<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">finished projects list <br><br>
                    <a href="<?=ADMIN;?>/finished/add">
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
                                <th>ID</th>
                                <th>Title-geo</th>
                                <th>Title-eng</th>
                                <th>Title-rus</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($finisheds as $finished): ?>
                                <tr>
                                    <th><?=$finished['id']?></th>
                                    <th><?=$finished['title_geo']?></th>
                                    <th><?=$finished['title_eng']?></th>
                                    <th><?=$finished['title_rus']?></th>
                                    <th>
                                        <a href="<?=ADMIN;?>/finished/edit?id=<?=$finished['id']?>">
                                            <i class="fa fa-fw fa-edit text-info"></i>
                                        </a>
                                        <a href="<?=ADMIN;?>/finished/delete?id=<?=$finished['id']?>">
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