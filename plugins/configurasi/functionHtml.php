<?php //sleep(1); 

function adminLogin($nama){
  session_start();
  $idAdmin = $_SESSION['loginAdmin'];
  $return = queries("SELECT * FROM admin WHERE id = '$idAdmin'")[0][$nama];

  return $return;
}

if (isset($_POST['ipmers-1'])) {
  $ktg = '1';
}elseif (isset($_POST['ipmers-2'])) {
  $ktg = '2';
}else{
  $ktg = '3';
}

require "queryAdmin.php";

function ketums($ketums) {
    $a = '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Database Ketum PD IPM Bulukumba</h1>

          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="#" class="btn btn-sm btn-danger"><span data-feather="file"></span>Export PDF</a>
                <a href="#" class="btn btn-sm btn-success"><span data-feather="file-text"></span>Export Excel</a>
            </div>
            <button type="button" id="inputKetums" class="btn btn-sm btn-primary"><span data-feather="user-plus"></span>Tambah Data </button>
          </div>
        </div>

        <main>
            <div class="bg-white border border-dark mb-5" style="overflow-x:auto!important; max-height: 500px">
                <table class="table table-info table-bordered table-striped table-hover" style="width:3500px;">
                    <thead  class="table-danger align-middle" style="text-align: center;">
                        <tr class="#">
                            <th scope="col" rowspan="2">No</th>
                            <th scope="col" rowspan="2">Aksi</th>
                            <th scope="col" rowspan="2">Foto</th>
                            <th scope="col" rowspan="2">Priode</th>
                            <th scope="col" rowspan="2">Nama</th>
                            <th scope="col" rowspan="2">Tempat/ Tgl Lahir</th>
                            <th scope="col" rowspan="2">Alamat</th>
                            <th scope="col" rowspan="2">Pekerjaan</th>
                            <th scope="col" colspan="2">Pendidikan Terakhir</th>
                            <th scope="col" colspan="2">TM. 1</th>
                            <th scope="col" colspan="2">TM. 2</th>
                            <th scope="col" colspan="2">PFP. 1</th>
                            <th scope="col" colspan="2">TM. 3</th>
                            <th scope="col" colspan="2">PFP. 2</th>
                            <th scope="col" colspan="2">TM. U</th>
                            <th scope="col" rowspan="2">Kutipan/ Pesan</th>
                        </tr>
                        <tr>
                            <th>Institisi/ Lembaga</th>
                            <th>Tahun</th>
                            <th>Tempat</th>
                            <th>Tahun</th>
                            <th>Tempat</th>
                            <th>Tahun</th>
                            <th>Tempat</th>
                            <th>Tahun</th>
                            <th>Tempat</th>
                            <th>Tahun</th>
                            <th>Tempat</th>
                            <th>Tahun</th>
                            <th>Tempat</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>';

                    function b1($a){
                        $Bb = [];
                        $no = 1;
                        $click = "('Yakin ki mau hapus i?')";

                        foreach ($a as $b) {
                            $Bb[] = '<tr class="align-middle">
                            <td scope="col" class="text-center">'.$no.'</td>
                            <td scope="col" class="text-center">
                                <a href="?hapus=ketums&id='.$b['id'].'" class="btn btn-sm btn-danger" onclick="return confirm'.$click.'">Hapus</a>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                <a href="#" class="btn btn-sm btn-success">view</a>
                            </td>
                            <td scope="col" class="text-center"><img src="../plugins/inputan-user/foto-ketums/'.$b['foto'].'" width="60"></td>
                            <td scope="col" class="text-center">'.$b['prd'].'</td>
                            <td scope="col">'.$b['nama'].'</td>
                            <td scope="col">'.$b['tempat'].' / '.$b['tanggal'].'</td>
                            <td scope="col">'.$b['alamat'].'</td>
                            <td scope="col">'.$b['pekerjaan'].'</td>
                            <td scope="col">'.$b['pendidikan'].'</td>
                            <td scope="col" class="text-center">'.$b['tahuntamat'].'</td>
                            <td scope="col">'.$b['tm1a'].'</td>
                            <td scope="col" class="text-center">'.$b['tm1b'].'</td>
                            <td scope="col">'.$b['tm2a'].'</td>
                            <td scope="col" class="text-center">'.$b['tm2b'].'</td>
                            <td scope="col">'.$b['pfp1a'].'</td>
                            <td scope="col" class="text-center">'.$b['pfp1b'].'</td>
                            <td scope="col">'.$b['tm3a'].'</td>
                            <td scope="col" class="text-center">'.$b['tm3b'].'</td>
                            <td scope="col">'.$b['pfp2a'].'</td>
                            <td scope="col" class="text-center">'.$b['pfp2b'].'</td>
                            <td scope="col">'.$b['tm3a'].'</td>
                            <td scope="col" class="text-center">'.$b['tm3b'].'</td>
                            <td scope="col">'.$b['pesan'].'</td>
                        </tr>';
                        $no++;
                        }

                        return implode("", $Bb);
                    }

                $c = '</tbody>
                </table>
            </div>
        </main>';

    return $a.b1($ketums).$c;
}

