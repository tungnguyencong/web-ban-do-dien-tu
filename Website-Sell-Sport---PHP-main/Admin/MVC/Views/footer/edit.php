<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=footer&act=update" method="POST" role="form" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $data['Id'] ?>">
        
        
            <label for="">Nội Dung</label>
             <textarea class="form-control" id="summernote" placeholder="" name="NoiDung"><?= $data['NoiDung']?></textarea>
        </div>
      
        <div class="form-group">
               <label for="">Trạng thái</label>
               <select id="" name="TrangThai" class="form-control">
                    <option <?= ($data['TrangThai'] == '0')?'selected':''?> value="0"> Ẩn</option>
                    <option <?= ($data['TrangThai'] == '1')?'selected':''?> value="1"> Hiện</option>
               </select>
           </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>

    </form>
</table>
 <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            
        });
    </script>