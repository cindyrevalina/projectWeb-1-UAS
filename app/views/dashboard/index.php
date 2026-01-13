<div class="container-fluid mt-4">
    <div class="row mb-4 text-center">
        <div class="col-md-4">
            <div class="card shadow border-0 p-3 text-white" style="background: #8B4513;">
                <h6>STOK MOBIL</h6>
                <h2><?= isset($data['total_mobil']) ? $data['total_mobil'] : '0'; ?> Unit</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow border-0 p-3 text-white bg-success">
                <h6>TOTAL PELANGGAN</h6>
                <h2><?= isset($data['total_pelanggan']) ? $data['total_pelanggan'] : '0'; ?> Orang</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow border-0 p-3 bg-warning text-dark">
                <h6>STATUS SISTEM</h6>
                <h2>Aktif</h2>
            </div>
        </div>
    </div>

    <div class="card shadow border-0">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0 fw-bold">Manajemen Kendaraan</h5>
        </div>
        <div class="card-body">
            <table id="tabelData" class="table table-striped table-hover align-middle">
                <thead class="text-center">
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
            <td class="text-center">
                <?php 
                    // Menghilangkan Warning foto & membersihkan path C:\xampp...
                    $isi_foto = $mbl['foto'] ?? $mbl['gambar'] ?? 'default.jpg';
                    $file_foto = basename($isi_foto); 
                ?>
                <img src="<?= BASEURL; ?>/img/<?= $file_foto; ?>" width="100" class="rounded shadow-sm" onerror="this.src='<?= BASEURL; ?>/img/default.jpg'">
            </td>
            <td>
                <strong class="text-uppercase">
                    <?= $mbl['nama_mobil'] ?? $mbl['nama'] ?? 'Mobil'; ?>
                </strong><br>
                <span class="badge bg-secondary">
                    <?= $mbl['nopol'] ?? $mbl['plat'] ?? '-'; ?>
                </span>
            </td>
            <td class="text-center fw-bold text-success">
                <?php 
                    // Cek harga_sewa, kalau kosong cek harga
                    $harga = $mbl['harga_sewa'] ?? $mbl['harga'] ?? 0;
                ?>
                Rp <?= number_format($harga, 0, ',', '.'); ?>
            </td>
            <td class="text-center">
                <span class="badge bg-success">
                    <?= $mbl['status'] ?? 'Tersedia'; ?>
                </span>
            </td>
            <td class="text-center">
                <a href="<?= BASEURL; ?>/Transaksi" class="btn btn-sm btn-primary px-3 shadow-sm">
                    <i class="fas fa-shopping-cart"></i> Pesan
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="5" class="text-center p-5 text-muted">Data mobil tidak ditemukan di database.</td>
        </tr>
    <?php endif; ?>
</tbody>
            </table>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tabelData').DataTable({
            "pageLength": 5,
            "language": {
                "search": "Cari Data:",
                "lengthMenu": "Tampilkan _MENU_ data",
                "paginate": { "next": "Lanjut", "previous": "Balik" }
            }
        });
    });
</script>