function inputKetums() {
  $th = date('Y');
  $ii = 2;
  $iii = [];

  for ($i=1990; $i < $th; $i=$i+$ii){
      $iii[] = '<option>'.$i.' - '.$a=$i+$ii.'</option>';
  }

  $iv = implode("", $iii);

  return '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" id="idKirim">Tambah Data Ketums</h1>
  </div>

  <form action="" method="post" id="form" class="needs-validation mb-5" novalidate>
    <div class="border border-warning rounded-top p-2">
      <div class="alert alert-danger"> 
        <strong>Data Diri</strong> 	
      </div> 

      <div class="row px-3"> 
        <div class="col-sm-3"> 
          <div class="mb-3">
            <label for="prd" class="form-label">Priodesasi</label>
            <select required class="form-select" name="prd">
              <option value="">Pilih</option>
              '.$iv.'
            </select>      

            <div class="invalid-feedback">
              Ki inputki preodesasinya
            </div>
          </div>
        </div>
        <div class="col-sm-6"> 
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input autocomplete="off" type="" name="nama" class="form-control" id="nama" placeholder="Sesuai dengan KTP" required>
            
            <div class="invalid-feedback">
              Ki inputki nama lengkapnya
            </div>
          </div>
        </div>
        <div class="col-sm-3"> 
          <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input autocomplete="off" type="" name="pekerjaan" class="form-control" id="pekerjaan" required>
            
            <div class="invalid-feedback">
              Ki inputki pekerjaannya
            </div>
          </div>
        </div>
        <div class="col-sm-3"> 
          <div class="mb-3">
            <label for="tempatLahir" class="form-label">Tempat Lahir</label>
            <input autocomplete="off" type="" name="tempat" class="form-control" id="tempatLahir" required>
            
            <div class="invalid-feedback">
              Ki inputki tempat lahirnya
            </div>
          </div>
        </div>
        <div class="col-sm-3"> 
          <div class="mb-3">
            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
            <input autocomplete="off" type="date" name="tanggal" class="form-control" id="tanggalLahir" required>
            
            <div class="invalid-feedback">
              Ki inputki tanggal lahirnya
            </div>
          </div>
        </div>
        <div class="col-sm-6"> 
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input autocomplete="off" type="" name="alamat" class="form-control" id="alamat" placeholder="Desa dan Kecamatan" required>
            
            <div class="invalid-feedback">
              Ki inputki alamatnya
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-warning rounded-top p-2 mt-3">
      <div class="alert alert-danger"> 
        <strong>Data Pendidikan Terakhir</strong> 	
      </div> 

      <div class="row px-3"> 
        <div class="col-sm-8"> 
          <div class="mb-3">
            <label for="pendidikan" class="form-label">Instansi / Lembaga</label>
            <input autocomplete="off" type="" name="pendidikan" class="form-control" id="pendidikan" required>
            
            <div class="invalid-feedback">
              Ki inputki pendidikan terakhirnya
            </div>
          </div>
        </div>
        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="tahunTamat" class="form-label">Tahun Tamat</label>
            <input autocomplete="off" type="" name="tahunTamat" class="form-control" id="tahunTamat" required>
            
            <div class="invalid-feedback">
              Ki inputki tahun tamatnya
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-warning rounded-top p-2 mt-3">
      <div class="alert alert-danger"> 
        <strong>Jenjang perkaderan di IPM</strong> 	
      </div> 

      <div class="row px-3"> 
        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="tm1a" class="form-label">Tempat TM.1</label>
            <input autocomplete="off" type="" name="tm1a" class="form-control" id="tm1a" required>
            
            <div class="invalid-feedback">
              Ki inputki tempatnya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="tm1b" class="form-label">Tahun TM.1</label>
            <input autocomplete="off" type="year" name="tm1b" class="form-control" id="tm1b" required>
            
            <div class="invalid-feedback">
              Ki inputki tahunnya
            </div>
          </div>
        </div>

        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="tm2a" class="form-label">Tempat TM.2</label>
            <input autocomplete="off" type="" name="tm2a" class="form-control" id="tm2a" required>
            
            <div class="invalid-feedback">
              Ki inputki tempatnya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="tm2b" class="form-label">Tahun TM.2</label>
            <input autocomplete="off" type="year" name="tm2b" class="form-control" id="tm2b" required>
            
            <div class="invalid-feedback">
              Ki inputki tahunnya
            </div>
          </div>
        </div>

        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="pfp1a" class="form-label">Tempat PFP.1</label>
            <input autocomplete="off" type="" name="pfp1a" class="form-control" id="pfp1a" required>
            
            <div class="invalid-feedback">
              Ki inputki tempatnya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="pfp1b" class="form-label">Tahun PFP.1</label>
            <input autocomplete="off" type="year" name="pfp1b" class="form-control" id="pfp1b" required>
            
            <div class="invalid-feedback">
              Ki inputki tahunnya
            </div>
          </div>
        </div>

        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="tm3a" class="form-label">Tempat TM.3</label>
            <input autocomplete="off" type="" name="tm3a" class="form-control" id="tm3a" required>
            
            <div class="invalid-feedback">
              Ki inputki tempatnya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="tm3b" class="form-label">Tahun TM.3</label>
            <input autocomplete="off" type="year" name="tm3b" class="form-control" id="tm3b" required>
            
            <div class="invalid-feedback">
              Ki inputki tahunnya
            </div>
          </div>
        </div>

        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="pfp2a" class="form-label">Tempat PFP.2</label>
            <input autocomplete="off" type="" name="pfp2a" class="form-control" id="pfp2a" required>
            
            <div class="invalid-feedback">
              Ki inputki tempatnya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="pfp2b" class="form-label">Tahun PFP.2</label>
            <input autocomplete="off" type="year" name="pfp2b" class="form-control" id="pfp2b" required>
            
            <div class="invalid-feedback">
              Ki inputki tahunnya
            </div>
          </div>
        </div>

        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="tmua" class="form-label">Tempat TM.U</label>
            <input autocomplete="off" type="" name="tmua" class="form-control" id="tmua" required>
            
            <div class="invalid-feedback">
              Ki inputki tempatnya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="tmub" class="form-label">Tahun TM.U</label>
            <input autocomplete="off" type="year" name="tmub" class="form-control" id="tmub" required>
            
            <div class="invalid-feedback">
              Ki inputki tahunnya
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="border border-warning rounded-top p-2 mt-3">
          <div class="alert alert-danger"> 
            <strong>Pesan / Kutipan</strong> 	
          </div> 
          <label for="tmub" class="form-label">Pesan untuk kepemimpinan IPM sekarang </label>
          <div class="form-floating">
            <textarea name="pesan" cols="100%" rows="300" class="form-control">
            </textarea>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="bg-white mb-3 mt-3 p-2 border border-warning rounded-top"> 
          <div class="alert alert-danger">
            <strong>Unggah Foto</strong>
          </div> 
          <div class="form-group px-2">
            <input type="file" name="file1a" id="file1" class="form-control p-1">		
          </div> 				
              
          <div id="uploaded_image1" height="82" width="157" class="text-center">
            <img src="../plugins/assets/images/alt-img.jpg" height="80" width="155" class="mt-2 img-thumbnail">
          </div>						
        </div>
      </div>
    </div>

    <div class="p-2 mt-3">
      <button type="submit" class="btn btn-primary tambah" name="tambahKetums">Submit</button>
    </div>
  </form>
    ';
}

