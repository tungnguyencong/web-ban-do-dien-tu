<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=menu&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên Menu</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenMenu">
        </div>
        <div class="form-group">
            <label for="">Link</label>
            <input type="text" class="form-control" id="" placeholder="" name="Link">
        </div>
        <div class="form-group">
            <label for="">Nội Dung</label>
            <input type="text" class="form-control" id="summernote" placeholder="" name="NoiDung">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>
 <script>
    $(document).ready(function() {
      $('#summernote').summernote();
        $('#summernote1').summernote();
          $('#summernote2').summernote();
    });
  </script>