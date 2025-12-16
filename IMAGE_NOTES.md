# 画像ファイルに関する注意事項

## ✅ 画像のローカル化完了

全ての画像ファイルを外部URLから`images/`フォルダにダウンロードし、HTMLファイル内の参照パスをローカルパスに変更しました。

---

## 📦 画像一覧

### 合計：49枚（約26.5MB）

**すべての画像がローカル化され、外部URLへの依存はありません。**

#### ヒーロー画像（背景画像）
- `hero-top.jpg` - TOPページヒーロー
- `hero-system.jpg` - システム開発事業ページ
- `hero-web.jpg` - ホームページ制作事業ページ
- `hero-marketing.jpg` - WEBマーケティング事業ページ
- `hero-ai.jpg` - AI研修事業ページ
- `hero-corporate-site.jpg` - コーポレートサイト制作ページ
- `hero-service-site.jpg` - サービスサイト制作ページ
- `hero-owned-media.jpg` - オウンドメディア制作ページ
- `hero-lp-creation.jpg` - LP制作ページ
- `hero-listing-ads.jpg` - リスティング広告ページ
- `hero-sns-ads.jpg` - SNS広告ページ
- `hero-instagram-ads.jpg` - Instagram広告ページ
- `hero-line-ads.jpg` - LINE広告ページ
- `hero-recruit-site.jpg` - 採用サイト制作ページ（新規生成）
- `hero-website-operation.jpg` - WEBサイト運用ページ（新規生成）

#### サービス紹介画像
- `service-system.jpg` - システム開発
- `service-web.jpg` - ホームページ制作
- `service-marketing.jpg` - WEBマーケティング
- `service-ai.jpg` - AI研修

#### 会社情報・強み関連
- `company-achievements.jpg` - 会社実績
- `support-system.jpg` - サポート体制
- `onestop-system.jpg` - ワンストップ体制
- `sme-specialized.jpg` - 中小企業特化

#### CTA（お問い合わせ）画像
- `cta-consultation.jpg` - 汎用CTAイメージ（複数ページで使用）
- `cta-corporate.jpg` - コーポレートサイト専用CTA

#### その他の画像
- `ai-development.jpg` - AI開発関連
- `ai-knowledge-gap.jpg` - AI知識ギャップ（新規生成）
- `case-manufacturing.jpg` - 製造業実績（新規生成）
- `general-image.jpg` - 汎用イメージ（複数ページで使用）
- `cta-listing-ads.jpg` - リスティング広告CTA（新規生成）
- `other-01.jpg` ～ `other-20.jpg` - 各種コンテンツ画像

---

## ✅ 新規生成した画像（5枚）

以下の画像は外部サーバーからダウンロードできなかったため、既存画像と同じテイスト（3Dイラスト調・未来感・テクノロジー感・日本人キャラクター・ピンクアクセント）で新規生成しました：

1. `case-manufacturing.jpg` - 制作実績（製造業・業務管理システム）
2. `ai-knowledge-gap.jpg` - AI知識ギャップの課題
3. `hero-recruit-site.jpg` - 採用サイト制作ヒーローイメージ
4. `hero-website-operation.jpg` - WEBサイト運用ヒーローイメージ
5. `cta-listing-ads.jpg` - リスティング広告CTAイメージ

**すべての画像がローカル化され、外部URLへの依存は完全になくなりました。**

---

## 🚀 レンタルサーバーへの設置方法

### 1. ファイル構成

以下のファイル・フォルダをすべてアップロードしてください：

```
サイトルート/
├── index.html
├── contact.html
├── service-system.html
├── service-web.html
├── service-marketing.html
├── service-ai.html
├── corporate-site.html
├── service-site.html
├── owned-media.html
├── recruit-site.html
├── lp-creation.html
├── website-operation.html
├── listing-ads.html
├── sns-ads.html
├── instagram-ads.html
├── line-ads.html
├── css/
│   └── style.css
├── js/
│   └── main.js
└── images/          ← 📦 この画像フォルダが新規追加されました
    ├── hero-top.jpg
    ├── hero-system.jpg
    ├── ...
    └── other-20.jpg
```

### 2. FTPアップロード手順

1. FTPクライアント（FileZilla、WinSCP等）でサーバーに接続
2. サーバーの公開ディレクトリ（`public_html`または`htdocs`）に移動
3. 以下の順序でアップロード：
   - ① `css/`フォルダ
   - ② `js/`フォルダ
   - ③ **`images/`フォルダ** ← 重要！
   - ④ 全HTMLファイル

### 3. パーミッション設定

- HTMLファイル: 644
- CSSファイル: 644
- JSファイル: 644
- 画像ファイル: 644
- ディレクトリ: 755

### 4. 動作確認

ブラウザでサイトにアクセスし、以下を確認：

- ✅ 全ての画像が正しく表示される
- ✅ ヒーロー画像（背景）が表示される
- ✅ CTAセクションの画像が表示される
- ✅ 各サービスページの画像が表示される

---

## 🔧 トラブルシューティング

### 画像が表示されない場合

#### 原因1: パスの大文字・小文字
- Linuxサーバーではファイル名の大文字・小文字を区別します
- `images/Hero-top.jpg` と `images/hero-top.jpg` は別ファイル

**解決策**: ファイル名をすべて小文字で統一（既に対応済み）

#### 原因2: imagesフォルダがアップロードされていない
**解決策**: `images/`フォルダとその中身をすべてアップロード

#### 原因3: パーミッション不足
**解決策**: 画像ファイルのパーミッションを644に設定

---

## 📊 画像サイズと最適化

### 現在の画像サイズ

- 最小: 約430KB（other-04.jpg）
- 最大: 約1.2MB（hero-system.jpg）
- 平均: 約600KB

### 最適化の推奨（オプション）

サイトのパフォーマンス向上のため、以下の最適化を推奨します：

1. **画像圧縮**: TinyPNG、ImageOptim等で圧縮
2. **WebP形式への変換**: 次世代画像フォーマット
3. **レスポンシブ画像**: srcset属性でデバイス別最適化

---

## ✅ チェックリスト

レンタルサーバー移行前の最終確認：

- [ ] `images/`フォルダが存在する
- [ ] 44枚の画像ファイルが`images/`フォルダ内にある
- [ ] 全HTMLファイルの画像パスが`images/xxx.jpg`形式になっている
- [ ] FTPでサーバーにアップロード済み
- [ ] ブラウザで全ページの画像表示を確認済み

---

**これでレンタルサーバーへの移行準備が完了しました！** 🎉
