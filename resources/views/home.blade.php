<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="
    {{ asset("style.css") }}">
</head>
<body>
    <header>
        <h1>Selamat Datang di Halaman Home</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Layanan</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="intro">
            <h2>Mengapa Memilih Kami?</h2>
            <p>Kami menyediakan layanan berkualitas dengan dukungan profesional yang berpengalaman.</p>
            <button onclick="showMessage()">Pelajari Lebih Lanjut</button>
        </section>

        <section class="services">
            <h2>Layanan Kami</h2>
            <div class="service">
                <h3>Layanan 1</h3>
                <p>Deskripsi layanan 1.</p>
            </div>
            <div class="service">
                <h3>Layanan 2</h3>
                <p>Deskripsi layanan 2.</p>
            </div>
            <div class="service">
                <h3>Layanan 3</h3>
                <p>Deskripsi layanan 3.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Perusahaan Kami. Semua Hak Dilindungi.</p>
    </footer>

    <script src="{{ asset("script.js") }}"></script>
</body>
</html>
