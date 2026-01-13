<style>
    .bg-brown { background-color: #8B4513 !important; }
    .btn-brown { background-color: #8B4513 !important; color: white !important; }
    .btn-brown:hover { background-color: #5D2E0A !important; color: white !important; }
    .text-brown { color: #8B4513 !important; }
    .btn-group .btn { margin: 0 2px; border-radius: 5px !important; }
</style>

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-brown fw-bold">Daftar Stok Mobil</h2>
        <a href="<?= BASEURL; ?>/Mobil/tambah" class="btn btn-brown shadow-sm">
            <i class="fas fa-plus-circle me-1"></i> Tambah Mobil Baru
        </a>
    </div>

    <div class="card shadow border-0">
        <div class="card-body">
            <table id="tabelMobil" class="table table-striped table-hover align-middle w-100">
                <thead class="table-light text-center">
                    <tr>
                        <th>Foto</th>
                        <th>Info Mobil</th>
                        <th>Harga Sewa</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($data['mobil'])) : ?>
                        <?php foreach($data['mobil'] as $mbl) : ?>
                        <tr>
                            <td class="text-center" style="width: 150px;">
                                <?php $nama_foto = basename($mbl['foto'] ?? 'default.jpg'); ?>
                                <img src="<?= BASEURL; ?>/img/<?= $nama_foto; ?>" 
                                     width="120" class="rounded shadow-sm" 
                                     style="height: 70px; object-fit: cover;"
                                     onerror="this.src='<?= BASEURL; ?>/img/default.jpg'">
                            </td>
                            <td>
                                <strong class="text-uppercase text-brown"><?= $mbl['nama_mobil']; ?></strong><br>
                                <span class="badge bg-secondary"><?= $mbl['nopol']; ?></span>
                            </td>
                            <td class="text-center fw-bold text-success">
                                Rp <?= number_format($mbl['harga_sewa'], 0, ',', '.'); ?>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-success">Tersedia</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="<?= BASEURL; ?>/transaksi/sewa/<?= $mbl['id_mobil']; ?>" class="btn btn-success btn-sm">
                                        <i class="fas fa-key"></i> Sewa
                                    </a>
                                    <a href="<?= BASEURL; ?>/Mobil/ubah/<?= $mbl['id_mobil']; ?>" class="btn btn-warning btn-sm text-white">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="<?= BASEURL; ?>/Mobil/hapus/<?= $mbl['id_mobil']; ?>" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Yakin ingin menghapus mobil ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">Belum ada data mobil yang terdaftar.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tabelMobil').DataTable({
            "pageLength": 5,
            "language": {
                "search": "Cari Mobil:",
                "lengthMenu": "Tampilkan _MENU_ data",
                "paginate": { "next": "Lanjut", "previous": "Balik" },
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ mobil"
            }
        });
    });
</script>