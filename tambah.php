<?php

include "config/config.php";

if(isset($_POST['simpan'])){

    $mata_kuliah = $_POST['mata_kuliah'];
    $judul = $_POST['judul_tugas'];
    $deskripsi = $_POST['deskripsi'];
    $deadline = $_POST['deadline'];
    $prioritas = $_POST['prioritas'];

    $query = "INSERT INTO tugas
    (
        mata_kuliah,
        judul_tugas,
        deskripsi,
        deadline,
        prioritas
    )

    VALUES
    (
        '$mata_kuliah',
        '$judul',
        '$deskripsi',
        '$deadline',
        '$prioritas'
    )";

    $hasil = mysqli_query($conn,$query);

    if($hasil){

        echo "<script>

        alert('Tugas berhasil ditambahkan');

        window.location='index.php';

        </script>";

    }else{

        echo "<script>

        alert('Data gagal disimpan');

        </script>";

    }

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Tambah Tugas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-primary shadow">

<div class="container">

<a class="navbar-brand fw-bold" href="index.php">

📚 TaskMahasiswa

</a>

</div>

</nav>

<div class="container mt-5">
    <div class="row justify-content-center">

<div class="col-lg-8">

<div class="card shadow">

<div class="card-header bg-success text-white">

<h3>

<i class="bi bi-plus-circle"></i>

Tambah Tugas

</h3>

</div>

<div class="card-body">
    <form method="POST">

<div class="mb-3">

<label class="form-label">

Mata Kuliah

</label>

<input
type="text"
name="mata_kuliah"
class="form-control"
placeholder="Contoh : Sistem Operasi"
required>

</div>

<div class="mb-3">

<label class="form-label">

Judul Tugas

</label>

<input
type="text"
name="judul_tugas"
class="form-control"
placeholder="Masukkan Judul Tugas"
required>

</div>

<div class="mb-3">

<label class="form-label">

Deskripsi

</label>

<textarea
name="deskripsi"
class="form-control"
rows="4"
placeholder="Deskripsi tugas..."></textarea>

</div>

<div class="mb-3">

<label class="form-label">

Deadline

</label>

<input
type="date"
name="deadline"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">

Prioritas

</label>

<select
name="prioritas"
class="form-select">

<option>Rendah</option>

<option selected>Sedang</option>

<option>Tinggi</option>

</select>

</div>
<div class="d-flex justify-content-between">

<a
href="index.php"
class="btn btn-secondary">

<i class="bi bi-arrow-left"></i>

Kembali

</a>

<button
type="submit"
name="simpan"
class="btn btn-success">

<i class="bi bi-save"></i>

Simpan

</button>

</div>

</form>

</div>

</div>

</div>

</div>

</div> //container

</body>


</html>