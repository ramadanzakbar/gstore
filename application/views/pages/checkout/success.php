<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Checkout Success</h5>	
				<div class="card-body">
					<h4><strong>Order Number : <?= $content['invoice'] ?></strong></h4>
					<p>Thank you for shopping.</p>
					<br>
					<p>Lakukan Pembayaran Dengan Mengikuti Tahapan Dibawah ini:</p>
					<ol>
						<li>Kirim Pembayaran Ke Salah Satu Rekening Ini.	 <p> <strong><p>BCA 0123456789 a/n PT. Intranusa Sarana</p> <p>BNI 289234105 a/n PT. Intranusa Sarana</p> <p>MANDIRI 0912351084 a/n PT. Intranusa Sarana</p></strong></p> </li>
						<li>Masukkan Nomor Pembelian Ini. <strong><?= $content['invoice'] ?></strong></li>
						<li>Total Pembayaran <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li>
					</ol>
					<p>Jika Sudah Melakukan Pembayaran, Kirim Bukti Pembayaran<a href="<?= base_url('myorder/detail/' . $content['invoice']) ?>"> Ke Link Ini</a></p>
					<a href="<?= base_url('home') ?>" class="btn btn-primary btn-sm">Back</a>
				</div>
			</div>
		</div>
	</div>
</div>
