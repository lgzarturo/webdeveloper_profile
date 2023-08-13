<?php require_once 'config.php'; ?>
<?php
$_SESSION['page'] = 'profile';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="<?php echo $translations['page_profile__seo-description'] ?>">
    <meta name="title" content="<?php echo $translations['page_profile__seo-title'] ?>" />
    <title><?php echo $translations['page_profile__title'] ?></title>
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
            <h2 class="section_summary__title mt_0">
                <?php echo $translations['page_profile__title'] ?>
            </h2>
            <p class="section_summary__text--1">
                <?php echo $translations['page_profile__text--1'] ?>
            </p>
            <p class="section_summary__text--2">
                <?php echo $translations['page_profile__text--2'] ?>
            </p>
        </section>
    </div>

    <main class="container py_5">
        <div class="row">
            <div class="col-8">
                <section class="section_work">
                    <h3 class="section_work__title bb mb_4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                        </svg>
                        <?php echo $translations['section_work__title'] ?>
                    </h3>
                    <?php foreach ($works as $obj) { ?>
                        <div class="experience_item">
                            <div class="title">
                                <h4><?php echo $obj['title_' . $lang] ?></h4>
                                <a href="<?php echo $obj['company_url'] ?>" target="_blank">
                                    <?php echo $obj['company'] ?>
                                </a>
                            </div>
                            <div class="date no_relevance">
                                <?php echo $obj['date'] ?>
                            </div>
                            <div class="location no_relevance">
                                <?php echo $obj['location'] ?>
                            </div>
                            <div class="body mt_3">
                                <p class="description">
                                    <?php echo $obj['description_' . $lang] ?>
                                </p>

                                <div class="items technologies">
                                    <h5 class="title">Technologies</h5>
                                    <?php foreach ($obj['technologies'] as $technology) { ?>
                                        <span class="badge"><?php echo $technology ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </section>
                <section class="section_education">
                    <h3 class="section_education__title bb mb_4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                        <?php echo $translations['section_education__title'] ?>
                    </h3>
                    <?php foreach ($education as $obj) { ?>
                        <div class="experience_item">
                            <div class="title">
                                <h4><?php echo $obj['title_' . $lang] ?></h4>
                                <a href="<?php echo $obj['school_url'] ?>" target="_blank">
                                    <?php echo $obj['school'] ?>
                                </a>
                            </div>
                            <div class="date no_relevance">
                                <?php echo $obj['date'] ?>
                            </div>
                            <div class="location no_relevance">
                                <?php echo $obj['location'] ?>
                            </div>
                            <div class="body mt_3">
                                <p class="description">
                                    <?php echo $obj['description_' . $lang] ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
            <div class="col-4">
                <section class="section_skills rounded card card_column card_section mb_3">
                    <h4 class="section_skills__title rounded_top card_title card_title_secondary">
                        <?php echo $translations['section_skills__title'] ?>
                    </h4>
                    <ul class="list_items">
                        <?php foreach ($skills as $skill) { ?>
                            <li>
                                <img src="assets/img/icons/<?php echo $skill['icon'] ?>" alt="<?php echo $skill['title'] ?>" class="icon">
                                <?php echo $skill['title'] ?>
                            </li>
                        <?php } ?>
                    </ul>
                </section>

                <section class="section_soft_skills rounded card card_column card_section">
                    <h4 class="section_soft_skills__title rounded_top card_title card_title_tertiary">
                        <?php echo $translations['section_soft_skills__title'] ?>
                    </h4>
                    <ul class="list_items">
                        <?php foreach ($soft_skills as $skill) { ?>
                            <li>
                                <img src="assets/img/icons/<?php echo $skill['icon'] ?>" alt="<?php echo $skill['title_' . $lang] ?>" class="icon">
                                <?php echo $skill['title_' . $lang] ?>
                            </li>
                        <?php } ?>
                    </ul>
                </section>
            </div>
        </div>
    </main>

    <?php include(__DIR__ . '/templates/section/_footer.php') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.min.js" type="application/javascript"></script>
    <?php include(__DIR__ . '/templates/snippets/_form_microformats.php') ?>
</body>

</html>
