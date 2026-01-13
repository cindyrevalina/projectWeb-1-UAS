<div class="container mt-5">
    <div class="card shadow border-0 col-md-6 mx-auto">
        <div class="card-header bg-brown text-white py-3">
            <h5 class="mb-0 fw-bold"><i class="fas fa-edit me-2"></i> Edit Data Mobil</h5>
        </div>
        <div class="card-body p-4">
            <form action="<?= BASEURL; ?>/Mobil/prosesUbah" method="post">
                <input type="hidden" name="id_mobil" value="<?= $data['mobil']['id_mobil']; ?>">

                <div class="mb-3">
                    <label class="form-label fw-bold text-brown">Nama Mobil</label>
                    <input type="text" name="nama_mobil" class="form-control" value="<?= $data['mobil']['nama_mobil']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold text-brown">Nomor Plat (Nopol)</label>
                    <input type="text" name="nopol" class="form-control" value="<?= $data['mobil']['nopol']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold text-brown">Harga Sewa / Hari</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" name="harga_sewa" class="form-control" value="<?= $data['mobil']['harga_sewa']; ?>" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold text-brown">Nama File Foto</label>
                    <input type="text" name="foto" class="form-control" value="<?= $data['mobil']['foto']; ?>">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="<?= BASEURL; ?>/Mobil" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-brown text-white">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>