# WordPress転用パッケージ

**株式会社アドバンス コーポレートサイト WordPress移行用パッケージ**

---

## 📦 パッケージ内容

```
wordpress-package/
├── converter.html                     ← 変換ツール
├── 【1】変換ツールの使い方.md            ← マニュアル1
├── 【2】WordPressへの組み込み方法.md     ← マニュアル2
├── original-html/（16HTMLファイル）    ← 変換元
├── css/style.css                      ← CSS
├── js/main.js                         ← JavaScript
└── images/（49画像、約26.5MB）         ← 画像
```

---

## 🚀 WordPress移行手順（2ステップ）

### STEP 1: HTMLファイルを変換

1. `converter.html`をブラウザで開く
2. HTMLファイル、CSS、JavaScriptを選択
3. 「変換を実行」→「ダウンロード」
4. 16ファイルすべて繰り返し

**所要時間:** 約8分（1ファイル30秒 × 16ファイル）

**📖 詳細:** `【1】変換ツールの使い方.md`

---

### STEP 2: WordPressに組み込み

1. 画像49枚をアップロード
   - `/wp-content/themes/advance-child-theme/images/`

2. 固定ページ16ページを作成
   - 「カスタムHTML」ブロックに変換済みHTMLを貼り付け

**📖 詳細:** `【2】WordPressへの組み込み方法.md`

---

## 📋 変換対象ファイル一覧

| HTMLファイル | スラッグ |
|---|---|
| index.html | `/` |
| service-system.html | `/service-system/` |
| service-web.html | `/service-web/` |
| service-marketing.html | `/service-marketing/` |
| service-ai.html | `/service-ai/` |
| corporate-site.html | `/corporate-site/` |
| service-site.html | `/service-site/` |
| owned-media.html | `/owned-media/` |
| recruit-site.html | `/recruit-site/` |
| lp-creation.html | `/lp-creation/` |
| website-operation.html | `/website-operation/` |
| listing-ads.html | `/listing-ads/` |
| sns-ads.html | `/sns-ads/` |
| instagram-ads.html | `/instagram-ads/` |
| line-ads.html | `/line-ads/` |
| contact.html | `/contact/` |

---

## 🎯 変換内容

### 変換前
```html
<link rel="stylesheet" href="css/style.css">
<img src="images/hero.jpg">
<a href="service-system.html">
<script src="js/main.js"></script>
```

### 変換後
```html
<style>/* CSS全体 */</style>
<img src="/wp-content/themes/advance-child-theme/images/hero.jpg">
<a href="/service-system/">
<script>// JavaScript全体</script>
```

---

## 📌 重要なポイント

- ✅ 画像は必ず `/wp-content/themes/advance-child-theme/images/` にアップロード
- ✅ 固定ページのスラッグは上記一覧表通りに設定
- ✅ 「カスタムHTML」ブロックを使用（通常のブロックは不可）

---

## 🎉 WordPress移行を開始

まずは **`【1】変換ツールの使い方.md`** を開いて、変換作業を始めましょう。

---

**最終更新:** 2025年1月29日  
**バージョン:** 1.0.0
