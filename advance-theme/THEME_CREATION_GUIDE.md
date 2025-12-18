# 静的HTMLサイトをWordPressカスタムテーマに変換する手順書

**任意のHTMLサイトをWordPressテーマ（レベル3）に変換するための完全ガイド**

---

## 📋 目次

1. [前提条件](#前提条件)
2. [準備：プロジェクト構造の確認](#準備プロジェクト構造の確認)
3. [STEP 1: テーマディレクトリ構造の作成](#step-1-テーマディレクトリ構造の作成)
4. [STEP 2: header.php と footer.php の作成](#step-2-headerphp-と-footerphp-の作成)
5. [STEP 3: style.css と functions.php の作成](#step-3-stylecss-と-functionsphp-の作成)
6. [STEP 4: トップページテンプレートの作成](#step-4-トップページテンプレートの作成)
7. [STEP 5: 下層ページテンプレートの一括作成](#step-5-下層ページテンプレートの一括作成)
8. [STEP 6: アセットの移行](#step-6-アセットの移行)
9. [STEP 7: 動作確認とデバッグ](#step-7-動作確認とデバッグ)
10. [STEP 8: ドキュメント作成](#step-8-ドキュメント作成)
11. [トラブルシューティング](#トラブルシューティング)

---

## 前提条件

### 必要な環境
- Node.js（変換スクリプト用）
- Git（バージョン管理用、オプション）
- テキストエディタ

### 静的HTMLサイトの要件
- HTMLファイルが複数ある（index.html + 下層ページ）
- 共通のヘッダー・フッターがある
- CSS/JavaScript/画像ファイルが整理されている

### プロジェクト例
```
your-project/
├── index.html
├── page1.html
├── page2.html
├── page3.html
├── css/
│   └── style.css
├── js/
│   └── main.js
└── images/
    └── *.jpg, *.png
```

---

## 準備：プロジェクト構造の確認

### 1. HTMLファイルのリストアップ

プロジェクトのルートディレクトリで以下を実行：

```bash
# HTMLファイルの一覧を確認
ls *.html

# または詳細表示
find . -name "*.html" -type f
```

### 2. 共通構造の確認

任意のHTMLファイルを開いて、以下を確認：

- **ヘッダー開始位置**: `<header>` タグの行番号
- **ヘッダー終了位置**: `</header>` タグの行番号
- **フッター開始位置**: `<footer>` タグの行番号
- **フッター終了位置**: `</footer>` タグの行番号

例:
```bash
# ヘッダー・フッターの行番号を確認
grep -n "<header" index.html
grep -n "</header>" index.html
grep -n "<footer" index.html
grep -n "</footer>" index.html
```

### 3. アセットの確認

```bash
# CSS/JS/画像の数を確認
find css -type f | wc -l
find js -type f | wc -l
find images -type f | wc -l
```

---

## STEP 1: テーマディレクトリ構造の作成

### 1-1: ディレクトリを作成

```bash
# プロジェクトルートで実行
mkdir -p your-theme-name/{assets/{css,js,images},page-templates,inc}
```

**命名規則:**
- テーマ名は小文字とハイフンのみ（例: `advance-theme`, `company-theme`）
- スペース不可

### 1-2: 作成されたディレクトリ構造の確認

```bash
ls -la your-theme-name/
```

期待される出力:
```
your-theme-name/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── page-templates/
└── inc/
```

---

## STEP 2: header.php と footer.php の作成

### 2-1: header.php の作成

#### テンプレート

`your-theme-name/header.php` を作成：

```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ⚠️ ここに元のHTMLの<head>内のメタタグ・フォント読み込みをコピー -->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ⚠️ ここに元のHTMLの<header>セクション全体をコピー -->
<!-- ただし、以下の変換を行う: -->
<!-- 1. href="index.html" → href="<?php echo esc_url( home_url( '/' ) ); ?>" -->
<!-- 2. href="index.html#section" → href="<?php echo esc_url( home_url( '/#section' ) ); ?>" -->
<!-- 3. href="page1.html" → href="<?php echo esc_url( get_permalink( get_page_by_path( 'page1' ) ) ); ?>" -->
```

#### 実際の作成手順

1. **元のHTMLファイル（例: index.html）を開く**

2. **`<head>`タグから`</head>`までをコピー**
   - `<!DOCTYPE html>` から `</head>` まで

3. **header.phpのテンプレートに貼り付け**

4. **以下の変換を実行:**

   a. `<link rel="stylesheet" href="css/style.css">` を削除（functions.phpで読み込む）

   b. `<script src="js/main.js"></script>` を削除（functions.phpで読み込む）

   c. リンクをWordPress関数に変換:

   ```php
   <!-- 変換前 -->
   <a href="index.html">Home</a>
   <a href="index.html#about">About</a>
   <a href="contact.html">Contact</a>

   <!-- 変換後 -->
   <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
   <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About</a>
   <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>">Contact</a>
   ```

5. **`<body>`タグから`</header>`までをコピー**
   - ヘッダーセクション全体

### 2-2: footer.php の作成

#### テンプレート

`your-theme-name/footer.php` を作成：

```php
<!-- ⚠️ ここに元のHTMLの<footer>セクション全体をコピー -->
<!-- リンクの変換を忘れずに -->

<?php wp_footer(); ?>
</body>
</html>
```

#### 実際の作成手順

1. **元のHTMLファイルから`<footer>`タグから`</footer>`までをコピー**

2. **footer.phpのテンプレートに貼り付け**

3. **リンクをWordPress関数に変換**（header.phpと同じルール）

4. **年号を動的に変更（オプション）:**

   ```php
   <!-- 変換前 -->
   <p>&copy; 2024 Company Name. All rights reserved.</p>

   <!-- 変換後 -->
   <p>&copy; <?php echo date('Y'); ?> Company Name. All rights reserved.</p>
   ```

5. **`<script src="js/main.js"></script>` を削除**（functions.phpで読み込む）

---

## STEP 3: style.css と functions.php の作成

### 3-1: style.css の作成

`your-theme-name/style.css` を作成：

```css
/*
Theme Name: Your Theme Name
Theme URI: https://yoursite.com
Description: サイト名 専用WordPressカスタムテーマ
Author: Your Name
Author URI: https://yoursite.com
Version: 1.0.0
License: Proprietary
Text Domain: your-theme-slug
Tags: corporate, business, responsive
*/

/*
 * このファイルはWordPressテーマ登録用のヘッダーのみを含みます。
 * 実際のCSSは /assets/css/style.css に配置され、functions.phpで読み込まれます。
 */
```

**⚠️ 重要:**
- `Theme Name`: 実際のテーマ名に変更
- `Description`: プロジェクトの説明に変更
- `Author`: 作成者名に変更
- `Text Domain`: テーマのスラッグ（小文字・ハイフン）に変更

### 3-2: functions.php の作成

`your-theme-name/functions.php` を作成：

```php
<?php
/**
 * Theme Functions
 *
 * @package Your_Theme
 * @version 1.0.0
 */

// セキュリティ: 直接アクセスを防止
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * テーマセットアップ
 */
function your_theme_setup() {
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
add_action( 'after_setup_theme', 'your_theme_setup' );

/**
 * CSS・JavaScriptの読み込み
 */
function your_theme_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    // メインCSS
    wp_enqueue_style(
        'your-theme-main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        $theme_version
    );

    // メインJavaScript
    wp_enqueue_script(
        'your-theme-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $theme_version,
        true
    );

    // ⚠️ 追加のCSS/JSがある場合はここに追加
    // 例: お問い合わせフォーム用JS
    // if ( is_page( 'contact' ) ) {
    //     wp_enqueue_script(
    //         'your-theme-contact-script',
    //         get_template_directory_uri() . '/assets/js/contact.js',
    //         array(),
    //         $theme_version,
    //         true
    //     );
    // }
}
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_assets' );

/**
 * ページテンプレートの登録
 *
 * ⚠️ ここに各ページのテンプレートを登録
 */
function your_theme_register_page_templates( $templates ) {
    $custom_templates = array(
        // 'page-templates/example.php' => '例ページ',
        // ⚠️ ここに実際のページテンプレートを追加していく
    );

    return array_merge( $templates, $custom_templates );
}
add_filter( 'theme_page_templates', 'your_theme_register_page_templates' );

/**
 * 画像URLヘルパー関数
 */
function your_theme_get_image_url( $filename ) {
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

/**
 * bodyタグにページ固有のクラスを追加
 */
function your_theme_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'home-page';
    }

    return $classes;
}
add_filter( 'body_class', 'your_theme_body_classes' );
```

**⚠️ 重要な変更箇所:**
1. `your_theme` → 実際のテーマ名（スネークケース: `advance_theme`, `company_theme`）
2. `Your_Theme` → 実際のテーマ名（パスカルケース: `Advance_Theme`, `Company_Theme`）
3. すべての関数名を置換

---

## STEP 4: トップページテンプレートの作成

### 4-1: 変換スクリプトの作成

`your-theme-name/convert-frontpage.js` を作成：

```javascript
const fs = require('fs');

// index.htmlを読み込み
const htmlContent = fs.readFileSync('../index.html', 'utf-8');

// <header>から</header>までを削除
const headerRegex = /<header[^>]*>[\s\S]*?<\/header>/;
let content = htmlContent.replace(headerRegex, '');

// <footer>から</footer>までを削除
const footerRegex = /<footer[^>]*>[\s\S]*?<\/footer>/;
content = content.replace(footerRegex, '');

// <script src="js/main.js"></script>を削除
content = content.replace(/<script\s+src=['"]js\/main\.js['"]><\/script>/g, '');

// <!DOCTYPE html>から<body>までを削除
content = content.replace(/<!DOCTYPE[\s\S]*?<body[^>]*>/i, '');

// </body>と</html>を削除
content = content.replace(/<\/body>[\s\S]*?<\/html>/i, '');

// 画像パスを変換
content = content.replace(/src=['"]images\/([^'"]+)['"]/g, 'src="<?php echo your_theme_get_image_url(\'$1\'); ?>"');
content = content.replace(/url\(['"]images\/([^'"]+)['"]\)/g, 'url(<?php echo your_theme_get_image_url(\'$1\'); ?>)');
content = content.replace(/background-image:\s*url\('images\/([^']+)'\)/g, 'background-image: url(<?php echo your_theme_get_image_url(\'$1\'); ?>)');

// HTMLリンクをWordPress関数に変換
const linkMap = {
    'index.html': '<?php echo esc_url( home_url( \'/\' ) ); ?>',
    // ⚠️ ここに実際のページリンクを追加
    // 'about.html': '<?php echo esc_url( get_permalink( get_page_by_path( \'about\' ) ) ); ?>',
    // 'contact.html': '<?php echo esc_url( get_permalink( get_page_by_path( \'contact\' ) ) ); ?>',
};

Object.keys(linkMap).forEach(htmlFile => {
    const regex = new RegExp(`href=['"]${htmlFile.replace('.', '\\.')}['"]`, 'g');
    content = content.replace(regex, `href="${linkMap[htmlFile]}"`);
});

// index.html#xxxのパターン
content = content.replace(/href=['"]index\.html#([^'"]+)['"]/g, 'href="<?php echo esc_url( home_url( \'/#$1\' ) ); ?>"');

// front-page.phpとして出力
const template = `<?php
/**
 * Template Name: Front Page
 * Description: トップページテンプレート
 */

get_header(); ?>

${content.trim()}

<?php get_footer(); ?>
`;

fs.writeFileSync('front-page.php', template, 'utf-8');
console.log('✓ front-page.php created successfully');
```

**⚠️ カスタマイズポイント:**
1. `your_theme_get_image_url` → 実際の関数名に変更
2. `linkMap` に実際のページリンクを追加

### 4-2: スクリプトを実行

```bash
cd your-theme-name
node convert-frontpage.js
```

### 4-3: 生成されたfront-page.phpを確認

```bash
# 先頭50行を確認
head -50 front-page.php

# 画像パスが正しく変換されているか確認
grep "your_theme_get_image_url" front-page.php | head -5
```

---

## STEP 5: 下層ページテンプレートの一括作成

### 5-1: 一括変換スクリプトの作成

`your-theme-name/batch-convert-templates.js` を作成：

```javascript
const fs = require('fs');
const path = require('path');

// ⚠️ ここに実際のHTMLファイルとテンプレート定義を追加
const templates = [
    { html: 'about.html', template: 'about.php', name: '会社概要', slug: 'about' },
    { html: 'service.html', template: 'service.php', name: 'サービス', slug: 'service' },
    { html: 'contact.html', template: 'contact.php', name: 'お問い合わせ', slug: 'contact' },
    // ⚠️ 実際のページをここに追加
];

// 画像パスとリンクの変換関数
function convertToWordPress(content, slug) {
    let converted = content;

    // 画像パスを変換
    converted = converted.replace(/src=['"]images\/([^'"]+)['"]/g, 'src="<?php echo your_theme_get_image_url(\'$1\'); ?>"');
    converted = converted.replace(/url\(['"]images\/([^'"]+)['"]\)/g, 'url(<?php echo your_theme_get_image_url(\'$1\'); ?>)');
    converted = converted.replace(/background-image:\s*url\('images\/([^']+)'\)/g, 'background-image: url(<?php echo your_theme_get_image_url(\'$1\'); ?>)');

    // HTMLリンクをWordPress関数に変換
    const linkMap = {
        'index.html': '<?php echo esc_url( home_url( \'/\' ) ); ?>',
        // ⚠️ ここに実際のリンクマップを追加
        'about.html': '<?php echo esc_url( get_permalink( get_page_by_path( \'about\' ) ) ); ?>',
        'service.html': '<?php echo esc_url( get_permalink( get_page_by_path( \'service\' ) ) ); ?>',
        'contact.html': '<?php echo esc_url( get_permalink( get_page_by_path( \'contact\' ) ) ); ?>',
    };

    // index.html#xxxのパターン
    converted = converted.replace(/href=['"]index\.html#([^'"]+)['"]/g, 'href="<?php echo esc_url( home_url( \'/#$1\' ) ); ?>"');

    Object.keys(linkMap).forEach(htmlFile => {
        const regex = new RegExp(`href=['"]${htmlFile.replace('.', '\\.')}['"]`, 'g');
        converted = converted.replace(regex, `href="${linkMap[htmlFile]}"`);
    });

    return converted;
}

// 各HTMLファイルを変換
templates.forEach(item => {
    const htmlPath = path.join('..', item.html);

    if (!fs.existsSync(htmlPath)) {
        console.log(`⚠ ${item.html} not found, skipping...`);
        return;
    }

    // HTMLファイルを読み込み
    const htmlContent = fs.readFileSync(htmlPath, 'utf-8');

    // <header>から</header>までを削除
    const headerRegex = /<header[^>]*>[\s\S]*?<\/header>/;
    let content = htmlContent.replace(headerRegex, '');

    // <footer>から</footer>までを削除
    const footerRegex = /<footer[^>]*>[\s\S]*?<\/footer>/;
    content = content.replace(footerRegex, '');

    // <script src="js/main.js"></script>を削除
    content = content.replace(/<script\s+src=['"]js\/main\.js['"]><\/script>/g, '');

    // <!DOCTYPE html>から<body>までを削除
    content = content.replace(/<!DOCTYPE[\s\S]*?<body[^>]*>/i, '');

    // </body>と</html>を削除
    content = content.replace(/<\/body>[\s\S]*?<\/html>/i, '');

    // WordPress関数に変換
    content = convertToWordPress(content, item.slug);

    // テンプレートファイルとして出力
    const template = `<?php
/**
 * Template Name: ${item.name}
 * Template Post Type: page
 * Description: ${item.name}ページテンプレート
 */

get_header(); ?>

${content.trim()}

<?php get_footer(); ?>
`;

    const outputPath = path.join('page-templates', item.template);
    fs.writeFileSync(outputPath, template, 'utf-8');
    console.log(`✓ ${item.template} created`);
});

console.log('\n✨ All templates created successfully!');
```

**⚠️ 重要なカスタマイズポイント:**

1. **`templates` 配列を実際のHTMLファイルに合わせる:**

   ```javascript
   const templates = [
       { html: 'about.html', template: 'about.php', name: '会社概要', slug: 'about' },
       { html: 'service1.html', template: 'service1.php', name: 'サービス1', slug: 'service1' },
       // ... 実際のページを全て列挙
   ];
   ```

2. **`linkMap` を全HTMLファイルに対応させる:**

   ```javascript
   const linkMap = {
       'index.html': '<?php echo esc_url( home_url( \'/\' ) ); ?>',
       'about.html': '<?php echo esc_url( get_permalink( get_page_by_path( \'about\' ) ) ); ?>',
       'service1.html': '<?php echo esc_url( get_permalink( get_page_by_path( \'service1\' ) ) ); ?>',
       // ... 全てのHTMLファイルを追加
   };
   ```

3. **関数名を実際のテーマ名に変更:**
   - `your_theme_get_image_url` → `actual_theme_get_image_url`

### 5-2: スクリプトを実行

```bash
cd your-theme-name
node batch-convert-templates.js
```

### 5-3: 生成されたテンプレートを確認

```bash
ls -la page-templates/
```

### 5-4: functions.phpにテンプレートを登録

`functions.php` の `your_theme_register_page_templates` 関数を更新：

```php
function your_theme_register_page_templates( $templates ) {
    $custom_templates = array(
        'page-templates/about.php'   => '会社概要',
        'page-templates/service.php' => 'サービス',
        'page-templates/contact.php' => 'お問い合わせ',
        // ⚠️ 生成された全テンプレートを追加
    );

    return array_merge( $templates, $custom_templates );
}
```

---

## STEP 6: アセットの移行

### 6-1: CSS/JS/画像をコピー

```bash
# プロジェクトルートで実行
cp -r css/* your-theme-name/assets/css/
cp -r js/* your-theme-name/assets/js/
cp -r images/* your-theme-name/assets/images/
```

### 6-2: その他のアセット（オプション）

PDFやフォントファイルなどがある場合:

```bash
# PDFファイルがある場合
mkdir -p your-theme-name/assets/pdfs
cp -r pdfs/* your-theme-name/assets/pdfs/

# フォントファイルがある場合
mkdir -p your-theme-name/assets/fonts
cp -r fonts/* your-theme-name/assets/fonts/
```

### 6-3: アセットの確認

```bash
cd your-theme-name
find assets -type f | wc -l
```

---

## STEP 7: 動作確認とデバッグ

### 7-1: index.phpの作成

`your-theme-name/index.php` を作成：

```php
<?php
/**
 * The main template file
 *
 * @package Your_Theme
 */

get_header();
?>

<main class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
        else :
            echo '<p>コンテンツが見つかりませんでした。</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
```

### 7-2: テーマファイルのチェックリスト

```bash
cd your-theme-name

# 必須ファイルが存在するか確認
ls -la style.css          # ✓
ls -la functions.php      # ✓
ls -la header.php         # ✓
ls -la footer.php         # ✓
ls -la index.php          # ✓
ls -la front-page.php     # ✓

# ページテンプレートの確認
ls -la page-templates/    # ✓

# アセットの確認
ls -la assets/css/        # ✓
ls -la assets/js/         # ✓
ls -la assets/images/     # ✓
```

### 7-3: PHP構文エラーのチェック

```bash
# 全PHPファイルの構文チェック
find . -name "*.php" -exec php -l {} \;
```

エラーがある場合は修正してください。

---

## STEP 8: ドキュメント作成

### 8-1: README.mdの作成

`your-theme-name/README.md` を作成：

```markdown
# Your Theme Name

**プロジェクト名 専用WordPressカスタムテーマ**

## テーマ情報

- **Version:** 1.0.0
- **Author:** Your Name
- **WordPress要件:** 5.0以上
- **PHP要件:** 7.4以上

## インストール方法

### STEP 1: テーマをアップロード

1. `your-theme-name` フォルダをZIP圧縮
2. WordPress管理画面 → 外観 → テーマ → 新規追加
3. 「テーマのアップロード」→ ZIPファイルを選択
4. 「今すぐインストール」→「有効化」

### STEP 2: ページを作成

以下のページを作成してください：

| ページタイトル | スラッグ | テンプレート |
|---|---|---|
| TOP | （空欄） | Front Page |
| 会社概要 | about | 会社概要 |
| サービス | service | サービス |
| お問い合わせ | contact | お問い合わせ |

**各ページの作成手順:**
1. 固定ページ → 新規追加
2. タイトルを入力
3. スラッグを設定
4. ページ属性 → テンプレートを選択
5. 公開（本文は空欄でOK）

### STEP 3: トップページを設定

1. 設定 → 表示設定
2. 「ホームページの表示」→「固定ページ」を選択
3. 「ホームページ」で「TOP」を選択
4. 変更を保存

## テーマ構成

```
your-theme-name/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── page-templates/
└── assets/
    ├── css/
    ├── js/
    └── images/
```

## カスタマイズ

### ヘッダー・フッターの変更

- ヘッダー: `header.php` を編集
- フッター: `footer.php` を編集

### CSS/JSの変更

- CSS: `assets/css/style.css` を編集
- JS: `assets/js/main.js` を編集

## ライセンス

Proprietary - プロジェクト名専用
```

### 8-2: QUICK_START.mdの作成

`your-theme-name/QUICK_START.md` を作成：

```markdown
# クイックスタートガイド

## 3ステップで完了（5分）

### STEP 1: テーマをアップロード

1. `your-theme-name` フォルダをZIP圧縮
2. WordPress管理画面 → 外観 → テーマ → 新規追加
3. テーマのアップロード → ZIPを選択 → インストール → 有効化

### STEP 2: トップページを作成

1. 固定ページ → 新規追加
2. タイトル: `TOP`
3. テンプレート: `Front Page`
4. 公開

### STEP 3: 他のページを作成

下記ページを同様に作成：

| タイトル | スラッグ | テンプレート |
|---|---|---|
| 会社概要 | about | 会社概要 |
| サービス | service | サービス |
| お問い合わせ | contact | お問い合わせ |

完了後、設定 → 表示設定でトップページを「TOP」に設定。

## 完了！

サイトにアクセスして動作確認してください。
```

---

## STEP 9: テーマの完成とGit管理（オプション）

### 9-1: 不要ファイルの削除

```bash
cd your-theme-name
rm -f convert-frontpage.js
rm -f batch-convert-templates.js
rm -f *.tmp
```

### 9-2: Gitにコミット

```bash
cd ..  # プロジェクトルートに戻る
git add your-theme-name/
git commit -m "feat: WordPress カスタムテーマ完成

- 〇〇個のPHPテンプレート
- 〇〇個のアセットファイル
- 完全な一元管理システム"
git push origin main
```

---

## トラブルシューティング

### 問題1: テンプレートが選択肢に表示されない

**原因:** PHPファイルのヘッダーが正しくない

**解決策:**

ページテンプレートの先頭に以下があるか確認:

```php
<?php
/**
 * Template Name: ページ名
 * Template Post Type: page
 */
```

### 問題2: 画像が表示されない

**原因1:** 関数名が間違っている

**確認:**
- `functions.php` の関数名: `your_theme_get_image_url`
- テンプレートでの使用: `<?php echo your_theme_get_image_url('image.jpg'); ?>`
- 関数名が一致しているか確認

**原因2:** 画像ファイルがコピーされていない

**確認:**
```bash
ls -la assets/images/
```

### 問題3: CSSが適用されない

**原因:** functions.phpで読み込みが正しくない

**確認:**

`functions.php` の `wp_enqueue_style` を確認:

```php
wp_enqueue_style(
    'your-theme-main-style',
    get_template_directory_uri() . '/assets/css/style.css',
    array(),
    $theme_version
);
```

パスが正しいか確認。

### 問題4: リンクが404エラー

**原因1:** スラッグが間違っている

**解決策:** WordPress管理画面で各ページのスラッグを確認

**原因2:** パーマリンク設定が更新されていない

**解決策:**
1. 設定 → パーマリンク設定
2. 「変更を保存」をクリック（設定変更不要）

### 問題5: PHP構文エラー

**確認方法:**

```bash
php -l your-theme-name/functions.php
php -l your-theme-name/header.php
php -l your-theme-name/footer.php
```

エラーメッセージに従って修正。

よくあるエラー:
- 閉じタグ `?>` の不足
- 引用符の不一致
- セミコロンの忘れ

---

## チェックリスト

### テーマ作成完了チェック

- [ ] ディレクトリ構造が作成されている
- [ ] header.php が作成され、リンクがWordPress関数になっている
- [ ] footer.php が作成され、リンクがWordPress関数になっている
- [ ] style.css にテーマ情報ヘッダーがある
- [ ] functions.php が作成され、関数名が統一されている
- [ ] front-page.php が作成されている
- [ ] 全ページテンプレートが page-templates/ にある
- [ ] 全ページテンプレートが functions.php に登録されている
- [ ] CSS/JS/画像が assets/ にコピーされている
- [ ] index.php が作成されている
- [ ] README.md が作成されている
- [ ] QUICK_START.md が作成されている
- [ ] PHP構文エラーがない
- [ ] 不要な一時ファイルが削除されている

### WordPress インストール完了チェック

- [ ] テーマがアップロードされている
- [ ] テーマが有効化されている
- [ ] トップページが作成されている
- [ ] トップページがフロントページに設定されている
- [ ] 全ページが作成されている
- [ ] 全ページにテンプレートが設定されている
- [ ] トップページが表示される
- [ ] ナビゲーションリンクが動作する
- [ ] 画像が表示される
- [ ] CSS/JSが動作する
- [ ] スマホ表示が正常

---

## まとめ

この手順書に従うことで、任意の静的HTMLサイトをWordPressカスタムテーマに変換できます。

### 所要時間の目安

- **小規模サイト**（5ページ程度）: 2-3時間
- **中規模サイト**（10-20ページ）: 4-6時間
- **大規模サイト**（20ページ以上）: 1日

### 重要なポイント

1. **関数名の統一**: `your_theme` を実際のテーマ名に置換
2. **リンクの変換**: 全HTMLリンクをWordPress関数に
3. **画像パスの変換**: 相対パスからヘルパー関数に
4. **テンプレート登録**: functions.phpに全ページテンプレートを登録

### 次のステップ

テーマ完成後:
1. ZIP圧縮
2. WordPressにインストール
3. ページ作成
4. 動作確認
5. 本番環境へデプロイ

**成功を祈ります！** 🎉
