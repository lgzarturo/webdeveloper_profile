<?php
$page = $_SESSION['page'];
?>
<header class="text_center">
    <h1>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
        </svg>
        Arturo López
        <span class="page__profession">
            <?php echo $translations['page__profession'] ?>
        </span>
    </h1>
</header>

<div class="nav_bg">
    <nav class="nav_primary container">
        <a href="/" class="nav_item nav_item__home py_1 px_2<?php if ($page === 'index') {
                                                                echo  ' active';
                                                            } ?>">
            <?php echo $translations['nav_item__home'] ?>
        </a>
        <a href="<?php if ($page !== 'index') {
                        echo  '/';
                    } ?>#about" class="nav_item nav_item__about py_1 px_2">
            <?php echo $translations['nav_item__about'] ?>
        </a>
        <a href="<?php if ($page !== 'index') {
                        echo  '/';
                    } ?>#services" class="nav_item nav_item__services py_1 px_2">
            <?php echo $translations['nav_item__services'] ?>
        </a>
        <a href="<?php if ($page !== 'index') {
                        echo  '/';
                    } ?>#contact" class="nav_item nav_item__contact py_1 px_2">
            <?php echo $translations['nav_item__contact'] ?>
        </a>
        <a href="profile.php" class="nav_item nav_item__profile py_1 px_2<?php if ($page === 'profile') {
                                                                                echo  ' active';
                                                                            } ?>">
            <?php echo $translations['nav_item__profile'] ?>
        </a>
        <a href="?lang=es" class="nav_item nav_item__es py_1 px_2">
            Español
        </a>
        <a href="?lang=en" class="nav_item nav_item__en py_1 px_2">
            English
        </a>
    </nav>
</div>
