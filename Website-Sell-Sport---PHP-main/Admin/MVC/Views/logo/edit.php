<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=logo&act=update" method="POST" role="form" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $data['Id'] ?>">

        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="hidden" name="anhcu" value="<?=$data['image']?>">

            <img src="../public/image/icon/<?=$data['image']?>" height="<?=$data['height']?>" width="<?=$data['width']?>">
            
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh" value="<?=$data['image']?>">
        </div>
        <div class="form-group">
            <label for="">Chiều rộng</label>
            <input type="text" class="form-control" id="" placeholder="" name="chieurong" value="<?=$data['width']?>">
        </div>
        <div class="form-group">
            <label for="">Chiều cao</label>
            <input type="text" class="form-control" id="" placeholder="" name="chieucao" value="<?=$data['height']?>">
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
             <input <?=($data['TrangThai']==1)?'checked':''?> type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị Logo)</em>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>