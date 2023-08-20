<?php
// Koneksi to databases
//......................
$tahun = date('Y');

// $conn = mysqli_connect("srv49.niagahoster.com","u5363348_lipmb","lipmb.umbulukumba","u5363348_ipm-bulukumba");
$conn = mysqli_connect("localhost", "root", "", "u5363348_ipm-bulukumba");

// Check connection
if (mysqli_connect_errno()) {
	die("MOHON MAAF DATABASE SUDAH TIDAK BERLAKU !");
}

// query
function queries($ambil)
{
	global $conn;
	$result = mysqli_query($conn, $ambil);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

//Function Bulan Indonesia
function bulanIndonesia($e)
{
	$bulan = [
		1 => 'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	];

	$exp = explode('-', $e);
	return $exp[2] . ' ' . $bulan[(int)$exp[1]] . ' ' . $exp[0];
}

function tambahKetums($data)
{
	global $conn;

	$prd = $data['prd'];
	$nama = ucwords(strtolower($data['nama']));
	$tempat = ucwords(strtolower($data['tempat']));
	$tanggal = $data['tanggal'];
	$pekerjaan = ucwords(strtolower($data['pekerjaan']));
	$alamat = ucwords(strtolower($data['alamat']));
	$pendidikan = ucwords(strtolower($data['pendidikan']));
	$tahunTamat = $data['tahunTamat'];
	$tm1a = ucwords(strtolower($data['tm1a']));
	$tm1b = $data['tm1b'];
	$tm2a = ucwords(strtolower($data['tm2a']));
	$tm2b = $data['tm2b'];
	$pfp1a = ucwords(strtolower($data['pfp1a']));
	$pfp1b = $data['pfp1b'];
	$tm3a = ucwords(strtolower($data['tm3a']));
	$tm3b = $data['tm3b'];
	$pfp2a = ucwords(strtolower($data['pfp2a']));
	$pfp2b = $data['pfp2b'];
	$tmua = ucwords(strtolower($data['tmua']));
	$tmub = $data['tmub'];
	$pesan = ucwords(strtolower($data['pesan']));

	if (isset($data['file1b'])) {
		$foto = $data['file1b'];
	} else {
		$foto = '';
		echo "
            <script>
                alert('Anda tidak mengunggah foto');
            </script>
            ";
	}

	$query = "INSERT INTO ketums VALUES (
			'', '$prd', '$nama', '$tempat', '$tanggal', '$pekerjaan', '$alamat', '$pendidikan',  '$tahunTamat', '$tm1a', '$tm1b', '$tm2a', '$tm2b', '$pfp1a', '$pfp1b', '$tm3a', '$tm3b', '$pfp2a', '$pfp2b', '$tmua', '$tmub', '$pesan', '$foto'
		)";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

	// var_dump($data);
}

function tambahPimpinan($data)
{
	global $conn;

	$nama = ucwords(strtolower($data['nama']));
	$tempat = ucwords(strtolower($data['tempat']));
	$tanggal = $data['tanggal'];
	$pekerjaan = ucwords(strtolower($data['pekerjaan']));
	$alamat = ucwords(strtolower($data['alamat']));
	$jenjang = $data['jenjang'];
	$tempatjp = ucwords(strtolower($data['tempatjp']));
	$tahunjp = $data['tahunjp'];
	$sda = ucwords(strtolower($data['sda']));
	$sdb = $data['sdb'];
	$sltpa = ucwords(strtolower($data['sltpa']));
	$sltpb = $data['sltpb'];
	$sltaa = ucwords(strtolower($data['sltaa']));
	$sltab = $data['sltab'];
	$sta = ucwords(strtolower($data['sta']));
	$stb = $data['stb'];
	$pesan = ucwords(strtolower($data['pesan']));
	$amanah = $data['amanah'];
	$hp = $data['hp'];

	if (isset($data['file1b'])) {
		$foto = $data['file1b'];
	} else {
		$foto = '';
		echo "
            <script>
                alert('Anda tidak mengunggah foto');
            </script>
            ";
	}

	$query = "INSERT INTO struktur VALUES (
			'', '$nama', '$tempat', '$tanggal', '$pekerjaan', '$alamat', '$jenjang',  '$tempatjp', '$tahunjp', '$sda', '$sdb', '$sltpa', '$sltpb', '$sltaa', '$sltab', '$sta', '$stb', '$pesan', '$amanah', '$hp', '$foto'
		)";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function tambahArtikel($data)
{
	global $conn;
	//var_dump($data); die;

	$kategori = $data['kategori'];
	$judul = $data['judul'];
	$artikel = $data['a'];
	$tanggal = date('Y-m-d');
	$waktu = date("H:i");
	$time = time();
	$oleh = $data['penulis'];
	$acakIdLink = rand(0, 100);
	$link = strtolower(str_replace(" ", "-", $judul)) . '-' . $acakIdLink;

	if (isset($data['file1b'])) {
		$foto = $data['file1b'];
	} else {
		echo "
            <script>
                alert('Anda tidak mengunggah foto');
            </script>
            ";
		return false;
	}

	if ($data['a'] == '') {
		echo "
				<script>
					alert('Ckeditor bermasalah');
				</script>
				";
		return false;
	}

	$query = "INSERT INTO artikel VALUES (
			'', '$tanggal', '$waktu', '$time', '$oleh', '$judul', '$link', '$kategori', '$artikel', '$foto'
		)";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function tambahAdminWeb($data)
{
	global $conn;

	$kategori = $data['kategori'];
	$nama = $data['nama'];
	$tanggal = $data['tanggal'];
	$hp = $data['hp'];
	$id = $data['id'];
	$password = $data['password'];

	if (isset($data['file1b'])) {
		$foto = $data['file1b'];
	} else {
		echo "
            <script>
                alert('Anda tidak mengunggah foto');
            </script>
            ";
		return false;
	}

	$query = "INSERT INTO admin VALUES (
			'', '$id', '$nama', '$kategori', '$hp', '$tanggal', '$foto', '$password'
		)";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function tambahKadertm1($data)
{
	global $conn;

	$nama = $data['nama'];
	$nisn = $data['nisn'];
	$tanggal = $data['tanggal'];
	$alamat = $data['alamat'];
	$cita = $data['cita'];
	$followup = $data['followup'];
	$ayah = $data['ayah'];
	$pr = $data['pr'];
	$angkatan = $data['angkatan'];
	$pembukaan = $data['pembukaan'];
	$penutupan = $data['penutupan'];
	$syahadah = $data['syahadah'];
	$doa = $data['doa'];
	$arti = $data['arti'];
	$tema = $data['tema'];
	$adminlogin = $data['adminlogin'];

	if (isset($data['file1b'])) {
		$foto = $data['file1b'];
	} else {
		$foto = '';
		echo "
            <script>
                alert('Anda tidak mengunggah foto');
            </script>
            ";
	}

	$query = "INSERT INTO kaderTM1 VALUES (
			'', '$nama', '$nisn', '$tanggal', '$alamat', '$pr', '$cita', '$ayah', '$followup', '$foto', '$syahadah', '$doa', '$arti', '$pembukaan', '$penutupan', '$angkatan', '$tema' , '$adminlogin', ''
		)";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

//Edit data kader tm 1
function editKadertm1($data)
{
	global $conn;
	$id =  $data['id'];

	$nama = $data['nama'];
	$nisn = $data['nisn'];
	$tanggal = $data['tanggal'];
	$alamat = $data['alamat'];
	$cita = $data['cita'];
	$followup = $data['followup'];
	$ayah = $data['ayah'];
	$pr = $data['pr'];
	$syahadah = $data['syahadah'];
	$doa = $data['doa'];
	$arti = $data['arti'];
	$angkatan = $data['angkatan'];
	$pembukaan = $data['pembukaan'];
	$penutupan = $data['penutupan'];
	$arti = $data['arti'];
	$tema = $data['tema'];
	$adminlogin = $data['adminlogin'];

	if (isset($data['file1b'])) {
		$foto = $data['file1b'];
	} else {
		$foto = $data['fotoLama'];
		echo "
            <script>
                alert('Anda tidak mengunggah foto');
            </script>
            ";
	}

	$query = "UPDATE kaderTM1 SET
					nama = '$nama',
					nisn = '$nisn',
					tanggal = '$tanggal',
					alamat = '$alamat',
					pr = '$pr',
					cita = '$cita',
					ayah = '$ayah',
					followup = '$followup',
					syahadah = '$syahadah',
					doa = '$doa',
					arti = '$arti',
					angkatan = '$angkatan',
					tema = '$tema',
					tgl_pembukaan = '$pembukaan',
					tgl_penutupan = '$penutupan',
					edited = '$adminlogin',
					foto = '$foto'
		 		WHERE id = $id";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

//Hapus data ketums dan Artikel
function hapus($target, $id)
{
	global $conn;

	mysqli_query($conn, "DELETE FROM $target WHERE id = $id");
	return mysqli_affected_rows($conn);
}
