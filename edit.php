<?php

include "config/config.php";

include "layouts/header.php";

include "layouts/navbar.php";

$id = $_GET['id'];

$query = mysqli_query($conn,"SELECT * FROM tugas WHERE id='$id'");

$data = mysqli_fetch_assoc($query);
if(isset($_POST['update'])){

$mk=$_POST['mata_kuliah'];

$judul=$_POST['judul_tugas'];

$deskripsi=$_POST['deskripsi'];

$deadline=$_POST['deadline'];

$prioritas=$_POST['prioritas'];

mysqli_query($conn,"UPDATE tugas SET

mata_kuliah='$mk',

judul_tugas='$judul',

deskripsi='$deskripsi',

deadline='$deadline',

prioritas='$prioritas'

WHERE id='$id'");

echo "

<script>

alert('Data berhasil diupdate');

window.location='index.php';

</script>

";

}

?>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-lg-8">

<div class="card shadow">

<div class="card-header bg-warning">

<h3>Edit Tugas</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Mata Kuliah</label>

<input
type="text"
name="mata_kuliah"
class="form-control"
value="<?= $data['mata_kuliah']; ?>">

</div>

<div class="mb-3">

<label>Judul Tugas</label>

<input
type="text"
name="judul_tugas"
class="form-control"
value="<?= $data['judul_tugas']; ?>">

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="deskripsi"
class="form-control"
rows="4"><?= $data['deskripsi']; ?></textarea>

</div>

<div class="mb-3">

<label>Deadline</label>

<input
type="date"
name="deadline"
class="form-control"
value="<?= $data['deadline']; ?>">

</div>
<div class="mb-3">

<label>Prioritas</label>

<select
name="prioritas"
class="form-select">

<option
<?= $data['prioritas']=="Rendah"?"selected":""; ?>>
Rendah
</option>

<option
<?= $data['prioritas']=="Sedang"?"selected":""; ?>>
Sedang
</option>

<option
<?= $data['prioritas']=="Tinggi"?"selected":""; ?>>
Tinggi
</option>

</select>

</div>
<button
type="submit"
name="update"
class="btn btn-warning">

Update

</button>

<a
href="index.php"
class="btn btn-secondary">

Batal

</a>

</form>

</div>

</div>

</div>

</div>

</div>