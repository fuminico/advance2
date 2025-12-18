<?php
/**
 * Template Name: Front Page
 * Description: トップページテンプレート
 */

get_header(); ?>

    <!-- ヒーローセクション -->
    <section class="hero" id="top">
        <div class="hero-overlay"></div>
        <div class="hero-bg" style="background-image: url(<?php echo advance_get_image_url('hero-top.jpg'); ?>);"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title fade-in">
                    中小企業のビジネス成長を支える、<br>
                    <span class="highlight">信頼のデジタルパートナー</span>
                </h1>
                <p class="hero-description fade-in delay-1">
                    システム開発からWEBマーケティング、AI研修まで。<br>
                    当社は、お客様の事業成長に伴走し、最適なデジタルソリューションを提供します。
                </p>
                <div class="hero-cta fade-in delay-2">
                    <a href="#contact" class="btn btn-primary btn-lg">お問い合わせ</a>
                    <a href="#services" class="btn btn-outline btn-lg">サービス詳細</a>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <span>SCROLL</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <!-- 事業内容ダイジェスト -->
    <section class="section services" id="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">事業内容</h2>
                <p class="section-subtitle">4つの事業領域で、貴社のデジタル化を総合的にサポートします</p>
            </div>
            <div class="services-grid">
                <!-- システム開発事業 -->
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'service-system' ) ) ); ?>" class="service-card-link">
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo advance_get_image_url('service-system.jpg'); ?>" alt="システム開発事業 - スマホアプリ・Webアプリケーション・クラウドインフラ構築">
                        <div class="service-number">01</div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">システム開発事業</h3>
                        <p class="service-description">
                            スマホアプリ（iOS/Android）、Webアプリケーション開発から、AWS中心のクラウドインフラ構築・運用、品質保証・テスト支援まで、幅広く対応します。
                        </p>
                        <ul class="service-features">
                            <li>スマホアプリ開発</li>
                            <li>Webアプリケーション開発</li>
                            <li>クラウドインフラ構築</li>
                            <li>品質保証・テスト</li>
                        </ul>
                    </div>
                </div>
                </a>

                <!-- ホームページ制作事業 -->
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'service-web' ) ) ); ?>" class="service-card-link">
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo advance_get_image_url('service-web.jpg'); ?>" alt="ホームページ制作事業 - コーポレートサイト・サービスサイト・採用サイト・LP制作">
                        <div class="service-number">02</div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">ホームページ制作事業</h3>
                        <p class="service-description">
                            コーポレートサイト、サービスサイト、オウンドメディア、採用サイト、LPまで、貴社のブランド価値を高めるWebサイトを制作します。
                        </p>
                        <ul class="service-features">
                            <li>コーポレートサイト制作</li>
                            <li>サービスサイト制作</li>
                            <li>オウンドメディア構築</li>
                            <li>採用サイト・LP制作</li>
                        </ul>
                    </div>
                </div>
                </a>

                <!-- WEBマーケティング事業 -->
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'service-marketing' ) ) ); ?>" class="service-card-link">
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo advance_get_image_url('service-marketing.jpg'); ?>" alt="WEBマーケティング事業 - リスティング広告・SNS広告運用代行">
                        <div class="service-number">03</div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">WEBマーケティング事業</h3>
                        <p class="service-description">
                            リスティング広告、SNS広告（Facebook、Instagram、X、LINE）の運用代行から、効果的な広告クリエイティブ制作まで一貫してサポートします。
                        </p>
                        <ul class="service-features">
                            <li>リスティング広告運用</li>
                            <li>SNS広告運用代行</li>
                            <li>広告クリエイティブ制作</li>
                            <li>効果測定・改善提案</li>
                        </ul>
                    </div>
                </div>
                </a>

                <!-- AI研修事業 -->
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'service-ai' ) ) ); ?>" class="service-card-link">
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo advance_get_image_url('service-ai.jpg'); ?>" alt="AI研修事業 - AIリーダー育成プログラム・カスタムカリキュラム">
                        <div class="service-number">04</div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">AI研修事業</h3>
                        <p class="service-description">
                            AIリーダー育成プログラムや、企業ニーズに合わせたカスタムカリキュラムで、実務に即したハンズオン研修を提供します。
                        </p>
                        <ul class="service-features">
                            <li>AIリーダー育成プログラム</li>
                            <li>カスタムカリキュラム設計</li>
                            <li>ハンズオン研修</li>
                            <li>実務支援・コンサルティング</li>
                        </ul>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 数字で見る当社 -->
    <section class="section" style="background: white; padding: 5rem 0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 4rem;">
                <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: var(--color-text); margin-bottom: 1rem;">数字で見る当社</h2>
                <p class="section-subtitle" style="font-size: 1.15rem; color: var(--color-text-light);">お客様に選ばれ続ける理由を、数字が証明します</p>
            </div>
            
            <!-- 画像左 + 数字右 の横並びレイアウト -->
            <div style="display: grid; grid-template-columns: 45% 1fr; gap: 4rem; align-items: center; background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); padding: 3rem; border-radius: 20px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);">
                <!-- 左側：画像 -->
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.12);">
                    <img src="<?php echo advance_get_image_url('company-achievements.jpg'); ?>" alt="当社の実績" style="width: 100%; height: auto; display: block;">
                </div>
                
                <!-- 右側：数字グリッド -->
                <div>
                    <h3 style="font-size: 1.8rem; font-weight: 700; color: var(--color-text); margin-bottom: 2.5rem; line-height: 1.4;">確かな実績と、お客様からの信頼</h3>
                    
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem;">
                        <!-- 数字1: 創業年数 -->
                        <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);">
                            <div style="font-size: 3rem; font-weight: 700; color: #EC4899; margin-bottom: 0.5rem; line-height: 1;">2<span style="font-size: 1.8rem;">年目</span></div>
                            <div style="font-size: 1.05rem; font-weight: 600; color: var(--color-text);">実績</div>
                            <div style="font-size: 1rem; color: var(--color-text-light); margin-top: 0.5rem;">2023年7月創業</div>
                        </div>

                        <!-- 数字2: 支援企業数 -->
                        <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);">
                            <div style="font-size: 3rem; font-weight: 700; color: #8B5CF6; margin-bottom: 0.5rem; line-height: 1;">50<span style="font-size: 1.8rem;">社</span></div>
                            <div style="font-size: 1.05rem; font-weight: 600; color: var(--color-text);">支援</div>
                            <div style="font-size: 1rem; color: var(--color-text-light); margin-top: 0.5rem;">支援企業数</div>
                        </div>

                        <!-- 数字3: 継続率 -->
                        <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);">
                            <div style="font-size: 3rem; font-weight: 700; color: #10B981; margin-bottom: 0.5rem; line-height: 1;">95<span style="font-size: 1.8rem;">%</span></div>
                            <div style="font-size: 1.05rem; font-weight: 600; color: var(--color-text);">継続率</div>
                            <div style="font-size: 1rem; color: var(--color-text-light); margin-top: 0.5rem;">お客様満足度</div>
                        </div>

                        <!-- 数字4: 専門チーム -->
                        <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);">
                            <div style="font-size: 3rem; font-weight: 700; color: #F59E0B; margin-bottom: 0.5rem; line-height: 1;">20<span style="font-size: 1.8rem;">名</span></div>
                            <div style="font-size: 1.05rem; font-weight: 600; color: var(--color-text);">体制</div>
                            <div style="font-size: 1rem; color: var(--color-text-light); margin-top: 0.5rem;">専門チーム体制</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- レスポンシブ対応 -->
        <style>
            @media (max-width: 1024px) {
                .section > .container > div:last-child {
                    grid-template-columns: 1fr !important;
                    gap: 2rem !important;
                }
            }
        </style>
    </section>

    <!-- 当社の強み -->
    <section class="section strengths" id="strengths" style="background: var(--color-bg-gray); padding: 5rem 0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 5rem;">
                <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: var(--color-text); margin-bottom: 1rem;">当社の強み</h2>
                <p class="section-subtitle" style="font-size: 1.15rem; color: var(--color-text-light);">3つの強みで、貴社のビジネス成長を確実にサポートします</p>
            </div>
            
            <!-- 強み1: 伴走型の支援体制（画像左 + テキスト右） -->
            <div style="display: grid; grid-template-columns: 45% 1fr; gap: 4rem; align-items: center; margin-bottom: 5rem; background: linear-gradient(135deg, #F0FDF4 0%, #DCFCE7 100%); padding: 3rem; border-radius: 20px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);">
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.12);">
                    <img src="<?php echo advance_get_image_url('support-system.jpg'); ?>" alt="伴走型の支援体制" style="width: 100%; height: auto; display: block;">
                </div>
                <div>
                    <div style="display: inline-block; background: linear-gradient(135deg, #10B981 0%, #059669 100%); color: white; padding: 0.5rem 1.5rem; border-radius: 50px; font-size: 1rem; font-weight: 600; margin-bottom: 1.5rem;">強み 01</div>
                    <h3 style="font-size: 2rem; font-weight: 700; color: var(--color-text); margin-bottom: 1.5rem;">伴走型の支援体制</h3>
                    <p style="color: var(--color-text-light); line-height: 1.9; font-size: 1.05rem; margin-bottom: 2rem;">
                        単なる納品で終わらせず、運用・改善まで継続的にサポート。貴社の成長パートナーとして、長期的な視点で支援します。お客様の事業成長に真摯に向き合い、継続的な価値提供を実現します。
                    </p>
                    <ul style="color: var(--color-text-light); line-height: 2.2; list-style: none; padding-left: 0; font-size: 1.05rem;">
                        <li style="padding-left: 2rem; position: relative; margin-bottom: 0.8rem;">
                            <span style="position: absolute; left: 0; color: #10B981; font-size: 1.3rem; font-weight: 700;">✓</span>
                            継続率 <strong style="color: #10B981; font-size: 1.2rem;">95%</strong> の高い満足度
                        </li>
                        <li style="padding-left: 2rem; position: relative; margin-bottom: 0.8rem;">
                            <span style="position: absolute; left: 0; color: #10B981; font-size: 1.3rem; font-weight: 700;">✓</span>
                            運用・改善まで一貫サポート
                        </li>
                        <li style="padding-left: 2rem; position: relative;">
                            <span style="position: absolute; left: 0; color: #10B981; font-size: 1.3rem; font-weight: 700;">✓</span>
                            長期的なパートナーシップ
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 強み2: ワンストップ体制（テキスト左 + 画像右） -->
            <div style="display: grid; grid-template-columns: 1fr 45%; gap: 4rem; align-items: center; margin-bottom: 5rem; background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); padding: 3rem; border-radius: 20px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);">
                <div>
                    <div style="display: inline-block; background: linear-gradient(135deg, #EC4899 0%, #F472B6 100%); color: white; padding: 0.5rem 1.5rem; border-radius: 50px; font-size: 1rem; font-weight: 600; margin-bottom: 1.5rem;">強み 02</div>
                    <h3 style="font-size: 2rem; font-weight: 700; color: var(--color-text); margin-bottom: 1.5rem;">ワンストップ体制</h3>
                    <p style="color: var(--color-text-light); line-height: 1.9; font-size: 1.05rem; margin-bottom: 2rem;">
                        4つの事業領域を統合運営し、複数の課題をまとめて解決。システム開発・WEB制作・マーケティング・AI研修を社内一貫体制で提供するため、スムーズな連携と高い品質を実現します。
                    </p>
                    <ul style="color: var(--color-text-light); line-height: 2.2; list-style: none; padding-left: 0; font-size: 1.05rem;">
                        <li style="padding-left: 2rem; position: relative; margin-bottom: 0.8rem;">
                            <span style="position: absolute; left: 0; color: #EC4899; font-size: 1.3rem; font-weight: 700;">✓</span>
                            システム×マーケティング連携
                        </li>
                        <li style="padding-left: 2rem; position: relative; margin-bottom: 0.8rem;">
                            <span style="position: absolute; left: 0; color: #EC4899; font-size: 1.3rem; font-weight: 700;">✓</span>
                            社内一貫体制でスピーディ
                        </li>
                        <li style="padding-left: 2rem; position: relative;">
                            <span style="position: absolute; left: 0; color: #EC4899; font-size: 1.3rem; font-weight: 700;">✓</span>
                            複数課題を統合解決
                        </li>
                    </ul>
                </div>
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.12);">
                    <img src="<?php echo advance_get_image_url('onestop-system.jpg'); ?>" alt="ワンストップ体制" style="width: 100%; height: auto; display: block;">
                </div>
            </div>

            <!-- 強み3: 中小企業に特化（画像左 + テキスト右） -->
            <div style="display: grid; grid-template-columns: 45% 1fr; gap: 4rem; align-items: center; background: linear-gradient(135deg, #FDF2F8 0%, #FCE7F3 100%); padding: 3rem; border-radius: 20px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);">
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.12);">
                    <img src="<?php echo advance_get_image_url('sme-specialized.jpg'); ?>" alt="中小企業に特化" style="width: 100%; height: auto; display: block;">
                </div>
                <div>
                    <div style="display: inline-block; background: linear-gradient(135deg, #EC4899 0%, #DB2777 100%); color: white; padding: 0.5rem 1.5rem; border-radius: 50px; font-size: 1rem; font-weight: 600; margin-bottom: 1.5rem;">強み 03</div>
                    <h3 style="font-size: 2rem; font-weight: 700; color: var(--color-text); margin-bottom: 1.5rem;">中小企業に特化した支援</h3>
                    <p style="color: var(--color-text-light); line-height: 1.9; font-size: 1.05rem; margin-bottom: 2rem;">
                        創業以来、中小企業のお客様を中心に支援してきました。中小企業特有の課題を深く理解し、予算や体制に合わせた柔軟な提案を実施。無理のない範囲で、最大限の効果を生み出します。
                    </p>
                    <ul style="color: var(--color-text-light); line-height: 2.2; list-style: none; padding-left: 0; font-size: 1.05rem;">
                        <li style="padding-left: 2rem; position: relative; margin-bottom: 0.8rem;">
                            <span style="position: absolute; left: 0; color: #EC4899; font-size: 1.3rem; font-weight: 700;">✓</span>
                            <strong style="color: #EC4899; font-size: 1.2rem;">中小企業中心</strong> の支援実績
                        </li>
                        <li style="padding-left: 2rem; position: relative; margin-bottom: 0.8rem;">
                            <span style="position: absolute; left: 0; color: #EC4899; font-size: 1.3rem; font-weight: 700;">✓</span>
                            柔軟な予算・体制対応
                        </li>
                        <li style="padding-left: 2rem; position: relative;">
                            <span style="position: absolute; left: 0; color: #EC4899; font-size: 1.3rem; font-weight: 700;">✓</span>
                            多様な業界の知見
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- レスポンシブ対応 -->
        <style>
            @media (max-width: 1024px) {
                .strengths > .container > div {
                    grid-template-columns: 1fr !important;
                    gap: 2rem !important;
                    padding: 2rem !important;
                }
                .strengths h3 {
                    font-size: 1.5rem !important;
                }
            }
        </style>
    </section>

    <!-- 制作実績ハイライト -->
    <section class="section works" id="works" style="padding: 5rem 0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 4rem;">
                <h2 class="section-title" style="font-size: 2.5rem; font-weight: 700; color: var(--color-text); margin-bottom: 1rem;">制作実績</h2>
                <p class="section-subtitle" style="font-size: 1.15rem; color: var(--color-text-light);">多様な業界のお客様と、数々のプロジェクトを成功に導いてきました</p>
            </div>
            <div class="works-grid" style="display: grid; gap: 3rem;">
                <div class="work-card" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12); transition: all 0.4s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-12px)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.18)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 30px rgba(0, 0, 0, 0.12)';">
                    <div class="work-image" style="overflow: hidden; position: relative;">
                        <img src="<?php echo advance_get_image_url('case-manufacturing.jpg'); ?>" alt="製造業様 業務管理システム開発 - 受注から生産・出荷まで一元管理" style="width: 100%; height: auto; display: block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
                    </div>
                    <div class="work-content" style="padding: 2.5rem;">
                        <div class="work-category" style="display: inline-block; background: linear-gradient(135deg, #EC4899 0%, #F472B6 100%); color: white; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 600; margin-bottom: 1rem;">システム開発</div>
                        <h3 class="work-title" style="font-size: 1.5rem; font-weight: 700; color: var(--color-text); margin-bottom: 1rem; line-height: 1.4;">製造業様 業務管理システム開発</h3>
                        <p class="work-description" style="color: var(--color-text-light); line-height: 1.8; margin-bottom: 1.5rem; font-size: 1.05rem;">
                            受注から生産、出荷までを一元管理するシステムを構築。業務効率が40%向上し、ヒューマンエラーも大幅に削減されました。
                        </p>
                        <div class="work-tags" style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                            <span class="tag" style="background: #FCE7F3; color: #EC4899; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 500;">Webアプリ</span>
                            <span class="tag" style="background: #FCE7F3; color: #EC4899; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 500;">AWS</span>
                            <span class="tag" style="background: #FCE7F3; color: #EC4899; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 500;">業務効率化</span>
                        </div>
                    </div>
                </div>

                <div class="work-card" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12); transition: all 0.4s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-12px)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.18)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 30px rgba(0, 0, 0, 0.12)';">
                    <div class="work-image" style="overflow: hidden; position: relative;">
                        <img src="https://www.genspark.ai/api/files/s/ve5EFQDv?cache_control=3600" alt="小売業様 コーポレートサイトリニューアル - ブランドイメージ刷新と採用強化" style="width: 100%; height: auto; display: block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
                    </div>
                    <div class="work-content" style="padding: 2.5rem;">
                        <div class="work-category" style="display: inline-block; background: linear-gradient(135deg, #10B981 0%, #059669 100%); color: white; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 600; margin-bottom: 1rem;">HP制作</div>
                        <h3 class="work-title" style="font-size: 1.5rem; font-weight: 700; color: var(--color-text); margin-bottom: 1rem; line-height: 1.4;">小売業様 コーポレートサイトリニューアル</h3>
                        <p class="work-description" style="color: var(--color-text-light); line-height: 1.8; margin-bottom: 1.5rem; font-size: 1.05rem;">
                            ブランドイメージを刷新し、採用サイトも統合。サイト訪問者数が3倍に増加し、採用応募も大幅に増えました。
                        </p>
                        <div class="work-tags" style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                            <span class="tag" style="background: #D1FAE5; color: #059669; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 500;">コーポレートサイト</span>
                            <span class="tag" style="background: #D1FAE5; color: #059669; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 500;">レスポンシブ</span>
                            <span class="tag" style="background: #D1FAE5; color: #059669; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 500;">採用強化</span>
                        </div>
                    </div>
                </div>

                <div class="work-card" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12); transition: all 0.4s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-12px)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.18)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 30px rgba(0, 0, 0, 0.12)';">
                    <div class="work-image" style="overflow: hidden; position: relative;">
                        <img src="https://www.genspark.ai/api/files/s/ZtBfczPY?cache_control=3600" alt="サービス業様 WEB広告運用支援 - CV数2.5倍向上と質の高いリード獲得" style="width: 100%; height: auto; display: block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
                    </div>
                    <div class="work-content" style="padding: 2.5rem;">
                        <div class="work-category" style="display: inline-block; background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%); color: white; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 600; margin-bottom: 1rem;">マーケティング</div>
                        <h3 class="work-title" style="font-size: 1.5rem; font-weight: 700; color: var(--color-text); margin-bottom: 1rem; line-height: 1.4;">サービス業様 WEB広告運用支援</h3>
                        <p class="work-description" style="color: var(--color-text-light); line-height: 1.8; margin-bottom: 1.5rem; font-size: 1.05rem;">
                            Google広告とSNS広告を最適化し、CV数が2.5倍に向上。広告費の無駄を削減しながら、質の高いリードを獲得しました。
                        </p>
                        <div class="work-tags" style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                            <span class="tag" style="background: #F3E8FF; color: #7C3AED; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 500;">リスティング広告</span>
                            <span class="tag" style="background: #F3E8FF; color: #7C3AED; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 500;">SNS広告</span>
                            <span class="tag" style="background: #F3E8FF; color: #7C3AED; padding: 0.4rem 1rem; border-radius: 50px; font-size: 1rem; font-weight: 500;">CV向上</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 支援の進め方 -->
    <section class="section flow">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">支援の進め方</h2>
                <p class="section-subtitle">5つのステップで、確実にプロジェクトを成功に導きます</p>
            </div>
            <div class="flow-container">
                <div class="flow-step">
                    <div class="flow-number">01</div>
                    <div class="flow-content">
                        <h3 class="flow-title">お問い合わせ・ヒアリング</h3>
                        <p class="flow-description">
                            貴社の課題や目標をヒアリングします。
                        </p>
                    </div>
                </div>

                <div class="flow-arrow">→</div>

                <div class="flow-step">
                    <div class="flow-number">02</div>
                    <div class="flow-content">
                        <h3 class="flow-title">課題分析・提案</h3>
                        <p class="flow-description">
                            最適なソリューションと提案書をご提示します。
                        </p>
                    </div>
                </div>

                <div class="flow-arrow">→</div>

                <div class="flow-step">
                    <div class="flow-number">03</div>
                    <div class="flow-content">
                        <h3 class="flow-title">ご契約・開始</h3>
                        <p class="flow-description">
                            ご契約後、プロジェクトをスタートします。
                        </p>
                    </div>
                </div>

                <div class="flow-arrow">→</div>

                <div class="flow-step">
                    <div class="flow-number">04</div>
                    <div class="flow-content">
                        <h3 class="flow-title">開発・制作・運用</h3>
                        <p class="flow-description">
                            進捗報告を行いながら進めます。
                        </p>
                    </div>
                </div>

                <div class="flow-arrow">→</div>

                <div class="flow-step">
                    <div class="flow-number">05</div>
                    <div class="flow-content">
                        <h3 class="flow-title">改善・最適化</h3>
                        <p class="flow-description">
                            継続的な改善で長期的にサポート。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 会社概要 -->
    <section class="section company" id="company">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">会社概要</h2>
                <p class="section-subtitle">当社について</p>
            </div>
            <div class="company-content">
                <div class="company-images">
                    <div class="company-image">
                        <img src="https://www.genspark.ai/api/files/s/leqLAaSy?cache_control=3600" alt="株式会社アドバンス - 東京新宿のオフィスビル">
                    </div>
                </div>
                <div class="company-info">
                    <table class="company-table">
                        <tr>
                            <th>会社名</th>
                            <td>株式会社アドバンス</td>
                        </tr>
                        <tr>
                            <th>代表取締役</th>
                            <td>吉澤 仁</td>
                        </tr>
                        <tr>
                            <th>設立</th>
                            <td>2023年7月</td>
                        </tr>
                        <tr>
                            <th>資本金</th>
                            <td>500万円</td>
                        </tr>
                        <tr>
                            <th>従業員数</th>
                            <td>15名（業務委託含む）</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>〒160-0022<br>東京都新宿区新宿六丁目7番3号</td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>
                                ・システム開発事業<br>
                                ・ホームページ制作事業<br>
                                ・WEBマーケティング事業<br>
                                ・AI研修事業
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section cta" id="contact">
        <div class="cta-overlay"></div>
        <div class="cta-bg" style="background-image: url('https://www.genspark.ai/api/files/s/UqCOovlv?cache_control=3600');"></div>
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">お気軽にご相談ください</h2>
                <p class="cta-description">
                    貴社のビジネス課題やデジタル化についてのご相談を承ります。<br>
                    まずはお気軽にお問い合わせください。
                </p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn-primary btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        お問い合わせフォームへ
                    </a>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
