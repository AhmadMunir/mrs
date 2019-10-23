 <!DOCTYPE html>
 <html lang="en">

 <head>
    <?php $this->load->view("admin/partial/head.php") ?>
</head>

<body>
  <?php $this->load->view('admin/partial/sidebar') ?>
  <div class="table-responsive">
      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
              <tr>
                  <th>Nama Kategori</th>
              </tr>
          </thead>
      </table>
      <tbody>
         <!--  -->
          <tr>
              <td width="150">

              </td>
              <td width="250">
                  <a href=""
                  class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
              </td>
          </tr>

      </tbody>
  </div>
<?php $this->load->view('admin/partial/jquery') ?>
</body>

</html>
