<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ヘッダー -->
<header class="header" id="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="logo-text">ADVANCE</span>
                </a>
            </div>
            <nav class="nav" id="nav">
                <ul class="nav-list">
                    <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="nav-link">事業内容</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#strengths' ) ); ?>" class="nav-link">強み</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#works' ) ); ?>" class="nav-link">実績</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#company' ) ); ?>" class="nav-link">会社概要</a></li>
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="nav-link nav-link-cta">お問い合わせ</a></li>
                </ul>
            </nav>
            <button class="menu-toggle" id="menuToggle" aria-label="メニュー">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