function struktur($struktur) {
  $a = '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Database Struktur PD IPM Bulukumba</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
              <a href="#" class="btn btn-sm btn-danger"><span data-feather="file"></span>Export PDF</a>
              <a href="#" class="btn btn-sm btn-success"><span data-feather="file-text"></span>Export Excel</a>
          </div>
          <button type="button" id="inputStruktur" class="btn btn-sm btn-primary"><span data-feather="user-plus"></span>Tambah Data </button>
        </div>
      </div>

      <main>
          <div class="bg-white border border-dark mb-5" style="overflow-x:auto!important; max-height: 500px">
              <table class="table table-info table-bordered table-striped table-hover" style="width:4000px;">
                  <thead  class="table-danger align-middle" style="text-align: center;">
                      <tr class="#">
                          <th scope="col" rowspan="2">No</th>
                          <th scope="col" rowspan="2">Aksi</th>
                          <th scope="col" rowspan="2">Foto</th>
                          <th scope="col" rowspan="2">Nama</th>
                          <th scope="col" rowspan="2">Amanah</th>
                          <th scope="col" rowspan="2">No Hp (WA)</th>
                          <th scope="col" rowspan="2">Tempat/ Tgl Lahir</th>
                          <th scope="col" rowspan="2">Alamat</th>
                          <th scope="col" rowspan="2">Pekerjaan</th>
                          <th scope="col" colspan="3">Jenjang Pengkaderan Terakhir</th>
                          <th scope="col" colspan="2">SD</th>
                          <th scope="col" colspan="2">SLTP</th>
                          <th scope="col" colspan="2">SLTA</th>
                          <th scope="col" colspan="2">ST/ UNIV.</th>
                          <th scope="col" rowspan="2">Kutipan/ Pesan</th>
                      </tr>
                      <tr>
                          <th>Jenjang</th>
                          <th>Tempat</th>
                          <th>Tahun</th>
                          <th>Instansi/ Lembaga</th>
                          <th>Tahun</th>
                          <th>Instansi/ Lembaga</th>
                          <th>Tahun</th>
                          <th>Instansi/ Lembaga</th>
                          <th>Tahun</th>
                          <th>Instansi/ Lembaga</th>
                          <th>Tahun</th>
                      </tr>
                  </thead>
                  <tbody>';

                  function b2($a){
                      $Bb = [];
                      $no = 1;
                      $click = "('Yakin ki mau hapus i?')";

                      foreach ($a as $b) {
                          $Bb[] = '<tr class="align-middle">
                          <td scope="col" class="text-center">'.$no.'</td>
                          <td scope="col" class="text-center">
                              <a href="?hapus=struktur&id='.$b['id'].'" class="btn btn-sm btn-danger" onclick="return confirm'.$click.'">Hapus</a>
                              <a href="#" class="btn btn-sm btn-warning">Edit</a>
                              <a href="#" class="btn btn-sm btn-success">view</a>
                          </td>
                          <td scope="col"><img src="../plugins/inputan-user/struktur/'.$b['foto'].'" width="60"></td>
                          <td scope="col">'.$b['nama'].'</td>
                          <td scope="col">'.$b['amanah'].'</td>
                          <td scope="col">'.$b['hp'].'</td>
                          <td scope="col">'.$b['tempat'].' / '.bulanIndonesia($b['tanggal']).'</td>
                          <td scope="col">'.$b['alamat'].'</td>
                          <td scope="col">'.$b['pekerjaan'].'</td>
                          <td scope="col">'.$b['jenjangPengkaderan'].'</td>
                          <td scope="col" class="text-center">'.$b['tempatJp'].'</td>
                          <td scope="col">'.$b['tahunJp'].'</td>
                          <td scope="col" class="text-center">'.$b['sda'].'</td>
                          <td scope="col">'.$b['sdb'].'</td>
                          <td scope="col" class="text-center">'.$b['sltpa'].'</td>
                          <td scope="col">'.$b['sltpb'].'</td>
                          <td scope="col" class="text-center">'.$b['sltaa'].'</td>
                          <td scope="col">'.$b['sltab'].'</td>
                          <td scope="col" class="text-center">'.$b['sta'].'</td>
                          <td scope="col">'.$b['stb'].'</td>
                          <td scope="col" class="text-center">'.$b['pesan'].'</td>
                      </tr>';
                      $no++;
                      }

                      return implode("", $Bb);
                  }

              $c = '</tbody>
              </table>
          </div>
      </main>';

  return $a.b2($struktur).$c;
}

