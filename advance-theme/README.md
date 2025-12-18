# Advance Corporate Theme - WordPressテーマ

**株式会社アドバンス コーポレートサイト専用WordPressカスタムテーマ**

静的HTMLサイトから完全移行した、レベル3（カスタムテーマ化）WordPressテーマです。

---

## 📦 テーマ構成

```
advance-theme/
├── style.css                  # テーマ情報ヘッダー
├── functions.php              # テーマ機能定義
├── header.php                 # 共通ヘッダー
├── footer.php                 # 共通フッター
├── index.php                  # フォールバックテンプレート
├── front-page.php             # トップページテンプレート
├── page-templates/            # ページテンプレート（18ファイル）
│   ├── service-system.php
│   ├── service-web.php
│   ├── service-marketing.php
│   ├── service-ai.php
│   ├── corporate-site.php
│   ├── service-site.php
│   ├── owned-media.php
│   ├── recruit-site.php
│   ├── lp-creation.php
│   ├── website-operation.php
│   ├── listing-ads.php
│   ├── sns-ads.php
│   ├── instagram-ads.php
│   ├── line-ads.php
│   ├── contact.php
│   ├── harassment-policy.php
│   ├── call-recording.php
│   └── customer-harassment-manual.php
└── assets/
    ├── css/
    │   └── style.css          # メインCSS
    ├── js/
    │   ├── main.js            # メインJavaScript
    │   ├── contact.js         # お問い合わせフォーム用
    │   └── pdf-viewer.js      # PDFビューアー用
    ├── images/                # 全画像ファイル（49枚）
    └── pdfs/                  # PDFファイル
        └── advance-manual.pdf
```

---

## 🚀 インストール手順（3ステップ、所要時間: 約5分）

### STEP 1: テーマフォルダをアップロード

#### 方法A: FTP/SFTPでアップロード

1. FTPクライアント（FileZilla等）でサーバーに接続
2. `/wp-content/themes/` ディレクトリに移動
3. `advance-theme` フォルダ全体をアップロード

#### 方法B: ZIP圧縮してWordPress管理画面からアップロード

1. `advance-theme` フォルダをZIP圧縮
2. WordPress管理画面 → 外観 → テーマ
3. 「新規追加」→「テーマのアップロード」
4. ZIPファイルを選択してインストール

---

### STEP 2: テーマを有効化

1. WordPress管理画面 → 外観 → テーマ
2. 「Advance Corporate Theme」を見つける
3. 「有効化」ボタンをクリック

---

### STEP 3: 固定ページを作成（18ページ）

#### 3-1: トップページの設定

1. **固定ページ → 新規追加**
2. **タイトル:** 「TOP」
3. **パーマリンク（スラッグ）:** 空欄（ルートページ）
4. **テンプレート:** 「Front Page」を選択
5. **公開**

6. **設定 → 表示設定**
7. 「ホームページの表示」→「固定ページ」を選択
8. 「ホームページ」で「TOP」を選択
9. **変更を保存**

#### 3-2: その他17ページの作成

| ページタイトル | スラッグ | テンプレート |
|---|---|---|
| システム開発事業 | service-system | システム開発事業 |
| ホームページ制作事業 | service-web | ホームページ制作事業 |
| WEBマーケティング事業 | service-marketing | WEBマーケティング事業 |
| AI研修事業 | service-ai | AI研修事業 |
| コーポレートサイト制作 | corporate-site | コーポレートサイト制作 |
| サービスサイト制作 | service-site | サービスサイト制作 |
| オウンドメディア構築 | owned-media | オウンドメディア構築 |
| 採用サイト制作 | recruit-site | 採用サイト制作 |
| LP制作 | lp-creation | LP制作 |
| WEBサイト運用保守 | website-operation | WEBサイト運用保守 |
| リスティング広告運用 | listing-ads | リスティング広告運用 |
| SNS広告運用 | sns-ads | SNS広告運用 |
| Instagram広告運用 | instagram-ads | Instagram広告運用 |
| LINE広告運用 | line-ads | LINE広告運用 |
| お問い合わせ | contact | お問い合わせ |
| カスタマーハラスメント対策方針 | harassment-policy | カスタマーハラスメント対策方針 |
| 通話記録システム | call-recording-system | 通話記録システム |
| カスタマーハラスメント対応マニュアル | customer-harassment-manual | カスタマーハラスメント対応マニュアル |

**各ページの作成手順:**

1. 固定ページ → 新規追加
2. タイトルを入力
3. パーマリンク（スラッグ）を上記表の通りに設定
4. **ページ属性 → テンプレート** で該当するテンプレートを選択
5. 本文は空欄でOK（テンプレートに全て含まれています）
6. 公開

---

## ✅ 完了確認

### チェックリスト

