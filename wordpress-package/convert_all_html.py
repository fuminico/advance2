#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
WordPress HTML一括変換スクリプト
全HTMLファイルをWordPress固定ページ形式に自動変換
"""

import os
import re

# 設定
ORIGINAL_HTML_DIR = 'original-html'
CONVERTED_HTML_DIR = 'converted-html'
CSS_FILE = 'css/style.css'
JS_FILE = 'js/main.js'
THEME_NAME = 'advance-child-theme'

# HTMLファイルリスト
HTML_FILES = [
    'index.html',
    'service-system.html',
    'service-web.html',
    'service-marketing.html',
    'service-ai.html',
    'corporate-site.html',
    'service-site.html',
    'owned-media.html',
    'recruit-site.html',
    'lp-creation.html',
    'website-operation.html',
    'listing-ads.html',
    'sns-ads.html',
    'instagram-ads.html',
    'line-ads.html',
    'contact.html'
]

def read_file(filepath):
    """ファイルを読み込む"""
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            return f.read()
    except Exception as e:
        print(f"❌ ファイル読み込みエラー: {filepath} - {e}")
        return None

def write_file(filepath, content):
    """ファイルを書き込む"""
    try:
        os.makedirs(os.path.dirname(filepath), exist_ok=True)
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        return True
    except Exception as e:
        print(f"❌ ファイル書き込みエラー: {filepath} - {e}")
        return False

def convert_html(html_content, css_content, js_content):
    """HTMLを変換"""
    
    # 1. CSSリンクを削除
    html_content = re.sub(r'<link[^>]*rel=["|\']stylesheet["|\'][^>]*>', '', html_content)
    
    # 2. CSSをインライン化（</head>の直前に挿入）
    css_tag = f'\n<style>\n{css_content}\n</style>\n'
    html_content = html_content.replace('</head>', f'{css_tag}</head>')
    
    # 3. JSリンクを削除
    html_content = re.sub(r'<script[^>]*src=["|\'][^"\']*["|\'][^>]*></script>', '', html_content)
    
    # 4. JavaScriptをインライン化（</body>の直前に挿入）
    js_tag = f'\n<script>\n{js_content}\n</script>\n'
    html_content = html_content.replace('</body>', f'{js_tag}</body>')
    
    # 5. 画像パスの変換
    # src="images/xxx" → src="/wp-content/themes/advance-child-theme/images/xxx"
    image_base_path = f'/wp-content/themes/{THEME_NAME}/images/'
    html_content = re.sub(
        r'src=["|\']images/([^"\']+)["|\']',
        f'src="{image_base_path}\\1"',
        html_content
    )
    
    # style属性内の画像パスも変換
    # style="background-image: url('images/xxx')" → url('/wp-content/themes/xxx/images/xxx')
    html_content = re.sub(
        r'url\(["\']?images/([^"\']+)["\']?\)',
        f'url("{image_base_path}\\1")',
        html_content
    )
    
    # 6. 内部リンクの変換
    # href="xxx.html" → href="/xxx/"
    # index.html → /
    html_content = re.sub(
        r'href=["|\']index\.html(#[^"\']*)?["|\']',
        'href="/\\1"',
        html_content
    )
    
    # その他のHTMLファイル → /filename/
    html_content = re.sub(
        r'href=["|\']([^"\'#:]+)\.html(#[^"\']*)?["|\']',
        'href="/\\1/\\2"',
        html_content
    )
    
    return html_content

def main():
    """メイン処理"""
    print("=" * 60)
    print("WordPress HTML一括変換スクリプト")
    print("=" * 60)
    print()
    
    # CSSとJavaScriptを読み込み
    print("📂 CSS/JavaScriptファイルを読み込み中...")
    css_content = read_file(CSS_FILE)
    js_content = read_file(JS_FILE)
    
    if not css_content or not js_content:
        print("❌ CSS/JavaScriptファイルの読み込みに失敗しました。")
        return
    
    print(f"✅ CSS読み込み完了: {len(css_content):,} 文字")
    print(f"✅ JS読み込み完了: {len(js_content):,} 文字")
    print()
    
    # 変換先ディレクトリを作成
    os.makedirs(CONVERTED_HTML_DIR, exist_ok=True)
    
    # 各HTMLファイルを変換
    success_count = 0
    fail_count = 0
    
    for html_file in HTML_FILES:
        print(f"🔄 変換中: {html_file}")
        
        # 元のHTMLを読み込み
        input_path = os.path.join(ORIGINAL_HTML_DIR, html_file)
        html_content = read_file(input_path)
        
        if not html_content:
            print(f"   ❌ 読み込み失敗")
            fail_count += 1
            continue
        
        # 変換実行
        converted_html = convert_html(html_content, css_content, js_content)
        
        # 変換後のHTMLを保存
        output_path = os.path.join(CONVERTED_HTML_DIR, html_file)
        if write_file(output_path, converted_html):
            print(f"   ✅ 変換完了: {len(converted_html):,} 文字")
            success_count += 1
        else:
            print(f"   ❌ 書き込み失敗")
            fail_count += 1
    
    # 結果表示
    print()
    print("=" * 60)
    print("変換完了")
    print("=" * 60)
    print(f"✅ 成功: {success_count} ファイル")
    print(f"❌ 失敗: {fail_count} ファイル")
    print()
    print(f"📁 変換後のファイルは {CONVERTED_HTML_DIR}/ に保存されています。")
    print()

if __name__ == '__main__':
    main()
