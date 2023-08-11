<?php
session_start();
$_SESSION['page'] = 'profile';
$random = 0;
try {
    $random = substr(hash('sha256', openssl_random_pseudo_bytes(20)),-random_int(1, 100));
} catch (Exception $e) {
}
$works = [
    [
        "title" => "Java Software Engineer",
        "company" => "Revenatium",
        "company_url" => "https://revenatium.com",
        "location" => "Cancún, Quintana Roo",
        "date" => "2019 - Present",
        "description" => "Backend development of web applications with Java, Spring Boot. Booking Engine, Marketing Automation, CRM, CMS, Channel Manager, Business Intelligence, API Integration, among others.",
        "technologies" => [
            "Java",
            "Kotlin",
            "Spring Boot",
            "MongoDB",
            "PostgreSQL",
        ],
    ],
    [
        "title" => "Software Engineer",
        "company" => "StarChoice",
        "company_url" => "https://starchoice.com.mx",
        "location" => "Cancún, Quintana Roo",
        "date" => "2018 - 2019",
        "description" => "Full-stack development of web applications with Grails, jQuery, MySQL, HTML5, CSS3, Bootstrap. Web application for the management of recruitment processes.",
        "technologies" => [
            "Grails",
            "Java",
            "MySQL",
            "HTML5",
            "CSS3",
            "Bootstrap",
        ],
    ],
    [
        "title" => "Marketing Manager",
        "company" => "Grupo Argos",
        "company_url" => "https://grupoargos.com.mx",
        "location" => "Cancún, Quintana Roo",
        "date" => "2016 - 2019",
        "description" => "Development of corporate identity, web design, digital marketing, social media management, and SEO",
        "technologies" => [
            "Adobe Photoshop",
            "Adobe Illustrator",
            "Adobe Premiere",
            "HTML5",
            "CSS3",
            "Bootstrap",
            "WordPress",
            "SEO",
        ],
    ],
    [
        "title" => "Java Software Engineer",
        "company" => "Grupo Argos",
        "company_url" => "https://grupoargos.com.mx",
        "location" => "Cancún, Quintana Roo",
        "date" => "2012 - 2016",
        "description" => "Backend development of web applications with Java, Spring Framework, SQL Server, HTML5, CSS3, Bootstrap. Web application for the management of payroll and human resources.",
        "technologies" => [
            "Java",
            "Spring Framework",
            "SQL Server",
            "HTML5",
            "CSS3",
            "Bootstrap",
        ],
    ],
    [
        "title" => "Java Developer / Webmaster",
        "company" => "Sunset World Hotels & Resorts",
        "company_url" => "https://sunsetworldresorts.com",
        "location" => "Cancún, Quintana Roo",
        "date" => "2009 - 2012",
        "description" => "Java desktop and web development with Java, Play Framework, Oracle, HTML5, CSS3, Bootstrap. Booking Engine, Marketing Automation, CRM, CMS, Channel Manager, Business Intelligence, API Integration, among others.",
        "technologies" => [
            "Java",
            "Play Framework",
            "Oracle",
            "HTML5",
            "CSS3",
            "Bootstrap",
        ],
    ],
    [
        "title" => "Php Developer / Technical Support",
        "company" => "Freelance",
        "company_url" => "https://linkedin.com/in/lgzarturo",
        "location" => "Cancún, Quintana Roo",
        "date" => "2005 - 2009",
        "description" => "Web design and development for clients. Technical support for computer equipment, installation of operating systems, and software",
        "technologies" => [
            "Windows",
            "Linux",
            "Microsoft Office",
            "Adobe Suite",
        ],
    ]
];

$education = [
    [
        "title" => "Bachelor of Computer Systems Engineering",
        "school" => "ITCancún",
        "school_url" => "https://www.google.com",
        "location" => "Cancún, Quintana Roo",
        "date" => "2000 - 2005",
        "description" => "Web Project Development. Participating in the creation of a customer service portal, reservation management, using Java technologies and programming methodologies."
    ]
];

