<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRUD Nirwana</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CRUD ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Produk</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="pembelian.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pembelian</span></a>
            </li>

            <li class="active nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="log_produk.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Log Produk</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ahmad Nirwana</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Table User</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <div class="row">
                                            <div class="col-md-6 bg-light text-right">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Cari disini..." aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-warning" type="button">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 bg-light text-right">
                                                <button type="button" class="btn btn-outline-primary">Tambah</button>
                                            </div>
                                        </div>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Pekerjaan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "config.php";
                                        $sql = "select * from user";
                                        $result = mysqli_query($conn, $sql);
                                        while ($data = mysqli_fetch_assoc($result)) {

                                        ?>
                                            <tr>
                                                <td><?php echo $data["id"]; ?></td>
                                                <td><?php echo $data["nama"]; ?></td>
                                                <td><?php echo $data["alamat"]; ?></td>
                                                <td><?php echo $data["pekerjaan"]; ?></td>
                                                <td>
                                                    <div class="column"><a href="#" class="btn btn-outline-success btn-flat btn-xs" data-toggle="modal" data-target="#updateuser<?php echo $data["id"]; ?>">Edit</a> &nbsp;&nbsp; <a href="#" class="btn btn-outline-danger btn-flat btn-xs" data-toggle="modal" data-target="#deleteuser<?php echo $data["id"]; ?>"></i> Delete</a>
                                                </td>
                                            </tr>
                                        <? } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

                <!-- modal insert -->
                <div class="example-modal">
            <div id="tambahuser" class="modal fade" role="dialog" style="display:none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Tambah Pembelian Baru</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="../user/function_user.php?act=tambahuser" method="post" role="form">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label text-right">ID Produk <span class="text-red">*</span></label>
                                        <div class="col-sm-8"><input type="text" class="form-control" name="id_produk" placeholder="ID Produk" value=""></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label text-right">Quantity <span class="text-red">*</span></label>
                                        <div class="col-sm-8"><input type="text" class="form-control" name="qty" placeholder="Quantity" value=""></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label text-right">Harga <span class="text-red">*</span></label>
                                        <div class="col-sm-8"><input type="text" class="form-control" name="harga" placeholder="Harga" value=""></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label text-right">Total Bayar <span class="text-red">*</span></label>
                                        <div class="col-sm-8"><input type="text" class="form-control" name="total_bayar" placeholder="Total Bayar" value=""></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- modal insert close -->

        <!-- modal delete -->
        <div class="example-modal">
            <div id="deleteuser<?php echo $data['id']; ?>" class="modal fade" role="dialog" style="display:none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Konfirmasi Delete Data Produk</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h4 align="center">Apakah anda yakin ingin menghapus produk id <?php echo $data['id']; ?><strong><span class="grt"></span></strong> ?</h4>
                        </div>
                        <div class="modal-footer">
                            <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                            <a href="../user/function_user.php?act=deleteuser&id=<?php echo $data['id']; ?>" class="btn btn-primary">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- modal delete -->
        <!-- modal update user -->
        <div class="example-modal">
            <div id="updateuser<?php echo $data["id"]; ?>" class="modal fade" role="dialog" style="display:none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Edit Data User</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="../user/function_user.php?act=updateuser" method="post" role="form">
                                <?php
                                            $id_pembelian = $data['id'];
                                            $query = "SELECT * FROM pembelian WHERE id='$id_pembelian'";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label text-right">ID Produk <span class="text-red">*</span></label>
                                            <div class="col-sm-8"><input type="text" class="form-control" name="nama_produk" placeholder="Username" value="<?php echo $row['id_produk']; ?>"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label text-right">Quantity <span class="text-red">*</span></label>
                                            <div class="col-sm-8"><input type="text" class="form-control" name="harga" placeholder="Username" value="<?php echo $row['qty']; ?>"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label text-right">Harga <span class="text-red">*</span></label>
                                            <div class="col-sm-8"><input type="text" class="form-control" name="qty" placeholder="Username" value="<?php echo $row['harga']; ?>"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label text-right">Total Bayar <span class="text-red">*</span></label>
                                            <div class="col-sm-8"><input type="text" class="form-control" name="qty" placeholder="Username" value="<?php echo $row['total_bayar']; ?>"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="noedit" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                        <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                    </div>
                                <?php
                                            }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- modal update user -->


        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>