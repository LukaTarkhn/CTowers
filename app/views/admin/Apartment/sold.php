<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Sold apartments list</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<style>
    .sold {
        background: #1ebc8d;
        color: #fff;
    }
</style>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <?php $sumPrice = 0 ?>
                        <?php foreach ($apartments as $apartment): ?>
                            <?php $sumPrice = $sumPrice + intval($apartment['sellprice']); ?>
                        <?php endforeach; ?>
                        <div class="info-box bg-success">
                            <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Sold apartments sum price</span>
                                <span class="info-box-number"><?=$sumPrice?> USD</span>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th>Floor</th>
                                <th>Apartment No.</th>
                                <th>Area</th>
                                <th>Sell Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($apartments as $apartment): ?>
                                <tr style="<?=$apartment['status'] == 2 ? 'background: #FFC46B' : '';?>" class="<?=$apartment['status'] ? 'sold' : '';?>">
                                    <th>floor <?=$apartment['floorid']?></th>
                                    <th>Apartment No. <?=$apartment['apartmentno']?></th>
                                    <th><?=$apartment['kvmeter']?> m<sup>2</sup> </th>
                                    <th><?=$apartment['sellprice']?> USD</th>
                                    <?php if($apartment['status'] != 2) : ?>
                                        <th><?=$apartment['status'] ? 'Sold' : 'For sale';?></th>
                                    <?php else : ?>
                                        <th>Booked</th>
                                    <?php endif; ?>
                                    <th>
                                        <a href="<?=ADMIN;?>/apartment/edit?id=<?=$apartment['id']?>">
                                            <i class="fa fa-fw fa-edit text-primary"></i>
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