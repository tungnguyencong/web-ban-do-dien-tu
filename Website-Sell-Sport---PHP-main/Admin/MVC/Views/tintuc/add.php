<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=tintuc&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" id="" placeholder="" name="title">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" id="" placeholder="" name="image">
        </div>
        <div class="form-group">
            <label for="">Post</label>
            <textarea type="text" name="tieude"class="form-control" id="summernote" placeholder=""></textarea>
        </div>
         <div class="form-group">
            <label for="">Post 2</label>
            <textarea type="text"name="posts"class="form-control" id="summernote1" placeholder=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>
<script>
        $(document).ready(function() {
            $('#summernote').summernote();
             $('#summernote1').summernote();
             
        });
    </script>