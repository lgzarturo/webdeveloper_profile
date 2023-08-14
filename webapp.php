<?php require_once 'config.php'; ?>
<?php
$_SESSION['page'] = 'webapp';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="<?php echo $translations['page_webapp__seo-description'] ?>">
    <meta name="title" content="<?php echo $translations['page_webapp__seo-title'] ?>" />
    <title><?php echo $translations['page_webapp__title'] ?></title>
    <?php include(__DIR__ . '/templates/snippets/_tag_open_graph.php') ?>
    <!-- Favicon -->
    <meta name="theme-color" content="#0d47a1" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <!-- Preload -->
    <link rel="preload" href="assets/css/normalize.min.css" as="style">
    <link rel="preload" href="assets/css/style.min.css" as="style">
    <link rel="preload" href="assets/img/hero.jpg" as="image" />
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/normalize.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <!-- Metrics -->
    <?php include(__DIR__ . '/templates/snippets/_tag_manager_head.php') ?>
</head>

<body id="<?php echo $random ?>">
    <?php include(__DIR__ . '/templates/snippets/_tag_manager_body.php') ?>

    <?php include(__DIR__ . '/templates/section/_navigation.php') ?>

    <div class="background_section">
        <div class="overlay"></div>
        <section class="container rounded card card_column py_5">
            <h2 class="mt_0">
                <?php echo $translations['page_webapp__title'] ?>
            </h2>
            <p>
                <?php echo $translations['page_webapp__seo-description'] ?>
            </p>
        </section>
    </div>

    <main class="container py_5">
        <div class="grid_12 grid_gap_2">
            <div class="grid_col_9">
                Column 1
            </div>
            <div class="grid_col_3">
                Column 2
            </div>
        </div>
    </main>

    <?php include(__DIR__ . '/templates/section/_footer.php') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.min.js" type="application/javascript"></script>
    <?php include(__DIR__ . '/templates/snippets/_form_microformats.php') ?>
</body>

</html>
