<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
  <form action="?mod=sanpham&act=store" method="POST" role="form" enctype="multipart/form-data">
    <div class="form-group">
      <label for="cars">Danh mục: </label>
      <select id="" name="MaDM" class="form-control">
        <?php foreach ($data_dm as $row) { ?>
          <option value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="cars">Loại sản phẩm: </label>
      <select id="" name="MaLSP" class="form-control">
        <?php foreach ($data_lsp as $row) { ?>
          <option value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="">Tên sản phẩm</label>
      <input type="text" class="form-control" id="" placeholder="" name="TenSP">
    </div>
    <div class="form-group">
      <label for="">Đơn giá</label>
      <input type="text" class="form-control" id="" placeholder="" name="DonGia">
    </div>
    <div class="form-group">
      <label for="">Số lượng</label>
      <input type="text" class="form-control" id="" placeholder="" name="SoLuong">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 1 </label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 2</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh2">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 3</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh3">
    </div>
     <div class="form-group">
      <label for="">Hình ảnh 4 </label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh4">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 5</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh5">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 6</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh6">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 7</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh7">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 8</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh8">
    </div>
     <div class="form-group">
      <label for="">Loại 1</label>
      <input type="text" class="form-control" id="" placeholder="" name="Loai1">
    </div>
     <div class="form-group">
      <label for="">Loại 2</label>
      <input type="text" class="form-control" id="" placeholder="" name="Loai2">
    </div>
     <div class="form-group">
      <label for="">Loại 3</label>
      <input type="text" class="form-control" id="" placeholder="" name="Loai3">
    </div>
     <div class="form-group">
      <label for="">Loại 4</label>
      <input type="text" class="form-control" id="" placeholder="" name="Loai4">
    </div>
     <div class="form-group">
      <label for="">Size 1</label>
      <input type="text" class="form-control" id="" placeholder="" name="Size1">
    </div>
     <div class="form-group">
      <label for="">Size 2</label>
      <input type="text" class="form-control" id="" placeholder="" name="Size2">
    </div>
     <div class="form-group">
      <label for="">Size 3</label>
      <input type="text" class="form-control" id="" placeholder="" name="Size3">
    </div>
     <div class="form-group">
      <label for="">Size 4</label>
      <input type="text" class="form-control" id="" placeholder="" name="Size4">
    </div>
    <div class="form-group">
      <label for="cars">Mã khuyến mãi </label>
      <select id="" name="MaKM" class="form-control">
        <?php foreach ($data_km as $row) { ?>
          <option value="<?= $row['MaKM'] ?>"><?= $row['TenKM'] ?></option>
        <?php } ?>
      </select>
    </div>
     <div class="form-group">
      <label for="">Loại Sale</label>
      <input type="text" class="form-control" id="" placeholder="" name="LoaiSale">
    </div>
    
    <label for="">Mô tả</label>
    <div class="form-group">
      <textarea class="form-control" id="summernote" placeholder="" name="MoTa"></textarea>
    </div>
    <label for="">Mô tả 1</label>
    <div class="form-group">
      <textarea class="form-control" id="summernote1" placeholder="" name="MoTa1"></textarea>
    </div>
    <label for="">Mô tả 2</label>
    <div class="form-group">
      <textarea class="form-control" id="summernote2" placeholder="" name="MoTa2"></textarea>
    </div>
    <div class="form-group">
      <label for="">Trạng thái</label>
      <input type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị sản phẩm)</em>
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
</table>