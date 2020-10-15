<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Offers list <br><br>
                    <a href="<?=ADMIN;?>/offers/add">
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
                                <th>Title</th>
                                <th>Title-eng</th>
                                <th>Title-rus</th>
                                <th>Sale</th>
                                <th>Mini text</th>
                                <th>Mini text-eng</th>
                                <th>Mini text-rus</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($offers as $offer): ?>
                                <tr>
                                    <th><?=$offer['title']?></th>
                                    <th><?=$offer['title_eng']?></th>
                                    <th><?=$offer['title_rus']?></th>
                                    <th>-<?=$offer['sale']?>%</th>
                                    <th><?=$offer['text']?></th>
                                    <th><?=$offer['text_eng']?></th>
                                    <th><?=$offer['text_rus']?></th>
                                    <th>
                                        <a href="<?=ADMIN;?>/offers/edit?id=<?=$offer['id']?>">
                                            <i class="fa fa-fw fa-edit text-info"></i>
                                        </a>
                                        <a href="<?=ADMIN;?>/offers/delete?id=<?=$offer['id']?>">
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