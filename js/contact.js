// ================================
// お問い合わせフォームの処理
// ================================

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const formSuccess = document.getElementById('formSuccess');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // バリデーション
            if (!validateForm(form)) {
                return;
            }
            
            // フォームデータを取得
            const formData = new FormData(form);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });
            
            // ローディング表示
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            submitButton.textContent = '送信中...';
            submitButton.disabled = true;
            
            // 実際のプロジェクトでは、ここでサーバーにデータを送信
            // 例: fetch('/api/contact', { method: 'POST', body: JSON.stringify(data) })
            
            // デモ用に2秒後に成功表示
            setTimeout(() => {
                // フォームを非表示にして成功メッセージを表示
                form.style.display = 'none';
                formSuccess.style.display = 'block';
                
                // コンソールにデータを出力（デバッグ用）
                console.log('送信されたデータ:', data);
                
                // ページトップにスクロール
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }, 2000);
        });
    }
});

// フォームバリデーション
function validateForm(form) {
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        const formGroup = field.closest('.form-group');
        const errorMessage = formGroup.querySelector('.error-message');
        
        // 既存のエラーメッセージを削除
        if (errorMessage) {
            errorMessage.remove();
        }
        
        // 必須項目のチェック
        if (!field.value.trim()) {
            isValid = false;
            showError(field, '必須項目です');
            field.classList.add('error');
        } else {
            field.classList.remove('error');
            
            // メールアドレスの形式チェック
            if (field.type === 'email' && !isValidEmail(field.value)) {
                isValid = false;
                showError(field, '正しいメールアドレスを入力してください');
                field.classList.add('error');
            }
        }
    });
    
    // チェックボックスのバリデーション
    const privacyCheckbox = form.querySelector('#privacy');
    if (privacyCheckbox && !privacyCheckbox.checked) {
        isValid = false;
        showError(privacyCheckbox, '個人情報保護方針への同意が必要です');
    }
    
    return isValid;
}

// エラーメッセージを表示
function showError(field, message) {
    const formGroup = field.closest('.form-group') || field.closest('.checkbox-group');
    
    // エラーメッセージを作成
    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.textContent = message;
    
    // エラーメッセージを追加
    formGroup.appendChild(errorDiv);
}

// メールアドレスの形式チェック
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// 入力時にエラー表示をクリア
document.querySelectorAll('.form-input, .form-select, .form-textarea').forEach(field => {
    field.addEventListener('input', function() {
        this.classList.remove('error');
        const formGroup = this.closest('.form-group');
        const errorMessage = formGroup.querySelector('.error-message');
        if (errorMessage) {
            errorMessage.remove();
        }
    });
});

// チェックボックスのエラークリア
const privacyCheckbox = document.getElementById('privacy');
if (privacyCheckbox) {
    privacyCheckbox.addEventListener('change', function() {
        const checkboxGroup = this.closest('.checkbox-group');
        const errorMessage = checkboxGroup.querySelector('.error-message');
        if (errorMessage && this.checked) {
            errorMessage.remove();
        }
    });
}

// スムーススクロール（プライバシーポリシーへ）
document.querySelectorAll('a[href="#privacy-policy"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
