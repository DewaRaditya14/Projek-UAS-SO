<?php

include "config/config.php";

$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM tugas WHERE id='$id'");

if($query){

    echo "

    <script>

    alert('Data berhasil dihapus');

    window.location='index.php';

    </script>

    ";

}else{

    echo "

    <script>

    alert('Data gagal dihapus');

    window.location='index.php';

    </script>

    ";

}

?>