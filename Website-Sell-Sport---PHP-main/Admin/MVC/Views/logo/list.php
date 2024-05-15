<a href="?mod=logo&act=add" type="button" class="btn btn-primary"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;Thêm mới</a>
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
      <th scope="col">Hình Ảnh</th>
      <th scope="col">Chiều rộng</th>
      <th scope="col">Chiều cao</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['Id'] ?></td>
        <td><?= $row['image'] ?></td>
         <td><?= $row['width'] ?></td>
         <td><?= $row['height'] ?></td>
        <td>
          <a href="?mod=logo&act=detail&id=<?= $row['Id'] ?>" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
          
        </td>
        <td>
           <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
          <a href="?mod=logo&act=edit&id=<?= $row['Id'] ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
         
          <?php }?>
        </td>
        <td>
           <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
          
          <a href="?mod=logo&act=delete&id=<?= $row['Id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
          <?php }?>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>