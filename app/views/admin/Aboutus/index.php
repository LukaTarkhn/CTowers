<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">About us info</h1>
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
                                <th>GEO</th>
                                <th>ENG</th>
                                <th>RUS</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($aboutus as $about): ?>
                                <tr>
                                    <th><?=$about['content_geo']?></th>
                                    <th><?=$about['content_eng']?></th>
                                    <th><?=$about['content_rus']?></th>
                                    <th>
                                        <a href="<?=ADMIN;?>/aboutus/edit?id=<?=$about['id']?>">
                                            <i class="fa fa-fw fa-edit text-info"></i>
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