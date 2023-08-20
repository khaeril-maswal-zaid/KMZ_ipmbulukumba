<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $url ?>/plugins/assets/images/crl1.jpg" class="a">
                <div class="container">
                    <div class="carousel-caption text-start pb-5">
                        <h1>Selamat Datang</h1>
                        <p>Di situs resmi Pimpinan Daerah Ikatan Pelajar Muhammadiyah Bulukumba</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= $url ?>/plugins/assets/images/crl2.jpg" class="a">
                <div class="container">
                    <div class="carousel-caption pb-5">
                        <h1>Selamat Datang</h1>
                        <p>Di situs resmi Pimpinan Daerah Ikatan Pelajar Muhammadiyah Bulukumba</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= $url ?>/plugins/assets/images/crl3.jpg" class="a">

                <div class="container">
                    <div class="carousel-caption text-end pb-5">
                        <h1>Selamat Datang</h1>
                        <p>Di situs resmi Pimpinan Daerah Ikatan Pelajar Muhammadiyah Bulukumba</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container marketing">
        <!-- BIDUM -->
        <div class="row bidum-row">
            <div class="col-md-4">
                <div class="rounded-circle border-warning border border-3 bidum">
                    <img src="<?= $url ?>/plugins/inputan-user/struktur/<?= bidum('Ketua Umum') ?>" style="width:100%;">
                </div>
                <h3 class="mt-3">Ketua Umum</h3>
                <h5>Nirwana Ayu Mustika</h5>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="rounded-circle border-warning border border-3 bidum">
                    <img src="<?= $url ?>/plugins/inputan-user/struktur/<?= bidum('Sekretaris Umum') ?>" style="width:100%;">
                </div>
                <h3 class="mt-3">Sekretaris Umum</h3>
                <h5>Awaliyah Zahrayanti</h5>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="rounded-circle border-warning border border-3 bidum">
                    <img src="<?= $url ?>/plugins/inputan-user/struktur/<?= bidum('Bendahara Umum') ?>" style="width:100%;">
                </div>

                <h3 class="mt-3">Bendahara Umum</h3>
                <h5>Nur Ismi</h5>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->

        <div class="row my-5">

            <div class="col-md-9 bg-success">
                <div class="border rounded px-3 bg-white">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="display-5 fw-bold">IPMERS</h1>
                    </div>

                    <!-- KABAR IPM -->
                    <section>
                        <div class="h3 fw-bold mt-5">
                            <span class="bg-warning">&nbsp;Kabar IPM&nbsp;</span>
                            <hr class="p-0 m-0" width="50%">
                        </div>
                        <div class="row">

                            <?php
                            foreach (artukelHome(1, 6) as $arh) :
                            ?>
                                <div class="col-md-6 mt-4">
                                    <div class="row">
                                        <div class="col-5">
                                            <img class="IPMers-img float-start border rounded-2 mx-2" src="<?= $url ?>/plugins/inputan-user/artikel/<?= $arh['foto'] ?>" alt="">
                                        </div>
                                        <div class="col-7">
                                            <a href="<?= $url ?>/nuun-panrita-lopi?ipmers=<?= $arh['link'] ?>">
                                                <h6 class="IPMers-title"><?= substr($arh['judul'], 0, 73) ?>...</h6>
                                            </a>

                                            <div class="IPMers-tgl">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                                </svg>
                                                <span class="text-muted"><?= bulanIndonesia($arh['tanggal']) ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <span class="mb-5">
                                <hr>
                            </span>
                        </div>
                    </section>

                    <!-- OPINI PELAJAR -->
                    <section>
                        <div class="h3 fw-bold mt-5">
                            <span class="bg-warning">&nbsp;O P I N I&nbsp;</span>
                            <hr class="p-0 m-0" width="50%">
                        </div>
                        <div class="row">

                            <?php
                            foreach (artukelHome(2, 6) as $arh) :
                            ?>
                                <div class="col-md-4 mt-4">
                                    <div class="#">
                                        <img class="IPMers-img2 rounded-2 border mx-2" src="<?= $url ?>/plugins/inputan-user/artikel/<?= $arh['foto'] ?>" alt="">
                                    </div>
                                    <span class="#">
                                        <a href="<?= $url ?>/nuun-panrita-lopi?ipmers=<?= $arh['link'] ?>">
                                            <h6 class="IPMers-title mt-2"><?= substr($arh['judul'], 0, 73) ?>...</h6>
                                        </a>
                                    </span>
                                    <div class="IPMers-tgl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg>
                                        <span class="text-muted"><?= bulanIndonesia($arh['tanggal']) ?></span>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <span class="mb-5">
                                <hr>
                            </span>
                        </div>
                    </section>

                    <!-- IPMers Work -->
                    <section>
                        <div class="h3 fw-bold mt-5">
                            <span class="bg-warning">&nbsp;IPMers Work&nbsp;</span>
                            <hr class="p-0 m-0" width="50%">
                        </div>
                        <div class="row pb-5">

                            <?php
                            foreach (artukelHome(3, 4) as $arh) :
                            ?>
                                <div class="col-md-6 mt-4">
                                    <div class="#">
                                        <img class="IPMers-img3 rounded-2 border" src="<?= $url ?>/plugins/inputan-user/artikel/<?= $arh['foto'] ?>" alt="">
                                    </div>
                                    <span class="#">
                                        <a href="<?= $url ?>/nuun-panrita-lopi?ipmers=<?= $arh['link'] ?>">
                                            <h6 class="IPMers-text  IPMers-title mt-2"><?= $arh['judul'] ?></h6>
                                        </a>
                                    </span>
                                    <div class="IPMers-tgl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                        </svg>
                                        <span class="text-muted"><?= bulanIndonesia($arh['tanggal']) ?></span>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </section>
                </div>
            </div>

            <div class="col-md-3 border rounded-3 bg-white agendaIPM">
                <section>
                    <div class="text-center fw-bold mt-4 text-decoration-underline">
                        <span>Agenda IPM Bulukumba</span>
                    </div>

                    <div class="mt-3 deks-sembunyi">
                        <span class="fw-bold">2020</span>
                        <ul>
                            <li>Januari</li>
                            <li>Februari</li>
                            <li>Maret</li>
                            <li>April</li>
                            <li>Mei</li>
                            <li>Juni</li>
                            <li>Juli</li>
                            <li>Agustus</li>
                            <li>September</li>
                            <li>Oktober</li>
                            <li>November</li>
                            <li>Desember</li>
                        </ul>
                    </div>

                    <hr class="deks-sembunyi">

                    <div class="mt-3">
                        <span class="fw-bold">2021</span>
                        <ul>
                            <li>Januari</li>
                            <li>Februari</li>
                            <li>Maret</li>
                            <li>April</li>
                            <li>Mei</li>
                            <li>Juni</li>
                            <li>Juli</li>
                            <li>Agustus</li>
                            <li>September</li>
                            <li>Oktober</li>
                            <li>November</li>
                            <li>Desember</li>
                        </ul>
                    </div>

                    <hr>

                    <div class="mt-3 deks-sembunyi">
                        <span class="fw-bold">2022</span>
                        <ul>
                            <li>Januari</li>
                            <li>Februari</li>
                            <li>Maret</li>
                            <li>April</li>
                            <li>Mei</li>
                            <li>Juni</li>
                            <li>Juli</li>
                            <li>Agustus</li>
                            <li>September</li>
                            <li>Oktober</li>
                            <li>November</li>
                            <li>Desember</li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <hr class="#">

        <div class="my-5">
            <div class="text-center">
                <h1 class="display-6 fw-bold">Janji Pelajar Muhammadiyah</h1>
            </div>

            <div class="row mt-4">
                <div class="mt-3 col-md-4">
                    <ol>
                        <li class="h4">Berjuang Menegakkan Ajaran Islam.</li>
                    </ol>
                </div>
                <div class="mt-3 col-md-4">
                    <ol>
                        <li value="2" class="h4">Hormat dan Patuh Terhadap Orang Tua dan Guru</li>
                    </ol>
                </div>
                <div class="mt-3 col-md-4">
                    <ol>
                        <li value="3" class="h4">Bersungguh-sungguh dalam Menuntut Ilmu.</li>
                    </ol>
                </div>
                <div class="mt-3 col-md-4">
                    <ol>
                        <li value="4" class="h4">Bekerja Keras, Mandiri, dan Berprestasi.</li>
                    </ol>
                </div>
                <div class="mt-3 col-md-4">
                    <ol>
                        <li value="5" class="h4">Rela Berkorban dan Menolong Sesama.</li>
                    </ol>
                    <span class="h4"></span>
                </div>
                <div class="mt-3 col-md-4">
                    <ol>
                        <li value="6" class="h4">Siap Menjadi Kader Muhammadiyah dan Bangsa.</li>
                    </ol>
                </div>
            </div>
        </div>

    </div><!-- /.container -->
</main>