
<style>
    .navbar-custom {
        background-color: #1B0244; /* Mengubah warna background navbar menjadi merah maroon */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top ">
<div class="container px-5">
        <div>
            <a class="navbar-brand" href="<?= base_url('/user') ?>">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
 
            <ul class="navbar-nav ms-auto">
                <li class="navbar-brand"><a class="nav-link" href="/user/formulir">FORMULIR</a></li>
                <li class="navbar-brand"><a class="nav-link" href="/user/about">ABOUT</a></li>
            </ul>
        </div>
    </div>
</nav>
