<?php
include 'koneksi.php';

if(isset($_POST['tambah'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $sql = "insert into pengguna(username, email, password, alamat, no_hp) values ('$username', '$email', '$password', '$alamat', '$no_hp')";
    $query = mysqli_query($conn, $sql);
    if ($query){
        header('location: view_pelanggan.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    
    <link rel="stylesheet" href="assets/assets/css/main/app.css">
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/assets/images/logo/favicon.png" type="image/png">
    
<link rel="stylesheet" href="assets/assets/css/shared/iconly.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div>
            <div class="d-flex p-2 border-bottom mb-2">
                <img src="./images/user/user.png" alt="user" class="img-user me-2">
                    <div>
                        <p style="font-size:18px ;">Gilang Aldiansyah</p>
                        <small style="font-size: 20px;">Admin</small>
                    </div>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
           
            
            
        </ul>
    </div>
</div>
</div>
<div id="main">
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <h3>Data Pelanggan</h3>
</div>
<div class="page-content">
<section id="multiple-column-form" >
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Isi data </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="POST" action="pelanggan.php">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">ID Pengguna</label>
                                            <input type="text"  class="form-control"
                                                placeholder="Masukkan ID Pengguna" name="id_pengguna">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Alamat</label>
                                            <input type="text"  class="form-control"
                                                placeholder="Masukkan alamat" name="alamat">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Username</label>
                                            <input type="text"  class="form-control" placeholder="Masukkan username"
                                                name="username">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Nomor Handphone</label>
                                            <input type="text"  class="form-control"
                                                name="no_hp" placeholder="Masukkan nomor handphone">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Password</label>
                                            <input type="password" class="form-control"
                                                name="password" placeholder="Masukkan password">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <input type="submit" class="btn btn-primary  me-1 mb-1" name="tambah" value="Tambah">
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Admin</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Gilang</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/assets/js/bootstrap.js"></script>
    <script src="assets/assets/js/app.js"></script>
    
<!-- Need: Apexcharts -->
<script src="assets/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/assets/js/pages/dashboard.js"></script>

</body>


</html>
