<?php
/**
 * Advance Corporate Theme Functions
 *
 * @package Advance_Theme
 * @version 1.0.0
 */

// セキュリティ: 直接アクセスを防止
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * テーマセットアップ
 */
function advance_theme_setup() {
    // ドキュメントタイトルのサポート
    add_theme_support( 'title-tag' );

    // アイキャッチ画像のサポート
    add_theme_support( 'post-thumbnails' );

    // HTML5サポート
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ) );
}
add_action( 'after_setup_theme', 'advance_theme_setup' );

/**
 * CSS・JavaScriptの読み込み
 */
function advance_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // メインCSS
    wp_enqueue_style(
        'advance-main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        $theme_version
    );

    // メインJavaScript
    wp_enqueue_script(
        'advance-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $theme_version,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'advance_enqueue_assets' );

/**
 * PDF.jsの読み込み（カスタマーハラスメントマニュアルページ用）
 */
function advance_enqueue_pdf_viewer() {
    if ( is_page( 'customer-harassment-manual' ) ) {
        // PDF.js CDN
        wp_enqueue_script(
            'pdfjs-lib',
            'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js',
            array(),
            '3.11.174',
            false
        );

        // カスタムPDFビューアー
        wp_enqueue_script(
            'advance-pdf-viewer',
            get_template_directory_uri() . '/assets/js/pdf-viewer.js',
            array( 'pdfjs-lib' ),
            '1.0.0',
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'advance_enqueue_pdf_viewer' );

/**
 * ページテンプレートの登録
 */
function advance_register_page_templates( $templates ) {
    $custom_templates = array(
        'page-templates/service-system.php'     => 'システム開発事業',
        'page-templates/service-web.php'        => 'ホームページ制作事業',
        'page-templates/service-marketing.php'  => 'WEBマーケティング事業',
        'page-templates/service-ai.php'         => 'AI研修事業',
        'page-templates/corporate-site.php'     => 'コーポレートサイト制作',
        'page-templates/service-site.php'       => 'サービスサイト制作',
        'page-templates/owned-media.php'        => 'オウンドメディア構築',
        'page-templates/recruit-site.php'       => '採用サイト制作',
        'page-templates/lp-creation.php'        => 'LP制作',
        'page-templates/website-operation.php'  => 'WEBサイト運用保守',
        'page-templates/listing-ads.php'        => 'リスティング広告運用',
        'page-templates/sns-ads.php'            => 'SNS広告運用',
        'page-templates/instagram-ads.php'      => 'Instagram広告運用',
        'page-templates/line-ads.php'           => 'LINE広告運用',
        'page-templates/contact.php'            => 'お問い合わせ',
        'page-templates/harassment-policy.php'  => 'カスタマーハラスメント対策方針',
        'page-templates/call-recording.php'     => '通話記録システム',
        'page-templates/customer-harassment-manual.php' => 'カスタマーハラスメント対応マニュアル',
    );

    return array_merge( $templates, $custom_templates );
}
add_filter( 'theme_page_templates', 'advance_register_page_templates' );

/**
 * bodyタグにページ固有のクラスを追加
 */
function advance_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'home-page';
    }

    return $classes;
}
add_filter( 'body_class', 'advance_body_classes' );

/**
 * 画像URLヘルパー関数
 */
function advance_get_image_url( $filename ) {
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

/**
 * 管理画面のカスタマイズ
 */
function advance_admin_notice() {
    $screen = get_current_screen();

    if ( $screen->id === 'themes' ) {
        echo '<div class="notice notice-info"><p>';
        echo '<strong>Advance Corporate Theme:</strong> このテーマは株式会社アドバンスのコーポレートサイト専用です。';
        echo '</p></div>';
    }
}
add_action( 'admin_notices', 'advance_admin_notice' );
