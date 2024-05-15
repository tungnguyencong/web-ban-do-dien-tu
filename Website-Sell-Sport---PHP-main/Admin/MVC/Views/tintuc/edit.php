<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=tintuc&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="form-group">
            <label for="">Title</label>
           
            <input type="text" class="form-control" id="" placeholder="" name="title" value="<?=$data['title']?>">
        </div>
        
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <img src="../public/image/tintuc/<?=$data['image']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="image" value="<?=$data['image']?>">
        </div>

          <div class="form-group">
            <label for="">Post</label>
           
            <textarea type="text" class="form-control" id="summernote" placeholder="" name="tieude"><?=$data['tieude']?></textarea>
        </div>
          <div class="form-group">
            <label for="">Post 2</label>
           
            <textarea type="text" class="form-control" id="summernote1" placeholder="" name="posts" ><?=$data['posts']?></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>
 <script>
        $(document).ready(function() {
            $('#summernote').summernote();
             $('#summernote1').summernote();
             
        });
    </script>