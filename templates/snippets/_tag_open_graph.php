<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

use Profile\Config;

Config::init();
?>
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://lgzarturo.com/" />
<meta property="og:title" content="<?php echo $translations['page_index__seo-title'] ?>" />
<meta property="og:description" content="<?php echo $translations['page_index__seo-description'] ?>" />
<meta property="og:image" content="https://raw.githubusercontent.com/lgzarturo/lgzarturo/master/assets/github-header.jpg" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://lgzarturo.com" />
<meta property="twitter:title" content="<?php echo $translations['page_index__seo-title'] ?>" />
<meta property="twitter:description" content="<?php echo $translations['page_index__seo-description'] ?>" />
<meta property="twitter:image" content="https://raw.githubusercontent.com/lgzarturo/lgzarturo/master/assets/github-header.jpg" />
