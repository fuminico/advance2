<!-- フッター -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-info">
                <div class="footer-logo">
                    <span class="logo-text">ADVANCE</span>
                </div>
                <p class="footer-description">
                    中小企業のビジネス成長を支える、<br>
                    信頼のデジタルパートナー
                </p>
                <div class="footer-contact">
                    <p>〒160-0022<br>東京都新宿区新宿六丁目7番3号</p>
                </div>
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h4>サービス</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'service-system' ) ) ); ?>">システム開発</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'service-web' ) ) ); ?>">ホームページ制作</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'service-marketing' ) ) ); ?>">WEBマーケティング</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'service-ai' ) ) ); ?>">AI研修</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>企業情報</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/#company' ) ); ?>">会社概要</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#strengths' ) ); ?>">強み</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#works' ) ); ?>">実績</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>重要なお知らせ</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'call-recording-system' ) ) ); ?>">通話記録システム</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'customer-harassment-manual' ) ) ); ?>">社内向けカスタマーハラスメント対応マニュアル</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> 株式会社アドバンス. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