function inputStruktur() {
  return '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" id="idKirim">Tambah Data Struktur PD IPM Bulukumba</h1>
  </div>

  <form action="" method="post" id="form" class="needs-validation mb-5" novalidate>
    <div class="border border-warning rounded-top p-2">
      <div class="alert alert-danger"> 
        <strong>Data Diri</strong> 	
      </div> 

      <div class="row px-3"> 
        <div class="col-sm-3"> 
          <div class="mb-3">
            <label for="prd" class="form-label">Amanah</label>
            <select required class="form-select" name="amanah" id="prd">
              <option value="">Pilih</option>
              <option>Ketua Umum</option>
              <option>Sekretaris Umum</option>
              <option>Bendahara Umum</option>

              <option>Ketua Bidang Organisasi</option>
              <option>Sekretaris Bidang Organisasi</option>
              <option>Anggota Bidang Organisasi</option>

              <option>Ketua Bidang Perkaderan</option>
              <option>Sekretaris Bidang Perkaderan</option>
              <option>Anggota Bidang Perkaderan</option>

              <option>Ketua Bidang KDI</option>
              <option>Sekretaris Bidang KDI</option>
              <option>Anggota Bidang KDI</option>

              <option>Ketua Bidang PIP</option>
              <option>Sekretaris Bidang PIP</option>
              <option>Anggota Bidang PIP</option>

              <option>Ketua Bidang ASBO</option>
              <option>Sekretaris Bidang ASBO</option>
              <option>Anggota Bidang ASBO</option>

              <option>Ketua Bidang Advokasi</option>
              <option>Sekretaris Bidang Advokasi</option>
              <option>Anggota Bidang Advokasi</option>

              <option>Ketua Bidang PKK</option>
              <option>Sekretaris Bidang PKK</option>
              <option>Anggota Bidang PKK</option>

              <option>Ketua Bidang IPMawati</option>
              <option>Sekretaris Bidang IPMawati</option>
              <option>Anggota Bidang IPMawati</option>

              <option>Bendahara 1</option>
              <option>Bendahara 2</option>
            </select>      

            <div class="invalid-feedback">
              Ki inputki amanahnya
            </div>
          </div>
        </div>

        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input autocomplete="off" type="" name="nama" class="form-control" id="nama" placeholder="Sesuai dengan KTP" required>

            <div class="invalid-feedback">
              Ki inputki nama lengkapnya
            </div>
          </div>
        </div>

        <div class="col-sm-3"> 
          <div class="mb-3">
            <label for="tempatLahir" class="form-label">Tempat Lahir</label>
            <input autocomplete="off" type="" name="tempat" class="form-control" id="tempatLahir" required>
            
            <div class="invalid-feedback">
              Ki inputki tempat lahirnya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
            <input autocomplete="off" type="date" name="tanggal" class="form-control" id="tanggalLahir" required>
            
            <div class="invalid-feedback">
              Ki inputki tanggal lahirnya
            </div>
          </div>
        </div>

        <div class="col-sm-3"> 
          <div class="mb-3">
            <label for="hp" class="form-label">No Hp (WA)</label>
            <input autocomplete="off" type="" name="hp" class="form-control" id="hp" required>
            
            <div class="invalid-feedback">
              Ki inputki no hp nya
            </div>
          </div>
        </div>

        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input autocomplete="off" type="" name="pekerjaan" class="form-control" id="pekerjaan" required>
            
            <div class="invalid-feedback">
              Ki inputki pekerjaannya
            </div>
          </div>
        </div>

        <div class="col-sm-5"> 
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input autocomplete="off" type="" name="alamat" class="form-control" id="alamat" placeholder="Desa dan Kecamatan" required>
            
            <div class="invalid-feedback">
              Ki inputki alamatnya
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-warning rounded-top p-2 mt-3">
      <div class="alert alert-danger"> 
        <strong>Jenjang Pengkaderan Terakhir</strong> 	
      </div> 

      <div class="row px-3"> 
        <div class="col-sm-8 offset-sm-2"> 
          <div class="mb-3">
            <label for="prd" class="form-label">Jenjang</label>
            <select required class="form-select" name="jenjang">
              <option value="">Pilih</option>
              <option>TM. 1</option>
              <option>TM. 2</option>
              <option>PFP. 1</option>
              <option>TM. 3</option>
              <option>PFP. 2</option>
              <option>TM. U</option>
            </select>      

            <div class="invalid-feedback">
              Ki inputki jenjangnya
            </div>
          </div>
        </div>

        <div class="col-sm-6 offset-sm-1"> 
          <div class="mb-3">
            <label for="tempat" class="form-label">Tempat</label>
            <input autocomplete="off" type="" name="tempatjp" class="form-control" id="tempat" required>
            
            <div class="invalid-feedback">
              Ki inputki tempatnya
            </div>
          </div>
        </div>
        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input autocomplete="off" type="" name="tahunjp" class="form-control" id="tahun" required>
            
            <div class="invalid-feedback">
              Ki inputki tahunnya
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-warning rounded-top p-2 mt-3">
      <div class="alert alert-danger"> 
        <strong>Pendidikan</strong> 	
      </div> 

      <div class="row px-3"> 
        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="sda" class="form-label">Nama Instansi SD/ MI</label>
            <input autocomplete="off" type="" name="sda" class="form-control" id="sda" required>
            
            <div class="invalid-feedback">
              Ki inputki Nama Instansinya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="sdb" class="form-label">Tahun Tamat SD/ MI</label>
            <input autocomplete="off" type="year" name="sdb" class="form-control" id="sdb" required>
            
            <div class="invalid-feedback">
              Ki inputki tahun tamatnya
            </div>
          </div>
        </div>

        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="sltpa" class="form-label">Nama Instansi SLTP</label>
            <input autocomplete="off" type="" name="sltpa" class="form-control" id="sltpa" required>
            
            <div class="invalid-feedback">
              Ki inputki Nama Instansinya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="sltpb" class="form-label">Tahun Tamat SLTP</label>
            <input autocomplete="off" type="year" name="sltpb" class="form-control" id="sltpb" required>
            
            <div class="invalid-feedback">
              Ki inputki tahun tamatnya
            </div>
          </div>
        </div>

        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="sltaa" class="form-label">Nama Instansi SLTA</label>
            <input autocomplete="off" type="" name="sltaa" class="form-control" id="sltaa" required>
            
            <div class="invalid-feedback">
              Ki inputki Nama Instansinya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="sltab" class="form-label">Tahun Tamat SLTA</label>
            <input autocomplete="off" type="year" name="sltab" class="form-control" id="sltab" required>
            
            <div class="invalid-feedback">
              Ki inputki tahun tamatnya
            </div>
          </div>
        </div>

        <div class="col-sm-4"> 
          <div class="mb-3">
            <label for="sta" class="form-label">Nama Instansi ST/ UNIV.</label>
            <input autocomplete="off" type="" name="sta" class="form-control" id="sta" required>
            
            <div class="invalid-feedback">
              Ki inputki Nama Instansinya
            </div>
          </div>
        </div>
        <div class="col-sm-2"> 
          <div class="mb-3">
            <label for="stb" class="form-label">Tahun Tamat ST/ UNIV.</label>
            <input autocomplete="off" type="year" name="stb" class="form-control" id="stb" required>
            
            <div class="invalid-feedback">
              Ki inputki tahun tamatnya
            </div>
          </div>
        </div>
       
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="border border-warning rounded-top p-2 mt-3">
          <div class="alert alert-danger"> 
            <strong>Pesan / Kutipan</strong> 	
          </div> 
          <label for="tmub" class="form-label">Pesan untuk kepemimpinan IPM sekarang </label>
          <div class="form-floating">
            <textarea name="pesan" cols="100%" rows="300" class="form-control">
            </textarea>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="bg-white mb-3 mt-3 p-2 border border-warning rounded-top"> 
          <div class="alert alert-danger">
            <strong>Unggah Foto</strong>
          </div> 
          <div class="form-group px-2">
            <input type="file" name="file1a" id="file1" class="form-control p-1">		
          </div> 				
              
          <div id="uploaded_image1" height="82" width="157" class="text-center">
            <img src="../plugins/assets/images/alt-img.jpg" height="80" width="155" class="mt-2 img-thumbnail">
          </div>						
        </div>
      </div>
    </div>

    <div class="p-2 mt-3">
      <button type="submit" class="btn btn-primary tambah" name="tambahPimpinan">Submit</button>
    </div>
  </form>
  ';
}

