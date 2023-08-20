    <main>
        <div class="container" style="margin-top: 115px;">
            <div id="ketuaMM" class="ketuaMM">
                <div class="border rounded-3 px-2 bg-white mb-3">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mx-3">
                        <h1 class="h2">Profil Ketua Umum <br> PD IPM Bulukumba Masa Kemasa</h1>
                        
                        <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-danger">Share</button>
                            <button type="button" class="btn btn-sm btn-success dropdown-toggle"><span data-feather="calendar"></span>
                                All Priode</button>
                        </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <?php foreach ($ketums as $tums) : ?>
                            <div class="col-md-3 mt-2">
                                <div class="card">
                                    <img class="ketuaMM card-img-top border" src="<?=$url ?>/plugins/inputan-user/foto-ketums/<?=$tums['foto'] ?>">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1"><?=$tums['nama'] ?></h5>
                                        <p class="card-text">Priode <?=$tums['prd'] ?></p>
                                        <a href="#" class="btn btn-primary btn-sm">View</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </main>
