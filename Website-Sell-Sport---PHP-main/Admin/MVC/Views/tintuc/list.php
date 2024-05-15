<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
<a href="?mod=tintuc&act=add" type="button" class="btn btn-primary"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Post</th>
      <th scope="col">Post 1</th>
      <th scope="col">Date</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <th scope="row"><?= $row['id'] ?></th>
        <td><?= $row['title'] ?></td>
        <td><image src="../public/image/tintuc/<?= $row['image'] ?>" style="width: 60px;"></td>
        <td><?= $row['tieude'] ?></td>
        <td><?= $row['posts'] ?></td>
        <td><?= $row['date'] ?></td>
        <td>
          <a href="../index.php?act=tintuc&id=<?= $row['id'] ?>" type="button" class="btn btn-success" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a>
         
        </td>
        <td>
           <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
          <a href="?mod=tintuc&act=edit&id=<?= $row['id'] ?>" type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          
          <?php } ?>
        </td>
        <td>
           <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
          
          <a href="?mod=tintuc&act=delete&id=<?= $row['id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
          <?php } ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>