<?php

 // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
 // $_POST itu method di formnya
 if(isset($_POST['update'])){
 
 // untuk mengoneksikan dengan database dengan memanggil file db.php
 include('../db.php');
 // tampung nilai yang ada di from ke variabel
 // sesuaikan variabel name yang ada di registerPage.php disetiap input
 $id = $_GET['id']; 

 $username = $_POST['username'];
 $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 $name = $_POST['name'];
 $npm = $_POST['npm'];
 $prodi = $_POST['prodi'];
 // Melakukan insert ke databse dengan query dibawah ini
 $query = "UPDATE users SET username='$username', password='$password', name='$name', npm='$npm', prodi='$prodi' WHERE id='$id' ";
 $query_run = mysqli_query($con, $query);

 if($query){
    echo
    '<script>
    alert("Create Data Success"); window.location = "../page/listMahasiswaPage.php"
    </script>';
    }else{
    echo
    '<script>
    alert("Create Data Failed");
    </script>';
    }
 
 }else{
 echo
 '<script>
 window.history.back()
 </script>';
 }

?>