function tblIpmers($kategori, $h2) {
  $a = '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">'.$h2.'</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
              <a href="#" class="btn btn-sm btn-danger"><span data-feather="file"></span>Export PDF</a>
              <a href="#" class="btn btn-sm btn-success"><span data-feather="file-text"></span>Export Excel</a>
          </div>
          <button type="button" class="btn btn-sm btn-primary"><span data-feather="user-plus"></span>Tambah Data </button>
        </div>
      </div>

      <main>
          <div class="bg-white border border-dark mb-5" style="overflow-x:auto!important; max-height: 500px">
              <table class="table table-info table-bordered table-striped table-hover" style="width:100%">
                  <thead  class="table-danger align-middle" style="text-align: center;">
                      <tr class="#">
                          <th scope="col">No</th>
                          <th scope="col" style="width:170px">Aksi</th>
                          <th scope="col" style="width:110px">Tanggal</th>
                          <th scope="col">Waktu</th>
                          <th scope="col">Judul</th>
                          <th scope="col">Foto</th>
                          <th scope="col" style="width:130px">Oleh</th>
                          </tr>
                  </thead>
                  <tbody>';
                  
                  //<td scope="col">'.substr($b['artikel'], 0, 300).'</td>

                  function bb($kategori){
                      $Bb = [];
                      $no = 1;
                      $click = "('Yakin ki mau hapus i?')";

                      foreach ($kategori as $b) {
                          $Bb[] = '<tr>
                          <td scope="col" class="text-center align-middle">'.$no.'</td>
                          <td scope="col" class="text-center align-middle">
                              <a href="?hapus=artikel&id='.$b['id'].'" class="btn btn-sm btn-danger mt-2" onclick="return confirm'.$click.'">Hapus</a>
                              <a href="#" class="btn btn-sm btn-warning mt-2">Edit</a> <br>
                              <a target="_blank" href="../nuun-panrita-lopi?ipmers='.$b['link'].'" class="btn btn-sm btn-success mt-2">view</a>
                              <a href="#" class="btn btn-sm btn-secondary mt-2">Copy Link</a>
                          </td>
                          <td scope="col" class="text-center align-middle">'.bulanIndonesia($b['tanggal']).'</td>
                          <td scope="col" class="text-center align-middle">'.$b['waktu'].'</td>
                          <td scope="col" class="align-middle">'.$b['judul'].'</td>
                          <td scope="col" class="text-center align-middle"><img src="../plugins/inputan-user/artikel/'.$b['foto'].'" height="90"></td>
                          <td scope="col" class="text-center align-middle">'.$b['oleh'].'</td>
                      </tr>';
                      $no++;
                      }

                      return implode("", $Bb);
                  }

              $c = '</tbody>
              </table>
          </div>
      </main>';

  return $a.bb($kategori).$c;
}

