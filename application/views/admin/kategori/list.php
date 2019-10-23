 <!DOCTYPE html>
 <html lang="en">

 <head>
    <?php $this->load->view("admin/partial/head.php") ?>
</head>

<body id="page-top">
    <div id="wrapper">
    <?php $this->load->view("admin/partial/sidebar.php")?>

    <div id="content-wrapper">
        <div class="container-fluid">

            <div class="card mb-3">
                <div class="card-harder">
                    <a href="<?php echo site_url('admin/kategori/add') ?>"><i class="fas fa-plus"></i> Tambah Barang</a>
                </div>
                <div class="card-body">
                    
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
                                    <a onclick=
                                    "
                                    href='#!'class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        
                        </tbody>
                    </div>
                </div>
            
        </div>
    </div>
    <?php $this->load->view("admin/partial/footer.php")?>
</div>
</div>
</div>