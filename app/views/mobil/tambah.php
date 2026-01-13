<style>
    /* Kita buat warna cokelat custom supaya tombol & header card cantik */
    .bg-brown {
        background-color: #8B4513 !important;
    }
    .btn-brown {
        background-color: #8B4513 !important;
        color: white !important;
    }
    .btn-brown:hover {
        background-color: #5D2E0A !important;
    }
    .text-brown {
        color: #8B4513 !important;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0">
                <div class="card-header bg-brown text-white py-3">
                    <h5 class="mb-0 fw-bold"><i class="fas fa-car me-2"></i> Form Tambah Mobil Baru</h5>
                </div>
                <div class="card-body p-4">
                    <form action="<?= BASEURL; ?>/Mobil/prosesTambah" method="post">
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold text-brown">Nama Mobil</label>
                            <input type="text" name="nama" class="form-control" placeholder="Contoh: Toyota Avanza" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-brown">Nomor Plat (Nopol)</label>
                            <input type="text" name="plat" class="form-control" placeholder="B 1234 ABC" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-brown">Harga Sewa / Hari</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">Rp</span>
                                <input type="number" name="harga" class="form-control" placeholder="350000" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-brown">Nama File Foto</label>
                            <input type="text" name="foto" class="form-control" placeholder="contoh: innova.jpg">
                            <small class="text-muted italic">*Pastikan file gambar sudah ada di folder public/img/</small>
                        </div>

                        <div class="d-flex justify-content-between pt-2">
                            <a href="<?= BASEURL; ?>/Mobil/tambah" class="btn btn-primary">
                                <i class="fas fa-arrow-left me-1"></i> Batal
                          <i class="fas fa-plus-circle me-1"></i> Tambah Mobil Baru
</a>
                                <i class="fas fa-save me-1"></i> Simpan Mobil
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>