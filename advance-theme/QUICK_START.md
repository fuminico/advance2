# ⚡ クイックスタートガイド - 5分でWordPress移行

**最速でWordPressサイトを立ち上げる手順**

---

## 🚀 3ステップで完了（所要時間: 5分）

### ✅ STEP 1: テーマをアップロード（2分）

#### パターンA: ZIP圧縮してアップロード（推奨）

1. `advance-theme` フォルダをZIP圧縮
2. WordPress管理画面にログイン
3. **外観 → テーマ → 新規追加 → テーマのアップロード**
4. ZIPファイルを選択して **今すぐインストール**
5. **有効化** をクリック

#### パターンB: FTP/SFTPでアップロード

```bash
# FTPで /wp-content/themes/ にアップロード
advance-theme/ → /wp-content/themes/advance-theme/
```

---

### ✅ STEP 2: トップページを設定（1分）

1. **固定ページ → 新規追加**
2. タイトル: `TOP`
3. **ページ属性 → テンプレート**: `Front Page` を選択
4. **公開**

5. **設定 → 表示設定**
6. **ホームページの表示**: `固定ページ` を選択
7. **ホームページ**: `TOP` を選択
8. **変更を保存**

---

### ✅ STEP 3: 他のページを作成（2分）

下記17ページを作成。各ページは以下の手順で作成:

1. **固定ページ → 新規追加**
2. **タイトル**と**スラッグ**を設定（下記表参照）
3. **ページ属性 → テンプレート**を選択（下記表参照）
4. **公開**

| タイトル | スラッグ | テンプレート |
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

**重要:** 本文は空欄でOK。テンプレートに全てのコンテンツが含まれています。

---

## 🎉 完了！

サイトにアクセスして、全ページが表示されることを確認してください。

---

## 💡 時短テクニック

### 一括ページ作成用SQLクエリ

WordPress管理画面の phpMyAdmin で以下のSQLを実行すると、17ページを一括作成できます:

```sql
-- ⚠️ 注意: 実行前に wp_ プレフィックスを確認してください

INSERT INTO wp_posts (post_title, post_name, post_status, post_type, post_author)
VALUES
('システム開発事業', 'service-system', 'publish', 'page', 1),
('ホームページ制作事業', 'service-web', 'publish', 'page', 1),
('WEBマーケティング事業', 'service-marketing', 'publish', 'page', 1),
('AI研修事業', 'service-ai', 'publish', 'page', 1),
('コーポレートサイト制作', 'corporate-site', 'publish', 'page', 1),
('サービスサイト制作', 'service-site', 'publish', 'page', 1),
('オウンドメディア構築', 'owned-media', 'publish', 'page', 1),
('採用サイト制作', 'recruit-site', 'publish', 'page', 1),
('LP制作', 'lp-creation', 'publish', 'page', 1),
('WEBサイト運用保守', 'website-operation', 'publish', 'page', 1),
('リスティング広告運用', 'listing-ads', 'publish', 'page', 1),
('SNS広告運用', 'sns-ads', 'publish', 'page', 1),
('Instagram広告運用', 'instagram-ads', 'publish', 'page', 1),
('LINE広告運用', 'line-ads', 'publish', 'page', 1),
('お問い合わせ', 'contact', 'publish', 'page', 1),
('カスタマーハラスメント対策方針', 'harassment-policy', 'publish', 'page', 1),
('通話記録システム', 'call-recording-system', 'publish', 'page', 1),
('カスタマーハラスメント対応マニュアル', 'customer-harassment-manual', 'publish', 'page', 1);
```

その後、各ページの編集画面で**ページ属性 → テンプレート**を選択して保存。

---

## 📋 チェックリスト

- [ ] テーマがアップロードされている
- [ ] テーマが有効化されている
- [ ] トップページ（TOP）が作成され、フロントページに設定されている
- [ ] 17ページが作成されている
- [ ] 各ページにテンプレートが設定されている
- [ ] トップページが表示される
- [ ] ナビゲーションリンクが動作する
- [ ] 画像が表示される
- [ ] スマホ表示が正常

---

## ❓ よくある質問

### Q1: テンプレートが選択肢に表示されない

**A:** テーマが正しくアップロードされ、有効化されているか確認してください。

### Q2: スラッグを間違えた

**A:** 固定ページの編集画面で**パーマリンク**の「編集」ボタンをクリックして修正できます。

### Q3: リンクが404エラー

**A:** **設定 → パーマリンク設定**を開いて、**変更を保存**をクリックしてください（設定変更不要、保存のみ）。

---

## 🔗 詳細ドキュメント

詳しい情報は [README.md](README.md) を参照してください。

---

**🎊 お疲れ様でした！WordPressサイトの移行が完了しました。**
