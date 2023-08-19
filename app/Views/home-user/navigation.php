<style>
    .navbar-custom {
        background-color: #1B0244;
        padding: 18px 0; /* Mengatur padding atas dan bawah pada navbar */
    }

    .navbar-custom .navbar-brand {
        font-size: 20px; /* Mengatur ukuran font pada brand navbar */
    }

    .navbar-custom .nav-link {
        font-size: 20px; /* Mengatur ukuran font pada link navigasi */
        color: white; /* Mengubah warna tulisan menjadi putih */
    }
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container px-5">
        <a class="navbar-brand" href="<?= base_url('/user') ?>">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-link"><a class="nav-link" href="/user/formulir">FORMULIR</a></li>
                <li class="nav-link"><a class="nav-link" href="/user/about">ABOUT</a></li>
            </ul>
        </div>
    </div>
</nav>