- [ ] テーマが有効化されている
- [ ] トップページが正しく表示される
- [ ] 18ページすべてが作成されている
- [ ] ナビゲーションリンクが正しく動作する
- [ ] 画像が全て表示される
- [ ] レスポンシブデザインが動作する（スマホ表示確認）
- [ ] PDFビューアーが動作する（カスタマーハラスメント対応マニュアルページ）

---

## 🎯 このテーマの特徴

### ✅ 従来の手動変換方式との比較

| 項目 | 従来方式 | カスタムテーマ方式 |
|---|---|---|
| 初期構築時間 | 約2時間 | 約5分 |
| ページ作成方法 | カスタムHTMLブロックに貼り付け | テンプレート選択のみ |
| ヘッダー/フッター管理 | 各ページに埋め込み | header.php/footer.phpで一元管理 |
| 画像管理 | 手動アップロード | テーマに含まれる |
| CSS/JS管理 | 各ページに埋め込み | functions.phpで一元管理 |
| 更新作業 | 全ページ手動修正 | 該当ファイルのみ修正 |
| SEO対策 | 手動設定 | WordPress標準機能利用可 |
| プラグイン連携 | 困難 | 容易 |

### ✅ メリット

1. **圧倒的な効率化**
   - 固定ページ作成時に「テンプレート選択」のみで完了
   - HTMLコードの貼り付け不要

2. **一元管理**
   - ヘッダー・フッターは `header.php` / `footer.php` のみ修正
   - CSS・JavaScriptも一箇所で管理

3. **WordPress標準機能をフル活用**
   - SEOプラグイン対応
   - キャッシュプラグイン対応
   - セキュリティプラグイン対応

4. **拡張性**
   - 新規ページの追加が容易
   - カスタムフィールド（ACF等）との連携可能

5. **メンテナンス性**
   - コードが整理されている
   - 変更箇所が明確

---

## 🛠 カスタマイズ方法

### ヘッダー・フッターの変更

**例: ロゴを変更したい**

`header.php` の23-26行目を編集:

```php
<div class="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="ADVANCE">
    </a>
</div>
```

### ナビゲーションメニューの変更

`header.php` の27-36行目を編集:

```php
<nav class="nav" id="nav">
    <ul class="nav-list">
        <li><a href="..." class="nav-link">新しいメニュー</a></li>
    </ul>
</nav>
```

### 新しいページテンプレートの追加

1. `page-templates/` に新しいPHPファイルを作成
2. ファイル先頭に以下を追加:

```php
<?php
/**
 * Template Name: 新しいページ
 * Template Post Type: page
 */

get_header(); ?>

<!-- ここにHTMLコンテンツ -->

<?php get_footer(); ?>
```

3. `functions.php` の `advance_register_page_templates` 関数に追加

---

## 🐛 トラブルシューティング

### 問題1: テーマが表示されない

**原因:** ファイルパーミッションの問題

**解決策:**
```bash
chmod -R 755 /wp-content/themes/advance-theme
```

---

### 問題2: 画像が表示されない

**原因:** アセットフォルダのパスが間違っている

**確認:**
```
/wp-content/themes/advance-theme/assets/images/
```

**解決策:**
- ブラウザの開発者ツール（F12）でコンソールエラーを確認
- 画像URLが正しいか確認

---

### 問題3: CSSが適用されない

**原因:** キャッシュが残っている

**解決策:**
1. ブラウザのキャッシュをクリア（Ctrl + Shift + Delete）
2. WordPressキャッシュプラグインをクリア
3. スーパーリロード（Ctrl + F5）

---

### 問題4: ページテンプレートが選択できない

**原因:** PHPファイルのヘッダーが正しくない

**確認:**

`page-templates/*.php` の先頭に以下があるか確認:

```php
<?php
/**
 * Template Name: ページ名
 * Template Post Type: page
 */
```

---

## 📝 更新履歴

### Version 1.0.0 (2025-01-18)
- 初回リリース
- 静的HTMLサイトからの完全移行
- 18ページテンプレート作成
- ヘッダー・フッター一元管理
- アセット（CSS/JS/画像/PDF）統合

---

## 📞 サポート

### 開発元
**株式会社アドバンス**
- 〒160-0022 東京都新宿区新宿六丁目7番3号
- Website: https://advance-corp.jp

### テーマバージョン
- **Version:** 1.0.0
- **WordPress要件:** 5.0以上
- **PHP要件:** 7.4以上

---

## 📄 ライセンス

Proprietary - 株式会社アドバンス専用

このテーマは株式会社アドバンスのコーポレートサイト専用です。無断での複製・配布・改変を禁じます。

---

**🎉 セットアップが完了したら、サイトを確認して全ページが正しく表示されることを確認してください！**
