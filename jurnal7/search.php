<?php
if (isset($_POST['submit'])) {
  $sql = "SELECT * from mhs_baru where 'nim' like '%{search}' or 'nama' like '%{search}'";
  
}
?>
