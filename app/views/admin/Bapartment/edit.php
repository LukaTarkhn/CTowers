<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Apartment edit</h1>
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
                <form action="<?=ADMIN;?>/bapartment/edit" method="post" data-toggle="validator">
                    <select class="form-control" name="status" id="status">
                        <option <?=$apartments->status ? 'selected' : ''?> value="1">Sold</option>
                        <option <?=$apartments->status ? '' : 'selected'?> value="0">For sale</option>
                        <option <?=$apartments->status == 2 ? 'selected' : ''?> value="2">Booked</option>
                    </select>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?=$apartments->id?>">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->