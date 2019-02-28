<?php
class oop {

    function simpan($con, $table, array $field, $redirect) {
        $sql = "INSERT INTO $table SET ";
        foreach ($field as $key => $value) {
            $sql.=" $key = '$value',";
        }
        $sql = rtrim($sql, ',');
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "<script>alert('Success');document.location.href='$redirect'</script>";
        } else {
            echo $sql;
        }
    }

    function tampil($con, $table) {
        $sql = "SELECT * FROM $table";
        $query = mysqli_query($con, $sql);
        while ($data = mysqli_fetch_array($query))
        $isi[] = $data;
        return @$isi;
    }

    function hapus($con, $table, $where, $redirect) {
        $sql = "DELETE FROM $table WHERE $where";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "<script>alert('Success');document.location.href='$redirect'</script>";
        } else {
            echo $sql;
        }
    }

    function edit($con, $table, $where) {
        $sql = "SELECT * FROM $table WHERE $where";
        $query = mysqli_query($con, $sql);
        $data = mysqli_fetch_array($query);
        return $data;
    }

    function ubah($con, $table, array $field, $where, $redirect) {
        $sql = "UPDATE $table SET";
        foreach ($field as $key => $value) {
            $sql.=" $key = '$value',";
        }
        $sql = rtrim($sql, ',');
        $sql.="WHERE $where";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "<script>alert('Success');document.location.href='$redirect'</script>";
        } else {
             echo $sql;
        }
    }

    function upload($foto, $folder) {
        $tmp = $foto['tmp_name'];
        $namafile = $foto['name'];
        move_uploaded_file($tmp, "$folder/$namafile");
        return $namafile;
    }
    function login($con, $table, $username, $password, $redirect) {
        @session_start();
        $sql = "SELECT * FROM tbl_user WHERE username = '$username' and password = '$password'  ";
        $query = mysqli_query($con, $sql);
        $tampil = mysqli_fetch_array($query);
        $cek = mysqli_num_rows($query);
        if ($cek > 0) {
            $_SESSION['username'] = $username;
            echo "<script>alert('Login Berhasil');document.location.href='$redirect'</script>";
        } else {
            echo "<script>alert('Login gagal username dan password !!');</script>";
        } $data  = mysqli_fetch_assoc($sql);
  $_SESSION['akses']=$akses;
  if ($data['akses']=="ADMIN") {
    $_SESSION['username']=$username;
    $_SESSION['akses']="ADMIN";
    echo "<script>alert('Selamat Datang $username');document.location.href='awe.php'</script>";
  }elseif ($data['akses'] == 'KASIR') {
    $_SESSION['username']=$username;
    $_SESSION['akses']="KASIR";
    echo "<script>alert('Selamat Datang $username');document.location.href='awe.php'</script>";
  }elseif ($data['akses'] == 'MANAGER') {
    $_SESSION['username']=$username;
    $_SESSION['akses']="MANAGER";
    echo "<script>alert('Selamat Datang $username');document.location.href='awe.php'</script>";
  }

    }
}
?>