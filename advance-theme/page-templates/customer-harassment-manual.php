<?php
/**
 * Template Name: カスタマーハラスメント対応マニュアル
 * Template Post Type: page
 * Description: カスタマーハラスメント対応マニュアルページテンプレート
 */

get_header(); ?>

<!-- ヘッダー -->
    

    <!-- ヒーローセクション -->
    <section class="service-hero">
        <div class="service-hero-bg" style="background-image: url(<?php echo advance_get_image_url('hero-harassment-manual.jpg'); ?>);"></div>
        <div class="service-hero-overlay"></div>
        <div class="container">
            <div class="service-hero-content">
                <div class="service-category-badge">社内向けお知らせ</div>
                <h1 class="service-hero-title">社内向け<br>カスタマーハラスメント<br>対応マニュアルの整備について</h1>
                <p class="service-hero-description">
                    従業員が安心して業務に取り組める環境づくりを推進しています。
                </p>
            </div>
        </div>
    </section>

    <!-- メインコンテンツ -->
    <section class="section">
        <div class="container">
            <div class="content-wrapper">
                <!-- 挨拶 -->
                <div class="content-section">
                    <h2 class="content-title">従業員各位</h2>
                    <div class="content-text">
                        <p style="text-align: right; margin-bottom: 2rem;"><strong>株式会社アドバンス</strong></p>
                        <p>日頃より、各業務へのご協力に感謝いたします。</p>
                        <p>当社では、業務の現場において従業員が不安や過度な負担を感じることなく対応できる体制を整えるため、社内用「カスタマーハラスメント対応マニュアル」を作成し、全社での共有を開始しました。</p>
                    </div>
                </div>

                <!-- マニュアルの位置づけ -->
                <div class="content-section bg-light">
                    <div class="content-text">
                        <p>本マニュアルは、特定のケースを一律に判断するものではなく、現場で判断に迷う場面において、会社としての考え方や対応の進め方を示すための指針です。個人の判断に委ねるのではなく、組織として対応することを前提としています。</p>
                    </div>
                </div>

                <!-- マニュアルの内容 -->
                <div class="content-section">
                    <h2 class="content-title">マニュアルには、主に以下の内容を整理しています。</h2>
                    <div class="content-text">
                        <ul class="feature-list">
                            <li>不適切な要求や言動に対する基本的な捉え方</li>
                            <li>業務中に想定される場面での初期対応の考え方</li>
                            <li>社内での共有・相談の進め方</li>
                            <li>会社として対応方針を判断する際の基準</li>
                        </ul>
                    </div>
                </div>

                <!-- 相談のお願い -->
                <div class="content-section bg-primary-light">
                    <div class="content-text">
                        <p>対応に不安を感じた場合や、状況の判断が難しいと感じた場合は、一人で対応を続けることなく、マニュアルを参照のうえ早めに社内へ相談してください。</p>
                        <p>当社は、従業員の安全と尊厳を守ることを重要な責務と考えると同時に、業務に関する正当な意見や要望については、引き続き誠実に向き合ってまいります。</p>
                    </div>
                </div>

                <!-- 社内資料のご案内 -->
                <div class="content-section">
                    <h2 class="content-title">社内資料のご案内</h2>
                    <div class="content-text">
                        <p>以下より、社内向けカスタマーハラスメント対応マニュアルを確認できます。日常業務に関わる重要な内容となりますので、必ず内容をご確認ください。</p>
                    </div>

                    <!-- PDF.js カスタムビューアー -->
                    <div class="pdf-viewer-container">
                        <div class="pdf-viewer-header">
                            <h3>カスタマーハラスメント対応マニュアル（社内専用）</h3>
                            <p>以下のPDFで詳細な対応マニュアルをご確認いただけます。</p>
                        </div>
                        
                        <!-- PDFコントロールバー -->
                        <div class="pdf-controls">
                            <div class="pdf-controls-left">
                                <button id="prev" class="pdf-btn" title="前のページ">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>
                                <span class="pdf-page-info">
                                    <span id="page_num">1</span> / <span id="page_count">--</span>
                                </span>
                                <button id="next" class="pdf-btn" title="次のページ">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                            <div class="pdf-controls-right">
                                <button id="zoom-out" class="pdf-btn" title="縮小">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="8" y1="11" x2="14" y2="11"></line>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                                <button id="zoom-in" class="pdf-btn" title="拡大">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="11" y1="8" x2="11" y2="14"></line>
                                        <line x1="8" y1="11" x2="14" y2="11"></line>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- PDFキャンバス -->
                        <div class="pdf-canvas-wrapper">
                            <div id="pdf-loading" class="pdf-loading">
                                <div class="spinner"></div>
                                <p>PDFを読み込み中...</p>
                            </div>
                            <canvas id="pdf-canvas"></canvas>
                        </div>
                        
                        <div class="pdf-viewer-footer">
                            <p><small>※ PDFが表示されない場合は、<a href="https://www.genspark.ai/api/files/s/yFhwsShg" target="_blank" rel="noopener noreferrer" class="text-link">こちらから直接ダウンロード</a>してご覧ください。</small></p>
                            <p style="margin-top: 1rem;"><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'harassment-policy' ) ) ); ?>" class="btn btn-outline">基本方針ページを確認する</a></p>
                        </div>
                    </div>

                    <div class="content-text">
                        <p>本資料は社内利用を目的としたものです。業務上必要な範囲での閲覧・参照に限り、社外への提供、転載、または私的目的での使用は禁止します。</p>
                    </div>
                </div>

                <!-- メッセージ -->
                <div class="content-section bg-light">
                    <div class="content-text">
                        <p>今後も、働きやすい業務環境の維持・向上に向け、皆さまのご理解とご協力をお願いいたします。</p>
                        <p style="text-align: center; margin-top: 2rem;"><strong>以上</strong></p>
                        <p style="text-align: center; margin-top: 1.5rem; font-weight: 600; color: var(--color-text);">周知日：2025年12月16日</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">社内相談窓口</h2>
                <p class="cta-description">
                    対応に困った場合や不安を感じた場合は、<br>
                    お気軽に社内担当者までご相談ください。
                </p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn-primary btn-lg">お問い合わせ</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-outline btn-lg">トップページへ</a>
                </div>
            </div>
        </div>
    </section>

    <!-- フッター -->
    

    
    
    <!-- PDF.js ライブラリ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    
    <!-- カスタムPDFビューアー -->
    <script src="js/pdf-viewer.js?v=20250117a"></script>
    <script>
        // PDFビューアーを初期化
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOMContentLoaded fired');
            console.log('pdfjsLib available:', typeof pdfjsLib !== 'undefined');
            console.log('initPDFViewer available:', typeof initPDFViewer === 'function');

            if (typeof initPDFViewer === 'function') {
                console.log('Initializing PDF viewer with path: ./<?php echo get_template_directory_uri(); ?>/assets/pdfs/advance-manual.pdf');
                initPDFViewer('./<?php echo get_template_directory_uri(); ?>/assets/pdfs/advance-manual.pdf');
            } else {
                console.error('initPDFViewer function not found');
            }
        });
    </script>

<?php get_footer(); ?>
