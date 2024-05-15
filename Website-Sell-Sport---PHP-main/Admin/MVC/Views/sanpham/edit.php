<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=sanpham&act=update" method="POST" role="form" enctype="multipart/form-data">

        <input type="hidden" name="MaSP" value="<?= $data['MaSP'] ?>">
        
        <div class="form-group">
            <label for="cars">Loại sản phẩm: </label>
            <select id="" name="MaDM" class="form-control">
                <?php foreach ($data_dm as $row) { ?>
                    <option <?= ($row['MaDM'] == $data['MaDM'])?'selected':''?> value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cars">Loại sản phẩm: </label>
            <select id="" name="MaLSP" class="form-control">
                <?php foreach ($data_lsp as $row) { ?>
                    <option <?= ($row['MaLSP'] == $data['MaLSP'])?'selected':''?> value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenSP" value="<?=$data['TenSP']?>">
        </div>
        <div class="form-group">
            <label for="">Đơn giá</label>
            <input type="text" class="form-control" id="" placeholder="" name="DonGia" value="<?=$data['DonGia']?>">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" class="form-control" id="" placeholder="" name="SoLuong" value="<?=$data['SoLuong']?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 1</label>
            <img src="../public/image/sanpham/<?=$data['HinhAnh1']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1" value="<?=$data['HinhAnh1']?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 2</label>
            <img src="../public/image/sanpham/<?=$data['HinhAnh2']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh2" value="<?=$data['HinhAnh2']?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 3</label>
            <img src="../public/image/sanpham/<?=$data['HinhAnh3']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh3" value="<?=$data['HinhAnh3']?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 4</label>
            <img src="../public/image/sanpham/<?=$data['HinhAnh4']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh4" value="<?=$data['HinhAnh4']?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 5</label>
            <img src="../public/image/sanpham/<?=$data['HinhAnh5']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh5" value="<?=$data['HinhAnh5']?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 6</label>
            <img src="../public/image/sanpham/<?=$data['HinhAnh6']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh6" value="<?=$data['HinhAnh6']?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 7</label>
            <img src="../public/image/sanpham/<?=$data['HinhAnh7']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh7" value="<?=$data['HinhAnh7']?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 8</label>
            <img src="../public/image/sanpham/<?=$data['HinhAnh8']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh8" value="<?=$data['HinhAnh8']?>">
        </div>

        <div class="form-group">
      <label for="">Loại 1</label>
      <input type="text" class="form-control" id="" placeholder="" name="Loai1" value="<?=$data['Loai1']?>">
    </div>
     <div class="form-group">
      <label for="">Loại 2</label>
      <input type="text" class="form-control" id="" placeholder="" name="Loai2" value="<?=$data['Loai2']?>">
    </div>
     <div class="form-group">
      <label for="">Loại 3</label>
      <input type="text" class="form-control" id="" placeholder="" name="Loai3"value="<?=$data['Loai3']?>">
    </div>
     <div class="form-group">
      <label for="">Loại 4</label>
      <input type="text" class="form-control" id="" placeholder="" name="Loai4" value="<?=$data['Loai4']?>">
    </div>
     <div class="form-group">
      <label for="">Size 1</label>
      <input type="text" class="form-control" id="" placeholder="" name="Size1" value="<?=$data['Size1']?>">
    </div>
     <div class="form-group">
      <label for="">Size 2</label>
      <input type="text" class="form-control" id="" placeholder="" name="Size2" value="<?=$data['Size2']?>">
    </div>
     <div class="form-group">
      <label for="">Size 3</label>
      <input type="text" class="form-control" id="" placeholder="" name="Size3" value="<?=$data['Size3']?>">
    </div>
     <div class="form-group">
      <label for="">Size 4</label>
      <input type="text" class="form-control" id="" placeholder="" name="Size4" value="<?=$data['Size4']?>">
    </div>

        <div class="form-group">
            <label for="cars">Mã khuyến mãi </label>
            <select id="" name="MaKM" class="form-control">
                <?php foreach ($data_km as $row) { ?>
                    <option <?= ($row['MaKM'] == $data['MaKM'])?'selected':''?> value="<?= $row['MaKM'] ?>"><?= $row['TenKM'] ?></option>
                <?php } ?>
            </select>
        </div>

        <label for="">Mô tả</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote" placeholder="" name="MoTa"><?=$data['MoTa']?></textarea>
        </div>

         <label for="">Mô tả 1</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote1" placeholder="" name="MoTa1"><?=$data['MoTa1']?></textarea>
        </div>

         <label for="">Mô tả 2</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote2" placeholder="" name="MoTa2"><?=$data['MoTa2']?></textarea>
        </div>

        <div class="form-group">
            <label for="">Trạng thái</label>
            <input <?=($data['TrangThai']==1)?'checked':''?> type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị sản phẩm)</em>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
             $('#summernote1').summernote();
              $('#summernote2').summernote();
        });
    </script>