function addArtikel($adminPenulis) {
  return '
      <form action="" class="mt-1" method="post">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2" id="idKirim">Tambah Artikel IPMers</h1>

              <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group me-2">
                      <button type="button" class="btn btn-sm btn-primary"><span data-feather="file"></span>V i e w</button>
                      <button type="button" class="btn btn-sm btn-secondary"><span data-feather="file-text"></span>Copy Link</button>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-9">
                  <div class="mb-3">
                    <input autocomplete="off" type="" name="judul" class="form-control" id="judul" placeholder="Judul Artikel" required>
                  </div>
                  <textarea name="a" id="a"><br><br><br><br><br><br><br><br><br><br></textarea> 
              </div>
              <div class="col-md-3">
                  <select required class="form-select mt-2" name="kategori">
                      <option value="">Kategori</option>
                      <option value="1">IPM News</option>
                      <option value="2">Opini Pelajar</option>
                      <option value="3">IPMers` Works</option>
                  </select>

                  <select required class="form-select mt-1" name="penulis" id="nama">
                      <option value="">Penulis</option>
                      <option>El-Media Nuun Panrita Lopi</option>
                      <option>'.$adminPenulis.'</option>
                  </select>

                  <div class="bg-white mb-3 mt-3 p-2 border border-secondary rounded-top"> 
                  <div class="alert alert-danger">
                    <strong>Unggah Foto</strong>
                  </div> 
                  <div class="form-group px-2">
                    <input type="file" name="file1a" id="file1" class="form-control p-1">		
                  </div> 				
                      
                  <div id="uploaded_image1" height="82" width="157" class="text-center">
                    <img src="../plugins/assets/images/alt-img.jpg" height="80" width="155" class="mt-2 img-thumbnail">
                  </div>						
                </div>
              </div>
          </div>

          <button class="btn btn-warning mt-3" type="submit" name="artikel">submit</button>
      </form>
  ';
}

function tabelAdminWeb($adminWeb) {
  $a = '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tabel Admin <i>Web Nuun Panrita Lopi</i></h1>

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
              <a href="#" class="btn btn-sm btn-danger"><span data-feather="file"></span>Export PDF</a>
              <a href="#" class="btn btn-sm btn-success"><span data-feather="file-text"></span>Export Excel</a>
          </div>
          <button type="button" id="inputAdminWeb" class="btn btn-sm btn-primary"><span data-feather="user-plus"></span>Tambah Data </button>
        </div>
      </div>

      <main>
          <div class="bg-white border border-dark mb-5" style="overflow-x:auto!important; max-height: 500px">
              <table class="table table-info table-bordered table-striped table-hover" style="width:100%;">
                  <thead  class="table-danger align-middle" style="text-align: center;">
                      <tr class="#">
                          <th scope="col">No</th>
                          <th scope="col">Aksi</th>
                          <th scope="col">Foto</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Kategori</th>
                          <th scope="col">Tanggal Lahir</th>
                          <th scope="col">No Hp</th>
                          <th scope="col">ID Admin</th>
                          <th scope="col">Password</th>
                      </tr>
                  </thead>
                  <tbody>';

                  function b3($a){
                      $Bb = [];
                      $no = 1;

                      foreach ($a as $b) {
                          $Bb[] = '<tr class="align-middle">
                          <td scope="col" class="text-center">'.$no.'</td>
                          <td scope="col" class="text-center"><input type="checkbox" value="'.$b['id'].'"></td>
                          <td scope="col"><img src="../plugins/inputan-user/admin/'.$b['foto'].'" width="60"></td>
                          <td scope="col">'.$b['nama'].'</td>
                          <td scope="col"  class="text-center">'.$b['kategori'].'</td>
                          <td scope="col">'.bulanIndonesia($b['tanggalLahir']).'</td>
                          <td scope="col">'.$b['noHp'].'</td>
                          <td scope="col">'.$b['idAdmin'].'</td>
                          <td scope="col">'.$b['password'].'</td>
                      </tr>';
                      $no++;
                      }

                      return implode("", $Bb);
                  }

              $c = '</tbody>
              </table>
            </div>
          <button class="btn btn-sm btn-danger">Hapus</button>
      </main>';

  return $a.b3($adminWeb).$c;
}

function inputAdminWeb() {
  return '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" id="idKirim">Tambah Admin Web Nuun Panrita Lopi</h1>
  </div>

  <form action="" method="post" id="form" class="needs-validation mb-5" novalidate>
    <div class="row">
      <div class="col-md-9">
        <div class="bg-white mb-3 mt-3 p-2 border border-warning rounded-top"> 
          <div class="alert alert-danger">
            <strong>Data Diri</strong>
          </div> 

          <div class="row">
            <div class="col-sm-4"> 
              <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select required class="form-select" name="kategori" id="kategori">
                  <option value="">Pilih</option>
                  <option>Developer</option>
                  <option>Bider</option>
                  <option>IPMers Work</option>
                  <option>Jurnalist</option>
                </select>      

                <div class="invalid-feedback">
                  Ki inputki amanahnya
                </div>
              </div>
            </div>

            <div class="col-sm-5"> 
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input autocomplete="off" type="" name="nama" class="form-control" id="nama" placeholder="Sesuai dengan KTA" required>

                <div class="invalid-feedback">
                  Ki inputki nama lengkapnya
                </div>
              </div>
            </div>

            <div class="col-sm-3"> 
              <div class="mb-3">
                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                <input autocomplete="off" type="date" name="tanggal" class="form-control" id="tanggalLahir" required>
                
                <div class="invalid-feedback">
                  Ki inputki tanggal lahirnya
                </div>
              </div>
            </div>

            <div class="col-sm-4"> 
              <div class="mb-3">
                <label for="hp" class="form-label">No Hp (WA)</label>
                <input autocomplete="off" type="" name="hp" class="form-control" id="hp" required>
                
                <div class="invalid-feedback">
                  Ki inputki no hp nya
                </div>
              </div>
            </div>

            <div class="col-sm-4"> 
              <div class="mb-3">
                <label for="id" class="form-label">ID Admin</label>
                <input autocomplete="off" type="" name="id" class="form-control" id="id" required>
                
                <div class="invalid-feedback">
                  Ki inputki ID Adminnya
                </div>
              </div>
            </div>

            <div class="col-sm-4"> 
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input autocomplete="off" type="" name="password" class="form-control" id="password" placeholder="Desa dan Kecamatan" required>
                
                <div class="invalid-feedback">
                  Ki inputki passwordnya
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="bg-white mb-3 mt-3 p-2 border border-warning rounded-top"> 
          <div class="alert alert-danger">
            <strong>Unggah Foto</strong>
          </div> 
          <div class="form-group px-2">
            <input type="file" name="file1a" id="file1" class="form-control p-1">		
          </div> 				
              
          <div id="uploaded_image1" height="82" width="157" class="text-center">
            <img src="../plugins/assets/images/alt-img.jpg" height="80" width="155" class="mt-2 img-thumbnail">
          </div>						
        </div>
      </div>
    </div>

    <div class="p-2 mt-3">
      <button type="submit" class="btn btn-primary tambah" name="tambahAdminWeb">Submit</button>
    </div>
  </form>
  ';
}

function tabelKaderTM1($KaderTM1, $optionPRout, $optionAnkOut, $optionFlwOut) {

  $a = '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tabel Kader TM.1</i></h1>

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
              <a href="#" class="btn btn-sm btn-danger"><span data-feather="file"></span>Export PDF</a>
              <a href="../plugins/export-excel/kaderTm1.php" class="btn btn-sm btn-success"><span data-feather="file-text"></span>Export Excel</a>
          </div>
          <button type="button" id="inputKaderTM1" class="btn btn-sm btn-primary"><span data-feather="user-plus"></span>Tambah Data </button>
        </div>
      </div>

      <main>
        <div class="row">
          <div class="col-sm-3">
            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
              <option selected>Semua Pengelola</option>
              '.$optionPRout.'
            </select>
          </div>

          <div class="col-sm-3">
            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
              <option selected>Semua Angkatan</option>
              '.$optionAnkOut.'
            </select>
          </div>

          <div class="col-sm-3">
            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
              <option selected>Semua Follow Up</option>
              '.$optionFlwOut.'
            </select>
          </div>
        </div>
        <div class="bg-white border border-dark mb-5" style="overflow-x:auto!important; max-height: 500px">
              <table class="table table-info table-bordered table-striped table-hover" style="width:2300px;">
                <thead  class="table-danger align-middle" style="text-align: center;">
                    <tr class="#">
                        <th rowspan="2" rowspan="2" scope="col">No</th>
                        <th rowspan="2" scope="col">Aksi</th>
                        <th rowspan="2" scope="col">Foto</th>
                        <th rowspan="2" scope="col">Nama</th>
                        <th rowspan="2" scope="col">NISN</th>
                        <th rowspan="2" scope="col">Tanggal Lahir</th>
                        <th rowspan="2" scope="col">Alamat</th>
                        <th rowspan="2" scope="col">Cita-Cita</th>
                        <th rowspan="2" scope="col">Nama Ayah</th>
                        <th rowspan="2" scope="col">PR IPM</th>
                        <th rowspan="2" scope="col">Tgl Pembukaan TM. 1</th>
                        <th rowspan="2" scope="col">Tgl Penutupan TM. 1</th>
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
                <tbody>';

                function b4($a){
                    $Bb = [];
                    $no = 1;

                    foreach ($a as $b) {
                        $Bb[] = '<tr class="align-middle">
                        <td scope="col" class="text-center">'.$no.'</td>
                        <td scope="col" class="text-center">
                          <a href="?hapus=kaderTM1&id='.$b['id'].'" class="btn btn-sm btn-danger">Hapus</a> <br>
                          <a href="#" class="btn-edit btn btn-sm btn-warning mt-2" title="'.$b['id'].'">Edit</a> 
                        </td>
                        <td scope="col"><img src="../plugins/inputan-user/tm1/'.$b['foto'].'" width="60"></td>
                        <td scope="col">'.$b['nama'].'</td>
                        <td scope="col" class="text-center" id="nisn'.$no.'">'.$b['nisn'].'</td>
                        <td scope="col">'.bulanIndonesia($b['tanggal']).'</td>
                        <td scope="col">'.$b['alamat'].'</td>
                        <td scope="col">'.$b['cita'].'</td>
                        <td scope="col">'.$b['ayah'].'</td>
                        <td scope="col">'.$b['pr'].'</td>
                        <td scope="col">'.bulanIndonesia($b['tgl_pembukaan']).'</td>
                        <td scope="col">'.bulanIndonesia($b['tgl_penutupan']).'</td>
                        <td scope="col" class="text-center">'.$b['angkatan'].'</td>
                        <td scope="col">'.$b['tema'].'</td>
                        <td scope="col">'.$b['syahadah'].'</td>
                        <td scope="col">'.$b['doa'].'</td>
                        <td scope="col">'.$b['arti'].'</td>
                        <td scope="col" class="text-center">'.$b['followup'].'</td>
                    </tr>';
                    $no++;
                    }

                    return implode("", $Bb);
                }

            $c = '</tbody>
            </table>
          </div>
      </main>';

  return $a.b4($KaderTM1).$c;
}

function inputKaderTM1($jikaAdaEdit) {

  if (isset($jikaAdaEdit)) {
    $fotoLama = $jikaAdaEdit['foto'];
    $aaa = 'Edit Kader TM. 1';
    $aa = $jikaAdaEdit['id'];
    $a = $jikaAdaEdit['nama'];
    $b = $jikaAdaEdit['nisn']; 
    $c = $jikaAdaEdit['tanggal']; 
    $d = $jikaAdaEdit['alamat'];
    $e = $jikaAdaEdit['cita']; 
    $f = $jikaAdaEdit['ayah']; 
    $g = $jikaAdaEdit['pr']; 
    $h = $jikaAdaEdit['syahadah']; 
    $i = $jikaAdaEdit['followup']; 
    $n = "EditKadertm1";
    $o = "../plugins/inputan-user/tm1/".$jikaAdaEdit['foto'];
    $p1 = $jikaAdaEdit['tgl_pembukaan']; 
    $p2 = $jikaAdaEdit['tgl_penutupan']; 
    $q = $jikaAdaEdit['angkatan']; 
    $tema = $jikaAdaEdit['tema']; 

    if ( $jikaAdaEdit['doa']  == "Belum Tuntas") {
      $j = 'selected="selected"';
      $k = null;
    } elseif ( $jikaAdaEdit['doa']  == "Tuntas") {
      $k = 'selected="selected"';
      $j = null;
    }
    
    if ( $jikaAdaEdit['arti']  == "Belum Tuntas") {
      $l = 'selected="selected"';
      $m = null;
    } elseif ( $jikaAdaEdit['arti']  == "Tuntas") {
      $m = 'selected="selected"';
      $l = null;
    }
  } else {
    $fotoLama = null ;
    $aaa = 'Tambah Kader TM. 1' ;
    $aa = null ;
    $a = null ;
    $b = null;           
    $c = null;
    $d = null;
    $e = null;
    $f = null;
    $g = null;
    $h = null;
    $i = null;
    $j = null;
    $k = null;
    $l = null;
    $m = null;
    $n = "tambahKadertm1";
    $o = "../plugins/assets/images/alt-img.jpg";
    $p1 = null;
    $p2 = null;
    $q = null;
    $tema = null;
  }
  
  return '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" id="idKirim">'.$aaa.'</h1>
  </div> 

  <form action="" method="post" id="form" class="needs-validation mb-5" novalidate>
    <div class="row">
      <div class="col-md-9">
        <div class="bg-white mb-3 mt-3 p-2 border border-warning rounded-top"> 
          <div class="alert alert-danger">
            <strong>Data Diri</strong>
          </div> 
          
          <div class="row">
            <div class="col-sm-4"> 
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input value="'.$fotoLama.'" type="hidden" name="fotoLama">
                <input value="'.adminLogin("nama").'" type="hidden" name="adminlogin">
                <input value="'.$aa.'" type="hidden" name="id">
                <input value="'.$a.'" autocomplete="off" type="" name="nama" class="form-control" id="nama" placeholder="Sesuai dengan Ijazah" required>

                <div class="invalid-feedback">
                  Ki inputki nama lengkapnya
                </div>
              </div>
            </div>

            <div class="col-sm-4"> 
              <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input value="'.$b.'" autocomplete="off" type="" name="nisn" class="form-control" id="nisn" placeholder="Sesuai dengan Ijazah" required>

                <div class="invalid-feedback">
                  Ki inputki nisnnya
                </div>
              </div>
            </div>

            <div class="col-sm-4"> 
              <div class="mb-3">
                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                <input value="'.$c.'" autocomplete="off" type="date" name="tanggal" class="form-control" id="tanggalLahir" required>
                
                <div class="invalid-feedback">
                  Ki inputki tanggal lahirnya
                </div>
              </div>
            </div>

            <div class="col-sm-4"> 
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input value="'.$d.'" autocomplete="off" type="" name="alamat" class="form-control" id="alamat" required>
                
                <div class="invalid-feedback">
                  Ki inputki no alamat nya
                </div>
              </div>
            </div>

            <div class="col-sm-4"> 
              <div class="mb-3">
                <label for="cita" class="form-label">Cita-Cita</label>
                <input value="'.$e.'" autocomplete="off" type="" name="cita" class="form-control" id="cita" required>
                
                <div class="invalid-feedback">
                  Ki inputki Cita-Citanya
                </div>
              </div>
            </div>

            <div class="col-sm-4"> 
              <div class="mb-3">
                <label for="ayah" class="form-label">Nama Ayah</label>
                <input value="'.$f.'" autocomplete="off" type="" name="ayah" class="form-control" id="ayah" placeholder="Desa dan Kecamatan" required>
                
                <div class="invalid-feedback">
                  Ki inputki Nama Ayahnya
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white mb-3 mt-3 p-2 border border-warning rounded-top"> 
        <div class="alert alert-danger">
          <strong>Data IPMers</strong>
        </div> 

        <div class="row">
          <div class="col-sm-4"> 
            <div class="mb-3">
              <label for="pr" class="form-label">PR IPM (Pelaksana TM.1)</label>
              <input value="'.$g.'" autocomplete="off" type="" name="pr" class="form-control" id="pr" placeholder="Pelaksana TM.1" required>

              <div class="invalid-feedback">
                Ki inputki PR IPMnya
              </div>
            </div>
          </div>

          <div class="col-sm-4"> 
            <div class="mb-3">
              <label for="pembukaan" class="form-label">Tgl. Pembukaan TM.1</label>
              <input value="'.$p1.'" autocomplete="off" type="date" name="pembukaan" class="form-control" id="pembukaan" placeholder="Berdasarkan penutupan TM.1" required>

              <div class="invalid-feedback">
                Ki inputki tgl pembukaannya
              </div>
            </div>
          </div>

          <div class="col-sm-4"> 
            <div class="mb-3">
              <label for="penutupan" class="form-label">Tgl. Penutupan TM.1</label>
              <input value="'.$p2.'" autocomplete="off" type="date" name="penutupan" class="form-control" id="penutupan" placeholder="Berdasarkan penutupan TM.1" required>

              <div class="invalid-feedback">
                Ki inputki No penutupan
              </div>
            </div>
          </div>

          <div class="col-sm-2"> 
            <div class="mb-3">
              <label for="angkatan" class="form-label">Angkatan</label>
              <input placeholder="Isi dengan angka romawi" value="'.$q.'" autocomplete="off" type="" name="angkatan" class="form-control" id="angkatan" required>

              <div class="invalid-feedback">
                Ki inputki Jumlah angkatan nya
              </div>
            </div>
          </div>

          <div class="col-sm-6"> 
            <div class="mb-3">
              <label for="tema" class="form-label">Tema</label>
              <input placeholder="Sesuaikan dengan angkatannya" value="'.$tema.'" autocomplete="off" type="" name="tema" class="form-control" id="tema" required>

              <div class="invalid-feedback">
                Ki inputki Tema angkatan nya
              </div>
            </div>
          </div>

          <div class="col-sm-4"> 
            <div class="mb-3">
              <label for="syahada" class="form-label">No Syahada</label>
              <input value="'.$h.'" autocomplete="off" type="" name="syahadah" class="form-control" id="syahada" required>

              <div class="invalid-feedback">
                Ki inputki No Syahadah
              </div>
            </div>
          </div>

          <div class="col-sm-4"> 
            <div class="mb-3">
              <label for="followup" class="form-label">Jml Follow Up</label>
              <input value="'.$i.'" autocomplete="off" type="number" name="followup" class="form-control" id="followup" required>

              <div class="invalid-feedback">
                Ki inputki Jumlah followup nya
              </div>
            </div>
          </div>

          <div class="col-sm-4"> 
            <div class="mb-3">
              <label for="Hapalan Do`a Sholat" class="form-label">Hapalan Do`a Sholat</label>
              <select required class="form-select" name="doa">
                <option value="">Pilih</option>
                <option '.$j.'>Belum Tuntas</option>
                <option '.$k.'>Tuntas</option>
              </select>                 
              <div class="invalid-feedback">
                Ki inputki Hapalan Do`a Sholat
              </div>
            </div>
          </div>

          <div class="col-sm-4"> 
            <div class="mb-3">
              <label for="Hapalan Arti Do`a Sholat" class="form-label">Hapalan Arti Do`a Sholat</label>
              <select required class="form-select" name="arti">
                <option value="">Pilih</option>
                <option '.$l.'>Belum Tuntas</option>
                <option '.$m.'>Tuntas</option>
              </select>                  
              <div class="invalid-feedback">
                Ki inputki Hapalan Arti Do`a Sholat
              </div>
            </div>
          </div>
        
        </div>
      </div>
      </div>

      <div class="col-md-3">
        <div class="bg-white mb-3 mt-3 p-2 border border-warning rounded-top"> 
          <div class="alert alert-danger">
            <strong>Unggah Foto</strong>
          </div> 
          <div class="form-group px-2">
            <input type="file" name="file1a" id="file1" class="form-control p-1">		
          </div> 				
              
          <div id="uploaded_image1" height="82" width="157" class="text-center">
            <img src="'.$o.'" height="80" width="155" class="mt-2 img-thumbnail">
          </div>						
        </div>
      </div>
    </div>

    <div class="p-2 mt-3">
      <button type="submit" class="btn btn-primary tambah" name="'.$n.'">Submit</button>
    </div>
  </form>
  ';
}

//...........
if (isset($_POST['ketums'])) {
    echo ketums($ketums); //dari Query admin
    exit;
}elseif (isset($_POST['inputKetums'])) {
    echo inputKetums();
    exit;
}

elseif (isset($_POST['ipmers-1']) || isset($_POST['ipmers-2']) || isset($_POST['ipmers-3'])) {
  $h2 = $_GET['h2']; //untuk H1 Halaman khusus artikel familyS

  echo tblIpmers($kategori, $h2);
  exit;
}elseif (isset($_POST['addArtikel'])) {
  echo addArtikel(adminLogin("nama")); //Ambil data nama yg login
  exit;
}

elseif (isset($_POST['struktur'])) {
  echo struktur($struktur);  //dari Query admin
  exit;
}elseif (isset($_POST['inputStruktur'])) {
  echo inputStruktur();
  exit;
}

elseif (isset($_POST['admin-web'])) {
  echo tabelAdminWeb($adminWeb);  //dari Query admin
  exit;
}elseif (isset($_POST['inputAdminWeb'])) {
  echo inputAdminWeb();
  exit;
}

elseif (isset($_POST['kaderTM1'])) {
  echo tabelKaderTM1($kaderTM1, optionTM1("pr", false), optionTM1("angkatan", "Angkatan ke-"), optionTM1("followup", "Follow Up ke-"));  //dari Query admin
  exit;
}elseif (isset($_POST['inputKaderTM1'])) {
  echo inputKaderTM1(null);  //dari Query admin
  exit;
}elseif (isset($_POST['editKaderTM1'])) {
  $id = $_GET['h2']; //sebagai key edit data Kader TM 1

  echo inputKaderTM1(editData("kaderTM1", "id", $id));  //dari Query admin
  exit;
}
// var_dump($h2);