<body class="home <?php if (isset($noSessions)) echo $noSessions ?>">
    <header class="w-deks">
        <nav class="navbar navbar-expand-md fixed-top bg-warning navbar-light">
            <div class="container">
                <a class="navbar-brand fw-bold" href="<?=$url ?>">IPM Bulukumba</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="#">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <?php include "../plugins/struktur-html/head/isiNavbar.php" ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<!-- supaya kalau di Smartphone button nya full ke kanan -->
    <header class="w-smart" style="display: none;">
        <nav class="navbar navbar-expand-md fixed-top bg-warning navbar-light">
            <div class="container">
                <a class="navbar-brand fw-bold" href="<?=$url ?>">IPM Bulukumba</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php include "../plugins/struktur-html/head/isiNavbar.php" ?>
                </div>
                
            </div>
        </nav>
    </header>
