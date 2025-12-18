// PDF.js カスタムビューアー
// PDF.js CDN version 3.11.174

let pdfDoc = null;
let pageNum = 1;
let pageRendering = false;
let pageNumPending = null;
let scale = 1.3;
let canvas = null;
let ctx = null;

// PDF.jsのワーカー設定
if (typeof pdfjsLib !== 'undefined') {
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
}

/**
 * PDFページをcanvasにレンダリング
 */
function renderPage(num) {
    pageRendering = true;
    
    // ページを取得
    pdfDoc.getPage(num).then(function(page) {
        // キャンバスラッパーの幅を取得
        const container = canvas.parentElement;
        const containerWidth = container.clientWidth - 32; // パディング分を引く
        
        // 初期ビューポート
        let viewport = page.getViewport({scale: scale});
        
        // コンテナ幅に合わせてスケールを調整
        const scaleToFit = containerWidth / viewport.width;
        if (scaleToFit < scale) {
            viewport = page.getViewport({scale: scaleToFit});
        }
        
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        // レンダリングコンテキスト
        const renderContext = {
            canvasContext: ctx,
            viewport: viewport
        };
        
        const renderTask = page.render(renderContext);

        // レンダリング完了を待つ
        renderTask.promise.then(function() {
            pageRendering = false;
            if (pageNumPending !== null) {
                renderPage(pageNumPending);
                pageNumPending = null;
            }
        });
    });

    // ページ番号を更新
    document.getElementById('page_num').textContent = num;
}

/**
 * ページレンダリングをキューに追加
 */
function queueRenderPage(num) {
    if (pageRendering) {
        pageNumPending = num;
    } else {
        renderPage(num);
    }
}

/**
 * 前のページを表示
 */
function onPrevPage() {
    if (pageNum <= 1) {
        return;
    }
    pageNum--;
    queueRenderPage(pageNum);
    updateButtons();
}

/**
 * 次のページを表示
 */
function onNextPage() {
    if (pageNum >= pdfDoc.numPages) {
        return;
    }
    pageNum++;
    queueRenderPage(pageNum);
    updateButtons();
}

/**
 * ズームイン
 */
function onZoomIn() {
    scale += 0.2;
    queueRenderPage(pageNum);
}

/**
 * ズームアウト
 */
function onZoomOut() {
    if (scale <= 0.4) {
        return;
    }
    scale -= 0.2;
    queueRenderPage(pageNum);
}

/**
 * ボタンの有効/無効を更新
 */
function updateButtons() {
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    
    if (prevBtn && nextBtn) {
        prevBtn.disabled = pageNum <= 1;
        nextBtn.disabled = pageNum >= pdfDoc.numPages;
    }
}

/**
 * PDFを読み込み
 */
function loadPDF(url) {
    const loadingTask = pdfjsLib.getDocument(url);
    
    loadingTask.promise.then(function(pdfDoc_) {
        pdfDoc = pdfDoc_;
        document.getElementById('page_count').textContent = pdfDoc.numPages;

        // 初期ページをレンダリング
        renderPage(pageNum);
        updateButtons();
        
        // ローディング表示を非表示
        const loading = document.getElementById('pdf-loading');
        if (loading) {
            loading.style.display = 'none';
        }
    }).catch(function(error) {
        console.error('PDFの読み込みに失敗しました:', error);
        const loading = document.getElementById('pdf-loading');
        if (loading) {
            loading.innerHTML = '<p style="color: #ef4444;">PDFの読み込みに失敗しました。<a href="' + url + '" target="_blank" rel="noopener noreferrer">こちらから直接ダウンロード</a>してください。</p>';
        }
    });
}

/**
 * PDFビューアーを初期化
 */
function initPDFViewer(pdfUrl) {
    // Canvas要素を取得
    canvas = document.getElementById('pdf-canvas');
    if (!canvas) {
        console.error('Canvas要素が見つかりません');
        return;
    }
    
    ctx = canvas.getContext('2d');
    
    // ボタンにイベントリスナーを設定
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    const zoomInBtn = document.getElementById('zoom-in');
    const zoomOutBtn = document.getElementById('zoom-out');
    
    if (prevBtn) prevBtn.addEventListener('click', onPrevPage);
    if (nextBtn) nextBtn.addEventListener('click', onNextPage);
    if (zoomInBtn) zoomInBtn.addEventListener('click', onZoomIn);
    if (zoomOutBtn) zoomOutBtn.addEventListener('click', onZoomOut);
    
    // PDFを読み込み
    loadPDF(pdfUrl);
}

// グローバルに公開
window.initPDFViewer = initPDFViewer;
