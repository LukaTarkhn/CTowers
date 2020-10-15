<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Armores list <br><br>
<!--                    <a href="--><?//=ADMIN;?><!--/armores/add">-->
<!--                        <i class="fa fa-fw fa-plus text-primary"></i>-->
<!--                    </a>-->
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
                                <th>person</th>
                                <th>mobile</th>
                                <th>email</th>
                                <th>floor</th>
                                <th>apartment</th>
                                <th>duration</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($armores as $armore): ?>
                                <tr>
                                    <th><?=$armore['person']?></th>
                                    <th><?=$armore['mobile']?></th>
                                    <th><?=$armore['email']?></th>
                                    <th>სართული: <?=$armore['floor']?></th>
                                    <th>აპარტამენტი: <?=$armore['apartment']?></th>
                                    <?php if($armore['duration'] == 1): ?>
                                        <th>2-5 დღე 300 $</th>
                                    <?php elseif ($armore['duration'] == 2): ?>
                                        <th>6-14 დღე 500 $</th>
                                    <?php else: ?>
                                        <th>15-25 დღე 1000 $</th>
                                    <?php endif; ?>
                                    <th>
<!--                                        <a href="--><?//=ADMIN;?><!--/armores/edit?id=--><?//=$armore['id']?><!--">-->
<!--                                            <i class="fa fa-fw fa-edit text-info"></i>-->
<!--                                        </a>-->
                                        <a href="<?=ADMIN;?>/armores/delete?id=<?=$armore['id']?>">
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