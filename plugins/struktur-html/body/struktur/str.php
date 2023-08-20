    <main>
        <div class="container" style="margin-top: 115px;">
            <div class="ketuaMM">
                <div class="border rounded-3 px-2 bg-white mb-3">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mx-3">
                        <h1 class="h2 my-3">Profil Personil PD IPM Bulukumba</h1>
                        
                        <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-danger">Share</button>
                            <button type="button" class="btn btn-sm btn-success dropdown-toggle"><span data-feather="calendar"></span>
                                All Priode</button>
                        </div>
                        </div>
                    </div>
                    <?php 
                        $queryStrukturAll = [$queBidum, $queBidor, $queBider, $queKdi, $quePip, $queAdvokasi, $queAsbo, $queIpmawati, $quePkk, $queScBendahara];
                        $h4 = ['BIDANG UMUM', 'BIDANG ORGANISASI', 'BIDANG PERKADERAN', 'BIDANG KDI', 'BIDANG PIP', 'BIDANG ADVOKASI', 'BIDANG ASBO', 'BIDANG IPMAWATI', 'BIDANG PKK', 'BENDAHARA 1 & 2'];
                        for ($i=0; $i < count($h4); $i++) :
                    ?>
                        <div class="row my-4 mx-3">
                            <h1 class="h4"><?=$h4[$i] ?></h1>
                            <?php foreach ($queryStrukturAll[$i] as $str) : ?>
                                <div class="col-md-3 my-3">
                                    <div class="card text-center">
                                        <div class="card-header fw-bold">
                                            <?=$str['amanah'] ?>
                                        </div>
                                        <div class="card-body">
                                            <img class="ketuaMM card-img-top border" src="<?=$url?>/plugins/inputan-user/struktur/<?=$str['foto'] ?>">
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="text-dark"><?=$str['nama'] ?></a> <br>
                                            <a href="#" class="m-0 p-0"> <span><?=$str['hp'] ?></span></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>  <hr>
                    <?php endfor ?>
                </div>
            </div>
        </div><!-- /.container -->
    </main>