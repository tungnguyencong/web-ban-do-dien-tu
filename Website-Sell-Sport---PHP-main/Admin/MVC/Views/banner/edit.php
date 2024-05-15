<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=banner&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['Id'] ?>">
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <img src="../public/image/slide/<?=$data['HinhAnh']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh" value="<?=$data['HinhAnh']?>">
        </div>
        <div class="form-group">
            <label for="">Hình 2</label>
            <img src="../public/image/slide/<?=$data['Hinh2']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="Hinh2" value="<?=$data['Hinh2']?>">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>