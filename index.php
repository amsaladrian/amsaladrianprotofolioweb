<?php
    
$projects = [
    [
        'judul' => 'Aplikasi Kalkulator',
        'deskripsi' => 'Sebuah aplikasi kalkulator sederhana berbasis web dengan menggunakan  HTML, CSS, dan Javascript'
    ],
    [
        'judul' => 'Website Toko Online',
        'deskripsi' => 'Website sederhana untuk toko online menggunakan PHP dan MySQL.'
    ],
    [
        'judul' => 'Portofolio Pribadi',
        'deskripsi' => 'Website portofolio ini sendiri! Dibuat dengan PHP, CSS, dan JavaScript.'
    ]
];
?>





<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kutanarilens</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="kutanarilens-logo.png">

    </head>
    <body>
        <header>
            <div>
                <img src="kutanarilens-logo.png" alt="kutanarilens-logo">
            </div>
            <h1>
                Kutanarilens
            </h1>
            <p>
                Selamat Datang di website portofolio saya.
            </p>
        </header>
        <main>
            <section id="Tentang">
                <h2>Tentang Saya</h2>
                <p>Saya adalah seorang programmer dan juga seorang mahasiswa Informatika yang sedang belajar pemrograman web</p>
            </section>
            <section id="Keahlian">
                <h2>Keahlian Saya</h2>
                <ul>
                    <li>HTML & CSS</li>
                    <li>Javascript Dasar</li>
                    <li>PHP Dasar</li>
                    <li>Desain UI/UX</li>
                </ul>
            </section>
            <!-- <section id="Proyek">
                <h2>Proyek saya</h2>
                <div class="card">
                    <h3>Aplikasi kalkulator</h3>
                    <p>Sebuah aplikasi sederhana menggunakan HTML, CSS, dan Javascript</p>
                </div>
                <div class="card">
                    <h3>Website Toko Online</h3>
                    <p>Website sederhana untuk toko online menggunakan PHP dan MySql</p>
                </div>
                
                
            </section> -->
            <section id="Proyek">
                <h2>Proyek Saya</h2>
                <?php foreach ($projects as $p):?>
                    <div class="card">
                    <h3><?php echo $p['judul']; ?></h3>
                    <p><?php echo $p['deskripsi']; ?></p>
                    </div>
                    <?php endforeach; ?>
            </section>
        </main>
        <footer>
            <p>&copy; 2025 Kutanarilens. Semua hak dilindungi</p>
        </footer>
            <script src="script.js"></script>
        </body>
        </html>