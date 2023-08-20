<body class="home">
    <header class="w-deks">
        <nav id="navScroll" class="navScrollx navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="<?=$url ?>">IPM Bulukumba</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="#">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <?php include "plugins/struktur-html/head/isiNavbar.php" ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<!-- supaya kalau di Smartphone button nya full ke kanan -->
    <header class="w-smart" style="display: none;">
        <nav id="navScroll2" class="navScrollx navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="<?=$url ?>">IPM Bulukumba</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php include "plugins/struktur-html/head/isiNavbar.php" ?>
                </div>
                
            </div>
        </nav>
    </header>
