      <div class="rounded border p-3 mt-3" id="mainAdmin">
        <div class="text-white bg-dark col-md-12 p-4 p-md-5 mb-4 rounded">
          <h1 class="display-4 fst-italic">Selamat datang,</h1>
          <h1 class="display-6 fst-italic"><?=$adminLogin['nama'] ?></h1>
          <p class="lead mb-0 text-white fw-bold">Di Laman Sistem Informasi Smart Nuun Ikatan Pelajar Muhammadiyah Bulukumba.</p>
          <p class="lead mt-4 mb-0 text-white">Email : <?=$adminLogin['idAdmin'] ?></p>
          <p class="lead mb-0 text-white">Type Akun : <?=$adminLogin['kategori'] ?></p>
          
            <div class="rounded-circle border-warning border border-3 bidum mt-5">
                <img src="../plugins/inputan-user/admin/<?=$adminLogin['foto'] ?>" style="width:100%;">
            </div>
        </div>
      </div>
    </main> <!-- penutup ada di head Scd -->
  </div> <!-- penutup ada di head Admin -->
</div> <!-- penutup ada di head Admin -->

