<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=menu&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="form-group">
            <label for="">Tên Menu</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenMenu" value="<?= $data['TenMenu'] ?>">
        </div>
        <div class="form-group">
            <label for="">Link</label>
            <input type="text" class="form-control" id="" placeholder="" name="Link" value="<?= $data['Link'] ?>">
        </div>
        <div class="form-group">
            <label for="">Nội Dung</label>
            <textarea type="text" class="form-control" id="summernote" placeholder="" name="NoiDung" value=""><?= $data['NoiDung'] ?></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>
<script>
    $(document).ready(function() {
      $('#summernote').summernote();
        $('#summernote1').summernote();
          $('#summernote2').summernote();
    });
  </script>