$skills = [
    [
        "icon" => "tabler-icon-code.svg",
        "title" => "Java",
    ],
    [
        "icon" => "tabler-icon-code.svg",
        "title" => "Kotlin",
    ],
    [
        "icon" => "tabler-icon-code.svg",
        "title" => "Groovy &amp; Grails",
    ],
    [
        "icon" => "tabler-icon-code.svg",
        "title" => "Spring Boot",
    ],
    [
        "icon" => "tabler-icon-file-type-php.svg",
        "title" => "PHP",
    ],
    [
        "icon" => "tabler-icon-file-type-php.svg",
        "title" => "Laravel",
    ],
    [
        "icon" => "tabler-icon-brand-javascript.svg",
        "title" => "JavaScript",
    ],
    [
        "icon" => "tabler-icon-brand-typescript.svg",
        "title" => "Typescript",
    ],
    [
        "icon" => "tabler-icon-brand-python.svg",
        "title" => "Python",
    ],
    [
        "icon" => "tabler-icon-brand-django.svg",
        "title" => "Django",
    ],
];

$soft_skills = [
    [
        "icon" => "tabler-icon-clipboard-list.svg",
        "title" => "Teamwork",
    ],
    [
        "icon" => "tabler-icon-clipboard-list.svg",
        "title" => "Leadership",
    ],
    [
        "icon" => "tabler-icon-clipboard-list.svg",
        "title" => "Communication",
    ],
    [
        "icon" => "tabler-icon-clipboard-list.svg",
        "title" => "Problem solving",
    ],
    [
        "icon" => "tabler-icon-clipboard-list.svg",
        "title" => "Creativity",
    ],
    [
        "icon" => "tabler-icon-clipboard-list.svg",
        "title" => "Adaptability",
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="script-src 'nonce-<?php echo $random ?>' 'strict-dynamic'">
    <meta name="description" content="My name is Arturo López, I am a full-stack developer with experience in the travel, consulting, recruiting, and human resources industries.">
    <title>Arturo López | Web Developer | Profile</title>
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
                Hello world! Welcome to my professional profile.
            </h2>
            <p>
                I am a full-stack developer with experience in the travel, consulting, recruiting,
                and human resources industries. I specialize in technologies with languages such as
                Java, Kotlin, JavaScript, PHP, and Python.
            </p>
            <p>
                I am an entrepreneur who is passionate about learning more about programming, technology, and science.
                I have a strong knowledge of interface design, user experience, Adobe Photoshop, corporate
                identity, and digital marketing.
            </p>
        </section>
    </div>

    <main id="services" class="container py_5">
        <div class="row">
            <div class="col-8">
                <section>
                    <h3 class="bb mb_4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                        </svg>
                        Work experience
                    </h3>
                    <?php foreach ($works as $obj) { ?>
                        <div class="experience_item">
                            <div class="title">
                                <h4><?php echo $obj['title'] ?></h4>
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
                                    <?php echo $obj['description'] ?>
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
                <section>
                    <h3 class="bb mb_4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                        Education
                    </h3>
                    <?php foreach ($education as $obj) { ?>
                        <div class="experience_item">
                            <div class="title">
                                <h4><?php echo $obj['title'] ?></h4>
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
                                    <?php echo $obj['description'] ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
            <div class="col-4">
                <section class="rounded card card_column card_section mb_3">
                    <h4 class="rounded_top card_title card_title_secondary">Tech skills</h4>
                    <ul class="list_items">
                    <?php foreach ($skills as $skill) { ?>
                        <li>
                            <img src="assets/img/icons/<?php echo $skill['icon'] ?>" alt="<?php echo $skill['title'] ?>" class="icon">
                            <?php echo $skill['title'] ?>
                        </li>
                    <?php } ?>
                    </ul>
                </section>

                <section class="rounded card card_column card_section">
                    <h4 class="rounded_top card_title card_title_tertiary">Soft skills</h4>
                    <ul class="list_items">
                        <?php foreach ($soft_skills as $skill) { ?>
                            <li>
                                <img src="assets/img/icons/<?php echo $skill['icon'] ?>" alt="<?php echo $skill['title'] ?>" class="icon">
                                <?php echo $skill['title'] ?></li>
                        <?php } ?>
                    </ul>
                </section>
            </div>
        </div>
    </main>

    <?php include(__DIR__ . '/templates/section/_footer.php') ?>

    <script nonce="<?php echo $random ?>" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script nonce="<?php echo $random ?>" src="assets/js/main.min.js" type="application/javascript"></script>
    <?php include(__DIR__ . '/templates/snippets/_form_microformats.php') ?>
</body>

</html>
