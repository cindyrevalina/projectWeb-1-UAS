<?php 
/**
 * File: app/views/transaksi/sewa.php
 * Halaman ini muncul SETELAH klik Pesan dan SEBELUM masuk ke Riwayat
 */
?>

<style>
    .bg-brown { background-color: #8B4513 !important; }
    .text-brown { color: #8B4513 !important; }
    .btn-brown { background-color: #8B4513 !important; color: white !important; }
    .btn-brown:hover { background-color: #5D2E0A !important; color: white !important; }
    .card { border-radius: 15px; }
</style>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-header bg-brown text-white py-3">
                    <h4 class="mb-0 fw-bold"><i class="fas fa-receipt me-2"></i> Konfirmasi Sewa & Pembayaran</h4>
                </div>
                <div class="card-body p-4">
                    
                    <div class="alert alert-info border-0 shadow-sm mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <h5 class="fw-bold mb-1 text-uppercase"><?= $data['mobil']['nama_mobil']; ?></h5>
                                <p class="mb-0 text-muted"><i class="fas fa-id-card me-1"></i> No. Plat: <?= $data['mobil']['nopol']; ?></p>
                            </div>
                            <div class="col-md-5 text-md-end">
                                <p class="mb-0 text-muted small">Harga Sewa / Hari</p>
                                <h4 class="text-success fw-bold mb-0">Rp <?= number_format($data['mobil']['harga_sewa'], 0, ',', '.'); ?></h4>
                            </div>
                        </div>
                    </div>

                    <form action="<?= BASEURL; ?>/transaksi/proses_sewa" method="post">
                        <input type="hidden" name="id_mobil" value="<?= $data['mobil']['id_mobil']; ?>">
                        <input type="hidden" id="harga_per_hari" value="<?= $data['mobil']['harga_sewa']; ?>">

                        <div class="mb-3">
                            <label for="id_pelanggan" class="form-label fw-bold text-brown">Pilih Pelanggan</label>
                            <select class="form-select shadow-sm" name="id_pelanggan" id="id_pelanggan" required>
                                <option value="">-- Cari Nama Pelanggan --</option>
                                <?php foreach($data['pelanggan'] as $plg) : ?>
                                    <option value="<?= $plg['id_pelanggan']; ?>"><?= $plg['nama_pelanggan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tgl_sewa" class="form-label fw-bold text-brown">Tanggal Sewa</label>
                                <input type="date" class="form-control shadow-sm" name="tgl_sewa" id="tgl_sewa" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tgl_kembali" class="form-label fw-bold text-brown">Tanggal Kembali</label>
                                <input type="date" class="form-control shadow-sm" name="tgl_kembali" id="tgl_kembali" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-brown d-block">Metode Pembayaran</label>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="metode_pembayaran" value="Cash" id="cash" checked autocomplete="off">
                                <label class="btn btn-outline-brown" for="cash"><i class="fas fa-money-bill-wave me-2"></i>Cash (Tunai)</label>

                                <input type="radio" class="btn-check" name="metode_pembayaran" value="Transfer" id="transfer" autocomplete="off">
                                <label class="btn btn-outline-brown" for="transfer"><i class="fas fa-university me-2"></i>Transfer Bank</label>
                            </div>
                        </div>

                        <div class="card bg-light border-0 mb-4 shadow-sm">
                            <div class="card-body d-flex justify-content-between align-items-center py-3">
                                <div>
                                    <span class="fw-bold text-muted">Total Estimasi Bayar</span>
                                    <p class="small text-muted mb-0">*Berdasarkan durasi sewa</p>
                                </div>
                                <div class="text-end">
                                    <h2 class="text-success mb-0 fw-bold">Rp <span id="display_total">0</span></h2>
                                    <input type="hidden" name="total_bayar" id="input_total" value="0">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between gap-3 mt-4">
                            <a href="<?= BASEURL; ?>/mobil" class="btn btn-light border px-4 flex-grow-1">
                                <i class="fas fa-arrow-left me-2"></i>Kembali
                            </a>
                            <button type="submit" class="btn btn-brown px-5 flex-grow-1 shadow">
                                <i class="fas fa-check-circle me-2"></i>Selesaikan Transaksi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Logika perhitungan otomatis durasi hari x harga sewa
    const tglSewa = document.getElementById('tgl_sewa');
    const tglKembali = document.getElementById('tgl_kembali');
    const hargaPerHari = document.getElementById('harga_per_hari').value;
    const displayTotal = document.getElementById('display_total');
    const inputTotal = document.getElementById('input_total');

    function hitungTotal() {
        if (tglSewa.value && tglKembali.value) {
            const start = new Date(tglSewa.value);
            const end = new Date(tglKembali.value);
            
            // Hitung selisih hari
            const selisihMilidetik = end - start;
            const selisihHari = Math.ceil(selisihMilidetik / (1000 * 60 * 60 * 24)); 
            
            // Minimal sewa 1 hari jika tanggal sama
            const durasi = selisihHari > 0 ? selisihHari : 1;
            
            const total = durasi * hargaPerHari;
            
            // Tampilkan ke user dengan format rupiah
            displayTotal.innerText = new Intl.NumberFormat('id-ID').format(total);
            // Masukkan angka murni ke input hidden untuk dikirim ke database
            inputTotal.value = total;
        }
    }

    tglSewa.addEventListener('change', hitungTotal);
    tglKembali.addEventListener('change', hitungTotal);
</script>