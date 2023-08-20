<?php
    //Upload Foto
    if (isset($_FILES["file"]["name"])) {
        $nama = $_GET['nama'];
        $idKirim = $_GET['idKirim'];

        $test = explode('.', $_FILES["file"]["name"]);
        $ext = end($test);
        $name = uniqid($nama).'.'.$ext;

        if ($idKirim == 'Tambah Artikel IPMers' ){
            $location = 'inputan-user/artikel/' . $name;
        }elseif ($idKirim == 'Tambah Data Ketums' ) {
            $location = 'inputan-user/foto-ketums/' . $name;
        }elseif ($idKirim == 'Tambah Data Struktur PD IPM Bulukumba' ) {
            $location = 'inputan-user/struktur/' . $name;
        }elseif ($idKirim == 'Tambah Admin Web Nuun Panrita Lopi') {
            $location = 'inputan-user/admin/' . $name;
        }elseif ($idKirim == 'Tambah Kader TM. 1' || $idKirim == 'Edit Kader TM. 1') {
            $location = 'inputan-user/tm1/' . $name;
        }else {
            $location = 'inputan-user/cache/' . $name;
        }
        
        move_uploaded_file($_FILES["file"]["tmp_name"], '../'.$location);
        echo '<img src="../plugins/'.$location.'" height="80" width="155" class="mt-2 img-thumbnail" />';
        echo '<input type="hidden" name="file1b" value="'.$name.'" class="form-control">';

        exit;
    } 
    
    //hapusKetums dan Artikel dan Struktur
    elseif (isset($_GET['hapus'])) {
        $target = $_GET['hapus'];
        $id = $_GET['id'];
        
        if ( hapus($target, $id) > 0 ) {
            echo "
            <script>
                alert('Berhasil mi dihapus!');
                document.location = '../admin';
            </script>
            ";
            Exit;
        }else{
            echo "
            <script>
                alert('Gagal ki dihapus);
                document.location = '../admin';
            </script>
            ";
            Exit;
        }

        exit;       
    }

    // tambah Ketums
    elseif (isset($_POST['tambahKetums']) ){
        if (tambahKetums($_POST) > 0) {
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location = '../admin';
            </script>
            ";
            Exit;
        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location = '../admin';
            </script>
            ";
            Exit;
        }

        exit;
    }

    // tambah STRUKTUR
    elseif (isset($_POST['tambahPimpinan']) ){
        if (tambahPimpinan($_POST) > 0) {
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location = '../admin';
            </script>
            ";
            Exit;
        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location = '../admin';
            </script>
            ";
            Exit;
        }

        exit;
    }

    // tambah Artikrel
    elseif (isset($_POST['artikel']) ){
        if (tambahArtikel($_POST) > 0) {
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location = '../admin';
            </script>
            ";
            Exit;
        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location = '../admin';
            </script>
            ";
            Exit;
        }

        exit;
    }

    // tambah Admin Web
    elseif (isset($_POST['tambahAdminWeb']) ){
        if (tambahAdminWeb($_POST) > 0) {
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location = '../admin';
            </script>
            ";
            Exit;
        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location = '../admin';
            </script>
            ";
            Exit;
        }

        exit;
    }

    // tambah Kader TM 1
    elseif (isset($_POST['tambahKadertm1']) ){
        if (tambahKadertm1($_POST) > 0) {
            echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location = '../admin';
            </script>
            ";
            Exit;
        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location = '../admin';
            </script>
            ";
            Exit;
        }

        exit;
    }

    // Edit Kader TM 1
    elseif (isset($_POST['EditKadertm1']) ){
        if (EditKadertm1($_POST) > 0) {
            echo "
            <script>
                alert('Data berhasil diedit');
                document.location = '../admin';
            </script>
            ";
            Exit;
        } else {
            echo "
            <script>
                alert('Data gagal diedit');
                document.location = '../admin';
            </script>
            ";
            Exit;
        }

        exit;
    }

    //Login Admin
    elseif (isset($_POST["login-admin"]) ) {
		
        $idAdmin = $_POST["idAdmin"];
        $password = $_POST["password"];
    
        $result = mysqli_query($conn, "SELECT * FROM admin WHERE idAdmin = '$idAdmin'");
    
        // cek username
        if (mysqli_num_rows($result) === 1) {
            
            // cek password
            $row = mysqli_fetch_assoc($result);		
                                
            if($password == $row['password']){								
                // set session
                session_start();
                $_SESSION["loginAdmin"] = $row['id'];
                header("location: ../admin");

                exit;
            }else {
             echo "
                <script>
                    alert('Paswoard SALAH')
                    document.location.href = '../admin'
                </script>
                ";
            Exit;
            }
        }else { 
            echo "
                <script>
                    alert('Alamat email anda SALAH !')
                    document.location.href = '../admin'
                </script>
                ";	
            exit;
        }

        exit;
    }