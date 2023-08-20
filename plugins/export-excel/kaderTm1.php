<?php
	include 'queryAndFuncExport.php';
	header("Content-disposition: attachment; filename = Kader_TM1".'_'.$date);
	
	require "../configurasi/functionProses.php";
	$kaderTM1 = queries("SELECT * FROM kaderTM1");
?>

<!doctype html>
<html lang="en">
	<head>
	</head>

	<body>
		<h2>
            Databese Kader Pelatihan Kader Dasar Taruna Melati 1
            <?php
                
            ?>
        </h2>

		<table border="1" style="width : 2100px">
            <thead  class="table-danger align-middle" style="text-align: center;">
                <tr class="#">
                    <th rowspan="2" rowspan="2" scope="col">No</th>
                    <th rowspan="2" scope="col">Nama</th>
                    <th rowspan="2" scope="col">NISN</th>
                    <th rowspan="2" scope="col">Tanggal Lahir</th>
                    <th rowspan="2" scope="col">Alamat</th>
                    <th rowspan="2" scope="col">Cita-Cita</th>
                    <th rowspan="2" scope="col">Nama Ayah</th>
                    <th rowspan="2" scope="col">PR IPM</th>
                    <th rowspan="2" scope="col">Tgl Pembukaan TM.1</th>
                    <th rowspan="2" scope="col">Tgl Penutupan TM.1</th>
                    <th rowspan="2" scope="col">Angkatan TM. 1</th>
                    <th rowspan="2" scope="col">Tema TM. 1</th>
                    <th rowspan="2" scope="col">No Syahadah</th>
                    <th colspan="2" scope="col">Bacaan Sholat</th>
                    <th rowspan="2" scope="col">Jumlah Follow Up</th>
                </tr>
                <tr>
                  <th scope="col">Doa</th>
                  <th scope="col">Arti</th>
                </tr>
            </thead>
                
            <tbody>
                <?php
                    $no = 1;
                    foreach ($kaderTM1 as $b) :
                ?>
                    <tr class="align-middle">
                        <td scope="col" class="text-center"><?=$no ?></td>
                        <td scope="col"><?=strtoupper($b['nama']) ?></td>
                        <td scope="col" class="text-center" id="nisn<?=$no ?>">'<?=$b['nisn'] ?></td>
                        <td scope="col">'<?=bulanIndonesia($b['tanggal']) ?></td>
                        <td scope="col"><?=$b['alamat'] ?></td>
                        <td scope="col"><?=$b['cita'] ?></td>
                        <td scope="col"><?=$b['ayah'] ?></td>
                        <td scope="col"><?=$b['pr'] ?></td>
                        <td scope="col">'<?=bulanIndonesia($b['tgl_pembukaan']) ?></td>
                        <td scope="col">'<?=bulanIndonesia($b['tgl_penutupan']) ?></td>
                        <td scope="col"><?=$b['angkatan'] ?></td>
                        <td scope="col"><?=$b['tema'] ?></td>
                        <td scope="col"><?=$b['syahadah'] ?></td>
                        <td scope="col"><?=$b['doa'] ?></td>
                        <td scope="col"><?=$b['arti'] ?></td>
                        <td scope="col" class="text-center"><?=$b['followup'] ?></td>
                    </tr>
                    
                <?php
                    $no++;
                    endforeach;
                ?>
            </tbody>
		</table>
	</body>
</html>


    