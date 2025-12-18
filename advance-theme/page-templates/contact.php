<?php
/**
 * Template Name: お問い合わせ
 * Template Post Type: page
 * Description: お問い合わせページテンプレート
 */

get_header(); ?>

<!-- ヘッダー -->
    

    <!-- ページヘッダー -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">お問い合わせ</h1>
            <p class="page-description">
                貴社のビジネス課題やデジタル化についてのご相談を承ります。<br>
                お気軽にお問い合わせください。
            </p>
        </div>
    </section>

    <!-- お問い合わせフォーム -->
    <section class="section contact-form-section">
        <div class="container">
            <div class="contact-wrapper">
                <!-- 左側：フォーム -->
                <div class="form-container">
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <label for="company" class="form-label">
                                会社名 <span class="required">必須</span>
                            </label>
                            <input 
                                type="text" 
                                id="company" 
                                name="company" 
                                class="form-input" 
                                required
                                placeholder="株式会社○○○○"
                            >
                        </div>

                        <div class="form-group">
                            <label for="name" class="form-label">
                                お名前 <span class="required">必須</span>
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="form-input" 
                                required
                                placeholder="山田 太郎"
                            >
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">
                                メールアドレス <span class="required">必須</span>
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-input" 
                                required
                                placeholder="example@company.co.jp"
                            >
                        </div>

                        <div class="form-group">
                            <label for="tel" class="form-label">
                                電話番号 <span class="optional">任意</span>
                            </label>
                            <input 
                                type="tel" 
                                id="tel" 
                                name="tel" 
                                class="form-input"
                                placeholder="090-1234-5678"
                            >
                        </div>

                        <div class="form-group">
                            <label for="service" class="form-label">
                                ご興味のあるサービス <span class="required">必須</span>
                            </label>
                            <select id="service" name="service" class="form-select" required>
                                <option value="">選択してください</option>
                                <option value="システム開発">システム開発事業</option>
                                <option value="ホームページ制作">ホームページ制作事業</option>
                                <option value="WEBマーケティング">WEBマーケティング事業</option>
                                <option value="AI研修">AI研修事業</option>
                                <option value="その他">その他・複数のサービス</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="budget" class="form-label">
                                ご予算 <span class="optional">任意</span>
                            </label>
                            <select id="budget" name="budget" class="form-select">
                                <option value="">選択してください</option>
                                <option value="~50万円">〜50万円</option>
                                <option value="50万円~100万円">50万円〜100万円</option>
                                <option value="100万円~300万円">100万円〜300万円</option>
                                <option value="300万円~500万円">300万円〜500万円</option>
                                <option value="500万円~">500万円〜</option>
                                <option value="未定">未定</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">
                                お問い合わせ内容 <span class="required">必須</span>
                            </label>
                            <textarea 
                                id="message" 
                                name="message" 
                                class="form-textarea" 
                                rows="6" 
                                required
                                placeholder="具体的なご相談内容やご質問をご記入ください"
                            ></textarea>
                        </div>

                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="privacy" name="privacy" required>
                                <span>
                                    <a href="#privacy-policy" class="link">個人情報保護方針</a>に同意します
                                </span>
                            </label>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                送信する
                            </button>
                        </div>
                    </form>

                    <!-- 送信完了メッセージ -->
                    <div class="form-success" id="formSuccess" style="display: none;">
                        <div class="success-icon">✓</div>
                        <h3 class="success-title">お問い合わせありがとうございます</h3>
                        <p class="success-message">
                            お問い合わせを受け付けました。<br>
                            内容を確認の上、2営業日以内に担当者よりご連絡させていただきます。
                        </p>
                        <button class="btn btn-outline" onclick="location.href="<?php echo esc_url( home_url( '/' ) ); ?>"">
                            トップページに戻る
                        </button>
                    </div>
                </div>

                <!-- 右側：コンタクト情報 -->
                <div class="contact-info">
                    <div class="info-card">
                        <div class="info-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <h3 class="info-title">メールでのお問い合わせ</h3>
                        <p class="info-detail">お問い合わせフォームをご利用ください</p>
                        <p class="info-note">24時間受付</p>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <h3 class="info-title">所在地</h3>
                        <p class="info-detail">
                            〒160-0022<br>
                            東京都新宿区新宿六丁目7番3号
                        </p>
                    </div>

                    <div class="info-note-box">
                        <h4>ご相談の流れ</h4>
                        <ol class="flow-list">
                            <li>お問い合わせフォーム送信</li>
                            <li>担当者より2営業日以内にご連絡</li>
                            <li>ヒアリング・ご提案</li>
                            <li>お見積もり提示</li>
                            <li>ご契約・プロジェクト開始</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 個人情報保護方針（簡易版） -->
    <section class="section privacy-section" id="privacy-policy">
        <div class="container">
            <div class="privacy-content">
                <h2 class="section-title">個人情報保護方針</h2>
                <div class="privacy-text">
                    <p>
                        株式会社アドバンス（以下「当社」）は、お客様の個人情報の保護に万全を期すため、以下の方針に基づき個人情報の適切な取り扱いに努めます。
                    </p>
                    <h3>1. 個人情報の収集について</h3>
                    <p>
                        当社は、適法かつ公正な手段によって個人情報を取得いたします。お問い合わせフォームでご入力いただいた情報は、お問い合わせ対応のためにのみ使用いたします。
                    </p>
                    <h3>2. 個人情報の利用目的</h3>
                    <ul>
                        <li>お問い合わせへの対応</li>
                        <li>サービスのご案内・ご提案</li>
                        <li>お見積もりの作成</li>
                        <li>契約の履行</li>
                    </ul>
                    <h3>3. 個人情報の第三者への提供</h3>
                    <p>
                        当社は、法令に基づく場合を除き、お客様の同意なく個人情報を第三者に提供することはありません。
                    </p>
                    <h3>4. 個人情報の管理</h3>
                    <p>
                        当社は、個人情報の漏洩、滅失、毀損等を防止するため、適切な安全管理措置を講じます。
                    </p>
                    <h3>5. お問い合わせ窓口</h3>
                    <p>
                        個人情報の取り扱いに関するお問い合わせは、お問い合わせフォームよりご連絡ください。<br>
                        株式会社アドバンス
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- フッター -->
    

    
    <script src="js/contact.js"></script>

<?php get_footer(); ?>
