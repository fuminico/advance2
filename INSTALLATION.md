# 株式会社アドバンス コーポレートサイト 設置手順書

## 📋 目次
1. [納品ファイル一覧](#納品ファイル一覧)
2. [動作環境](#動作環境)
3. [設置手順](#設置手順)
4. [ファイル構成](#ファイル構成)
5. [ページ一覧](#ページ一覧)
6. [カスタマイズ方法](#カスタマイズ方法)
7. [トラブルシューティング](#トラブルシューティング)
8. [お問い合わせ](#お問い合わせ)

---

## 📦 納品ファイル一覧

本プロジェクトには以下のファイルが含まれています：

```
advance-corporate-site/
├── index.html                      # TOPページ
├── contact.html                    # お問い合わせページ
├── service-system.html             # システム開発事業
├── service-web.html                # ホームページ制作事業
├── service-marketing.html          # WEBマーケティング事業
├── service-ai.html                 # AI研修事業
├── corporate-site.html             # コーポレートサイト制作
├── service-site.html               # サービスサイト制作
├── owned-media.html                # オウンドメディア制作
├── recruit-site.html               # 採用サイト制作
├── lp-creation.html                # LP制作
├── website-operation.html          # WEBサイト運用
├── listing-ads.html                # リスティング広告
├── sns-ads.html                    # SNS広告
├── instagram-ads.html              # Instagram広告
├── line-ads.html                   # LINE広告
├── css/
│   └── style.css                   # メインスタイルシート
├── js/
│   └── main.js                     # メインJavaScript
├── README.md                       # プロジェクト説明
└── INSTALLATION.md                 # 本設置手順書（このファイル）
```

---

## 🖥️ 動作環境

### サーバー要件
- **Webサーバー**: Apache 2.4以上 / Nginx 1.18以上
- **PHP**: 不要（静的HTMLサイト）
- **データベース**: 不要
- **SSL証明書**: 推奨（HTTPS対応）

### 推奨環境
- **ディスク容量**: 10MB以上
- **帯域幅**: 無制限推奨
- **対応ブラウザ**:
  - Google Chrome（最新版）
  - Firefox（最新版）
  - Safari（最新版）
  - Microsoft Edge（最新版）

---

## 🚀 設置手順

### ステップ1: ファイルのダウンロード
1. 納品ファイル一式をダウンロードします
2. ZIPファイルの場合は解凍してください

### ステップ2: サーバーへのアップロード

#### FTPクライアントを使用する場合
1. FTPクライアント（FileZilla、WinSCP等）でサーバーに接続
2. サーバーの公開ディレクトリ（通常 `public_html` または `htdocs`）を開く
3. 全てのファイルとフォルダをアップロード

```
サーバーの構成例:
/home/your-account/public_html/
├── index.html
├── contact.html
├── service-system.html
├── css/
│   └── style.css
├── js/
│   └── main.js
└── （その他のファイル）
```

#### レンタルサーバーの管理画面を使用する場合
1. サーバーの管理画面（cPanel、Pleskなど）にログイン
2. ファイルマネージャーを開く
3. 公開ディレクトリに移動
4. ファイルをアップロードまたはZIPファイルをアップロード後に解凍

### ステップ3: パーミッション設定
以下のパーミッション（権限）を設定してください：

- **HTMLファイル**: 644（-rw-r--r--）
- **CSSファイル**: 644（-rw-r--r--）
- **JSファイル**: 644（-rw-r--r--）
- **ディレクトリ**: 755（drwxr-xr-x）

### ステップ4: 動作確認
1. ブラウザでサイトにアクセス
   - 例: `https://your-domain.com/`
2. 以下の項目を確認：
   - ✅ TOPページが正しく表示される
   - ✅ ナビゲーションメニューが動作する
   - ✅ 画像が正しく表示される
   - ✅ リンクが正しく機能する
   - ✅ レスポンシブデザイン（スマホ表示）が正常

### ステップ5: .htaccess設定（推奨）

#### .htaccessファイルの作成
サーバーのルートディレクトリに `.htaccess` ファイルを作成し、以下を追加：

```apache
# キャッシュ設定
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css "access plus 1 year"
    ExpiresByType application/javascript "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/svg+xml "access plus 1 year"
</IfModule>

# 圧縮設定
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
</IfModule>

# セキュリティヘッダー
<IfModule mod_headers.c>
    Header set X-Content-Type-Options "nosniff"
    Header set X-Frame-Options "SAMEORIGIN"
    Header set X-XSS-Protection "1; mode=block"
</IfModule>

# HTTPS リダイレクト（SSL証明書がある場合）
# RewriteEngine On
# RewriteCond %{HTTPS} off
# RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

**注意**: HTTPS リダイレクトは、SSL証明書を設定後にコメントを外してください。

---

## 📁 ファイル構成

### HTMLファイル（18ページ）

| ファイル名 | 説明 | URL例 |
|-----------|------|-------|
| index.html | TOPページ | / |
| contact.html | お問い合わせ | /contact.html |
| service-system.html | システム開発事業 | /service-system.html |
| service-web.html | ホームページ制作事業 | /service-web.html |
| service-marketing.html | WEBマーケティング事業 | /service-marketing.html |
| service-ai.html | AI研修事業 | /service-ai.html |
| corporate-site.html | コーポレートサイト制作 | /corporate-site.html |
| service-site.html | サービスサイト制作 | /service-site.html |
| owned-media.html | オウンドメディア制作 | /owned-media.html |
| recruit-site.html | 採用サイト制作 | /recruit-site.html |
| lp-creation.html | LP制作 | /lp-creation.html |
| website-operation.html | WEBサイト運用 | /website-operation.html |
| listing-ads.html | リスティング広告 | /listing-ads.html |
| sns-ads.html | SNS広告 | /sns-ads.html |
| instagram-ads.html | Instagram広告 | /instagram-ads.html |
| line-ads.html | LINE広告 | /line-ads.html |

### CSSファイル
- **css/style.css**: 全ページ共通のスタイルシート
  - ピンク基調のカラーテーマ
  - レスポンシブデザイン対応
  - 最小フォントサイズ: 18px

### JavaScriptファイル
- **js/main.js**: 全ページ共通の動作制御
  - モバイルメニュー
  - スムーススクロール
  - ヘッダー固定

---

## 🎨 ページ一覧

### TOPページ
- ヒーローセクション
- 4つの事業内容
- 数字で見る当社
- 当社の強み（3つ）
- 制作実績
- 支援の進め方
- 会社概要
- CTAセクション

### 事業内容ページ（4ページ）
1. **システム開発事業**: 業務システム、プロダクト開発、AI活用
2. **ホームページ制作事業**: コーポレート、サービス、採用サイト等
3. **WEBマーケティング事業**: リスティング、SNS広告運用
4. **AI研修事業**: AIリーダー育成、カスタムカリキュラム

### サービス詳細ページ（12ページ）
各サービスの詳細、特徴、料金、事例などを掲載

---

## 🔧 カスタマイズ方法

### 会社情報の変更

#### 会社概要の修正
`index.html` の会社概要セクション（行488〜523付近）を編集：

```html
<table class="company-table">
    <tr>
        <th>会社名</th>
        <td>株式会社アドバンス</td>  <!-- ここを変更 -->
    </tr>
    <tr>
        <th>代表取締役</th>
        <td>吉澤 仁</td>  <!-- ここを変更 -->
    </tr>
    <!-- 以下同様に変更 -->
</table>
```

### カラーテーマの変更

`css/style.css` のカラー変数（11〜21行目）を編集：

```css
:root {
    /* 現在のピンク基調 */
    --color-primary: #EC4899;      /* メインカラー */
    --color-primary-dark: #DB2777; /* 濃いピンク */
    
    /* 他の色に変更する場合 */
    /* --color-primary: #2563EB;   青色の例 */
    /* --color-primary-dark: #1D4ED8; */
}
```

### フォントサイズの調整

`css/style.css` の基本フォントサイズ（48行目）を編集：

```css
body {
    font-size: 18px; /* 基本フォントサイズ */
}
```

### お問い合わせフォームの設定

`contact.html` のフォームaction属性を編集：

```html
<form action="YOUR_FORM_HANDLER_URL" method="POST">
    <!-- フォーム内容 -->
</form>
```

**推奨ツール**:
- Googleフォーム
- Formspree
- レンタルサーバーのメールフォーム機能

---

## 🔍 トラブルシューティング

### 問題1: ページが表示されない
**原因**: ファイルパスの誤り、パーミッション設定
**解決策**:
- ファイル名が正しいか確認（大文字・小文字を区別）
- パーミッションが644（ファイル）、755（ディレクトリ）になっているか確認
- ブラウザのキャッシュをクリア

### 問題2: CSSが適用されない
**原因**: CSSファイルのパスが正しくない
**解決策**:
- `css/style.css` が正しい場所にあるか確認
- HTMLファイルのCSSリンクを確認:
  ```html
  <link rel="stylesheet" href="css/style.css">
  ```
- キャッシュバスティングのバージョン番号を変更:
  ```html
  <link rel="stylesheet" href="css/style.css?v=20250130">
  ```

### 問題3: スマホで表示が崩れる
**原因**: viewportメタタグの欠落
**解決策**:
- 各HTMLファイルのheadタグ内に以下が含まれているか確認:
  ```html
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  ```

### 問題4: 画像が表示されない
**原因**: 外部画像URLへのアクセス制限
**解決策**:
- 画像は外部URL（genspark.ai）を参照しています
- インターネット接続を確認
- 画像URLが有効か確認

---

## 📱 モバイル対応

本サイトは完全レスポンシブデザインです。以下のブレークポイントで最適化されています：

- **デスクトップ**: 1024px以上
- **タブレット**: 768px〜1023px
- **スマートフォン**: 767px以下

---

## 🔒 セキュリティ推奨事項

1. **SSL証明書の導入**: HTTPS化を必ず実施
2. **定期的なバックアップ**: ファイルの定期バックアップ
3. **サーバーの更新**: サーバーソフトウェアを最新に保つ
4. **アクセス制限**: 管理画面へのIP制限を検討

---

## 📊 パフォーマンス最適化

### すでに実装済み
- ✅ 最小フォントサイズ18px（可読性）
- ✅ レスポンシブデザイン
- ✅ セマンティックHTML
- ✅ 外部フォントの最適化（Google Fonts）

### 追加推奨事項
- CDN（CloudFlare等）の導入
- 画像の最適化・圧縮
- Gzip圧縮の有効化

---

## 📞 お問い合わせ

### サイト運用に関するご質問
設置やカスタマイズでご不明な点がございましたら、以下までお問い合わせください。

**株式会社アドバンス**
- 所在地: 〒160-0022 東京都新宿区新宿六丁目7番3号
- 電話: （お問い合わせフォームをご利用ください）
- メール: （お問い合わせフォームをご利用ください）

---

## 📝 更新履歴

| 日付 | バージョン | 内容 |
|------|-----------|------|
| 2025-01-29 | 1.0.0 | 初版リリース |
|  |  | - 18ページ構成 |
|  |  | - ピンク基調デザイン |
|  |  | - 最小フォントサイズ18px |
|  |  | - 完全レスポンシブ対応 |

---

## ✅ 納品チェックリスト

設置完了後、以下の項目をご確認ください：

- [ ] 全18ページが正しく表示される
- [ ] ナビゲーションメニューが動作する
- [ ] モバイル表示が正常に機能する
- [ ] すべてのリンクが正しく動作する
- [ ] 会社情報が正しく表示される
- [ ] フォームが送信できる（contact.html）
- [ ] SSL証明書が導入されている（推奨）
- [ ] サイトの読み込み速度が適切

---

**設置完了おめでとうございます！🎉**

このサイトが貴社のビジネス成長に貢献することを願っております。
