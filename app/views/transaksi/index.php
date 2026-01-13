<div class="container mt-3">
    <h3>Riwayat Transaksi Rental</h3>
    <hr>
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>Mobil</th>
                <th>Tgl Sewa</th>
                <th>Metode</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($data['transaksi'] as $trn) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $trn['nama_pelanggan']; ?></td>
                <td><?= $trn['nama_mobil']; ?></td>
                <td><?= $trn['tgl_sewa']; ?></td>
                <td>
                    <span class="badge bg-info"><?= $trn['metode_pembayaran']; ?></span>
                </td>
                <td>Rp <?= number_format($trn['total_bayar']); ?></td>
                <td>
                    <span class="badge <?= ($trn['status'] == 'Selesai') ? 'bg-success' : 'bg-warning'; ?>">
                        <?= $trn['status']; ?>
                    </span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>