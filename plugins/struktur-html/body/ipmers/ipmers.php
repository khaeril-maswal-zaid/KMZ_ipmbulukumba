    <main>
        <div class="container artikel-ipmers" style="margin-top: 70px;">

            <div class="row mt-5 mb-3">
                <div class="col-md-9 border rounded bg-success">
                    <div class="artikel p-5 bg-white">
                        <h1 class="title-artikel fw-bold artikel mb-3"><?= $artikelIpmers['judul'] ?></h1>
                        <span class="text-secondary ket">by </span><a href="#" class="ket"><?= $artikelIpmers['oleh'] ?></a> <span class="text-secondary ket">&nbsp;&nbsp;-&nbsp;</span> <span class="text-secondary ket"><?= bulanIndonesia($artikelIpmers['tanggal']) ?></span>
                        <img src="<?= $url ?>/plugins/inputan-user/artikel/<?= $artikelIpmers['foto'] ?>" width="100%" class="border mt-3">
                        <p><?= $artikelIpmers['artikel'] ?></p>
                    </div>
                </div>

                <hr class="ipmers-agenda">
                <div class="agendaIPM col-md-3 border rounded bg-white">
                    <?php include "../plugins/struktur-html/body/agenda-ipm/index.php" ?>
                </div>
            </div>
        </div><!-- /.container -->
    </main>