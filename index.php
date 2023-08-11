<?php
session_start();
$_SESSION['page'] = 'index';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Web Developer &amp; Portfolio Experience</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <!-- Preload -->
    <link rel="preload" href="assets/css/normalize.css" as="style">
    <link rel="preload" href="assets/css/style.css" as="style">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php include(__DIR__ . '/templates/snippets/_tag_manager_head.php') ?>
</head>

<body>
    <?php include(__DIR__ . '/templates/snippets/_tag_manager_body.php') ?>

    <?php include(__DIR__ . '/templates/section/_navigation.php') ?>

    <div class="background_section">
        <div class="overlay"></div>
        <section id="about" class="container rounded card card_column py_5">
            <h2 class="mt_0">
                Web development of web applications
            </h2>
            <p>
                I am a web developer with more than 10 years of experience in the development of web applications, I have experience
                in the development of web applications with PHP, Laravel, Javascript, VueJS, ReactJS, NodeJS, MySQL, MongoDB, PostgreSQL,
                HTML5, CSS3, Bootstrap, among others.
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                Cancún, Quintana Roo
            </p>
            <div>
                <a href="#contact" class="btn btn_secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    Contact me
                </a>
                <a href="profile.php" class="btn btn_secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Profile
                </a>
            </div>
        </section>
    </div>

    <main id="services" class="container py_5">
        <h3 class="bb mb_4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
            </svg>
            Services
        </h3>
        <div class="flex">
            <div class="card_flex">
                <section class="card card_item rounded">
                    <h4>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                        </svg>
                        Web Applications
                    </h4>
                    <img src="assets/img/web_applications_card.jpg" class="responsive" alt="Build and Develop Web Applications">
                    <p>
                        I develop web applications with the latest technologies,
                        I have experience in the development of web applications
                        with PHP, Laravel, Javascript, VueJS, ReactJS,
                        NodeJS, MySQL, MongoDB,
                        PostgreSQL, HTML5, CSS3, Bootstrap, among others.
                    </p>
                    <p>
                        I have experience in the development of web applications for different industries such as real estate,
                        restaurants, hotels, travel agencies, among others.
                    </p>
                    <a href="#" class="btn btn_secondary btn_flat_top text_center w_100 coming_soon">
                        See more about web applications
                    </a>
                </section>
                <section class="card card_item rounded">
                    <h4>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                        Mobile Applications
                    </h4>
                    <img src="assets/img/mobile_applications_card.jpg" class="responsive" alt="Design and Responsive Thinking in Mobile First">
                    <p>
                        I develop mobile applications with the latest technologies,
                        I have experience in the development of mobile applications
                        with React Native, Android Studio, Java, Kotlin, Swift, among others.
                    </p>
                    <p>
                        Mobile applications are a very important part of any business;
                        Since it allows you to reach more customers, I have experience
                        in the development of mobile applications for Android and iOS.
                    </p>
                    <a href="#" class="btn btn_secondary btn_flat_top text_center w_100 coming_soon">
                        See more about mobile applications
                    </a>
                </section>
                <section class="card card_item rounded">
                    <h4>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                        </svg>
                        E-commerce
                    </h4>
                    <img src="assets/img/ecommerce_card.jpg" class="responsive" alt="Payment methods, Customer Strategy of E-Commerce">
                    <p>
                        I develop e-commerce with the latest technologies,
                        I have experience in the development of email marketing campaigns with
                        Mailchimp, Sendgrid, among others.
                    </p>
                    <p>
                        E-commerce is a very important part of any business,
                        since it allows you to sell your products or services online, I have
                        experience with the most popular payment gateways like PayPal,
                        Stripe, Conekta, MercadoPago, among others.
                    </p>
                    <a href="#" class="btn btn_secondary btn_flat_top text_center w_100 coming_soon">
                        See more about e-commerce
                    </a>
                </section>
            </div>
        </div>
    </main>

    <?php include(__DIR__ . '/templates/section/_contact.php') ?>

    <?php include(__DIR__ . '/templates/section/_footer.php') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.min.js" type="application/javascript"></script>
    <?php include(__DIR__ . '/templates/snippets/_form_microformats.php') ?>
</body>

</html>
