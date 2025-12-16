# 【2】WordPressへの組み込み方法

変換済みHTMLファイルをWordPressサイトに組み込む手順

---

## 📦 準備するもの

### 1. 画像ファイル（49枚）
- `wordpress-package/images/`フォルダ内の全画像

### 2. 変換済みHTMLファイル（16ファイル）
- `index-converted.html`
- `service-system-converted.html`
- ... 他14ファイル

---

## 🚀 STEP 1: 画像をアップロード

### WordPressサーバーにアップロード

**アップロード先:**
```
/wp-content/themes/advance-child-theme/images/
```

**方法1: FTP/SFTPでアップロード**
1. FTPクライアント（FileZilla等）でサーバーに接続
2. `/wp-content/themes/advance-child-theme/`に移動
3. `images`フォルダを作成（存在しない場合）
4. 49枚の画像をすべてアップロード

**方法2: サーバーの管理画面でアップロード**
- レンタルサーバーのファイルマネージャーを使用
- 上記パスに画像をアップロード

**⚠️ 重要:** 子テーマ名が`advance-child-theme`でない場合は、該当する子テーマ名のフォルダにアップロードしてください。

---

## 📄 STEP 2: 固定ページを作成（16ページ）

### 各ページの作成手順

#### 例: 「システム開発」ページの場合

1. **WordPress管理画面にログイン**

2. **固定ページ → 新規追加**

3. **タイトルを入力**
   - 「システム開発」

4. **パーマリンク（スラッグ）を設定**
   - 「service-system」と入力
   - URL: `https://yourdomain.com/service-system/`

5. **「カスタムHTML」ブロックを追加**
   - ブロック追加（+ボタン）→「カスタムHTML」を検索
   - またはショートカット: `/html` と入力

6. **変換済みHTMLを貼り付け**
   - `service-system-converted.html`をテキストエディタで開く
   - 内容をすべてコピー（Ctrl+A → Ctrl+C）
   - カスタムHTMLブロックに貼り付け（Ctrl+V）

7. **プレビューで確認**
   - 右上の「プレビュー」ボタンをクリック
   - レイアウトが正しく表示されるか確認

8. **公開**
   - 右上の「公開」ボタンをクリック

---

## 📋 全16ページの対応表

| 変換済みHTMLファイル | スラッグ | ページタイトル |
|---|---|---|
| index-converted.html | `/` | TOP |
| service-system-converted.html | `service-system` | システム開発 |
| service-web-converted.html | `service-web` | ホームページ制作 |
| service-marketing-converted.html | `service-marketing` | WEBマーケティング |
| service-ai-converted.html | `service-ai` | AI研修 |
| corporate-site-converted.html | `corporate-site` | コーポレートサイト制作 |
| service-site-converted.html | `service-site` | サービスサイト制作 |
| owned-media-converted.html | `owned-media` | オウンドメディア構築 |
| recruit-site-converted.html | `recruit-site` | 採用サイト制作 |
| lp-creation-converted.html | `lp-creation` | LP制作 |
| website-operation-converted.html | `website-operation` | WEBサイト運用保守 |
| listing-ads-converted.html | `listing-ads` | リスティング広告運用 |
| sns-ads-converted.html | `sns-ads` | SNS広告運用 |
| instagram-ads-converted.html | `instagram-ads` | Instagram広告運用 |
| line-ads-converted.html | `line-ads` | LINE広告運用 |
| contact-converted.html | `contact` | お問い合わせ |

---

## 🏠 STEP 3: トップページの設定

### index-converted.html をトップページにする

1. **WordPress管理画面 → 設定 → 表示設定**

2. **「ホームページの表示」を選択**
   - 「固定ページ」を選択
   - 「ホームページ」で「TOP」ページを選択

3. **変更を保存**

---

## ✅ STEP 4: 動作確認

### 確認項目

1. **画像が表示されているか**
   - すべてのページで画像が正しく表示されるか確認
   - 表示されない場合 → 画像のアップロード先を確認

2. **内部リンクが動作するか**
   - 各ページのリンクをクリックして遷移を確認
   - 404エラーが出る場合 → スラッグ設定を確認

3. **スマホ表示を確認**
   - レスポンシブデザインが正しく動作するか確認

4. **全ページを確認**
   - 16ページすべてをブラウザで開いて確認

---

## 🐛 トラブルシューティング

### 問題1: 画像が表示されない

**原因:**
- 画像のアップロード先が間違っている
- 子テーマ名が間違っている

**解決策:**
1. ブラウザで右クリック → 「検証」（F12）
2. Console（コンソール）タブでエラーを確認
3. 画像URLを確認: `/wp-content/themes/advance-child-theme/images/xxx.jpg`
4. 実際のアップロード先と一致しているか確認

---

### 問題2: 内部リンクが404エラー

**原因:**
- 固定ページのスラッグが間違っている
- 固定ページが公開されていない

**解決策:**
1. WordPress管理画面 → 固定ページ → すべてのページ
2. 各ページのスラッグを上記対応表と照らし合わせて確認
3. すべてのページが「公開」状態になっているか確認

---

### 問題3: CSSが適用されない

**原因:**
- カスタムHTMLブロックではなく通常のブロックを使用している

**解決策:**
- 必ず「カスタムHTML」ブロックを使用してください
- 通常のテキストブロックでは正しく表示されません

---

### 問題4: スマホで表示が崩れる

**原因:**
- HTMLに`<meta name="viewport">`タグがない

**解決策:**
- 変換済みHTMLファイルに以下が含まれていることを確認:
  ```html
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  ```

---

## 📌 重要な注意事項

### ✅ 必ず実行すること

1. **画像を正しいフォルダにアップロード**
   - `/wp-content/themes/advance-child-theme/images/`

2. **スラッグを対応表通りに設定**
   - スラッグが1文字でも違うと内部リンクが動作しません

3. **「カスタムHTML」ブロックを使用**
   - 通常のブロックでは正しく表示されません

### ⚠️ 注意事項

- **HTMLファイルサイズが大きい**
  - CSSとJavaScriptが埋め込まれているため、1ファイル約80KB程度になります

- **ローカルでは画像が表示されない**
  - 絶対URLを使用しているため、WordPress環境でのみ表示されます

---

## 🎉 完了

16ページすべてを公開したら、サイト全体を確認してください。

**お疲れ様でした！**

---

**最終更新:** 2025年1月29日
