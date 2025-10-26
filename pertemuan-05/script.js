document.addEventListener('DOMContentLoaded', function () {
    // toggle nav (defensive)
    var menuToggle = document.getElementById('menuToggle');
    var nav = document.querySelector('nav');
    if (menuToggle && nav) {
        menuToggle.addEventListener('click', function () {
            nav.classList.toggle('active');
        });
    }

    // optional welcome flow (kept from original)
    try {
        alert('Halo, Selamat Datang!');
        var nama = prompt('Siapa nama kamu?');
        if (nama !== null && nama !== '') {
            alert('Halo, ' + nama + '!');
        }
    } catch (e) {
        console.warn('Prompt/alert blocked or failed:', e);
    }

    // handler for ubahTeks (migrated from inline onclick)
    var pesanEl = document.getElementById('pesan');
    var ubahBtn = document.getElementById('ubahBtn');
    function ubahTeks() {
        if (pesanEl) pesanEl.textContent = 'Teks berhasil diubah!';
    }
    if (ubahBtn) ubahBtn.addEventListener('click', ubahTeks);
    // expose for compatibility if some code expects global
    window.ubahTeks = ubahTeks;
});