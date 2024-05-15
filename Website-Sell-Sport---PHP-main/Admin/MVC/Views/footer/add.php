<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=footer&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nội Dung</label>
            <input type="text" class="form-control" id="summernote" placeholder="" name="NoiDung">
        </div>
        
        <div class="form-group">
          <label for="">Trạng thái</label>
          <input type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị Footer)</em>
      </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>
 <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            
        });
    </script>