<?php
$nama = "Tirta Samara";
$email = "tirta4132@gmail.com";
$nomor_telepon = "08123456789";
$pekerjaan = "Fullstack Web Developer";

$sosial_media =['https://www.linkedin.com/in/tirta-samara-b84a48275/','https://github.com/Tirta71'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="./assets/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Website Saya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main role="main" class="container mt-5">
    <section class="hero-section">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="image-hero">
                    <img src="./assets/img/hero-img 1.png" width="200px" height="100%" alt=""/>
                </div>
            </div>

            <div class="col-12 content-hero">
                <h1 class="nama-title">I'm <span style="color: red;"><?php echo $nama; ?></span></h1>

                <div class="col-12 pekerjaan">
                    <h3 ><?php echo $pekerjaan; ?></h3>
                </div>

                <div class="deskripsi-pekerjaan">
                    <p>
                        Sebagai seorang <?php echo $pekerjaan; ?>, saya memiliki pengalaman dalam
                        mengembangkan berbagai proyek aplikasi web dari awal hingga akhir. Jika Anda tertarik
                        untuk bekerja sama, jangan ragu untuk menghubungi saya melalui email <span style="color: red;"><?php echo $email; ?></span>
                        atau telepon di nomor <span style="color: red;"><?php echo $nomor_telepon; ?></span>.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>



<footer class="footer">
    <div class="container container-footer">
        <span class="text-muted">© <?php echo date("Y"); ?> Website Saya</span>
        <div class="social-icons">
            <a href="<?php echo $sosial_media[0]; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="<?php echo $sosial_media[1]; ?>" target="_blank"><i class="fab fa-github"></i></a>
        </div>
    </div>
</footer>



<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

