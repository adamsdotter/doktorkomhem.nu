<?php
    // Metadata
    $metaTitle = 'Appointments at Doktor Kom Hem | Family practice in Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Tired of long waiting times? - Book an appointment with Doktor Kom Hem!';
    $canonical = 'appointments';

    // Page specifict
    $siteLang = 'en';
    $pageName = 'book'; // To set active in nav
    $pageTitle = 'Appointments';
    $pageImg = 'clock.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/en/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content">
                <p><b>Tired of long waiting times? - Book an appointment with us!</b></p>
                <p>The best way to make an appointment with us is to call our reception:</p>
                <p class="large"><a href="tel:+46-86569700">+46 (0) 8-656 97 00</a></p>
                <p>Open Monday - Friday: 08:00-17:00</p>
                <p>
                    We no longer have any drop-in appointments. Please call our reception at 08 o'clock, this is when we release the emergency times of the day.
                </p>
                <p>Welcome!</p>
            </div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/en/footer.php'); ?>