<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=logo&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh">
        </div>
      
         <div class="form-group">
            <label for="">Chiều rộng</label>
            <input type="text" class="form-control" id="" placeholder="" name="chieurong" value="">
        </div>
        <div class="form-group">
            <label for="">Chiều cao</label>
            <input type="text" class="form-control" id="" placeholder="" name="chieucao" value="">
        </div>
        <div class="form-group">
          <label for="">Trạng thái</label>
          <input type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị Logo)</em>
      </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>