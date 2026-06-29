<?php

include "config/config.php";

$id = $_GET['id'];

mysqli_query($conn,"UPDATE tugas
SET status='Selesai'
WHERE id='$id'");

echo "

<script>

alert('Tugas telah selesai');

window.location='index.php';

</script>

";

?>