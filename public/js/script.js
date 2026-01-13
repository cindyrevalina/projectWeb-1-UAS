// Fungsi untuk konfirmasi hapus data
const tombolHapus = document.querySelectorAll('.confirm-delete');
tombolHapus.forEach(btn => {
    btn.addEventListener('click', function(e) {
        if(!confirm('Apakah anda yakin ingin menghapus data ini?')) {
            e.preventDefault();
        }
    });
});

// Menghilangkan alert otomatis setelah 3 detik (jika ada pesan flash)
window.setTimeout(function() {
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        alert.style.display = 'none';
    });
}, 3000);