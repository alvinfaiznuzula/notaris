<?php
include "koneksi.php";
$query = mysqli_query($connection,"SELECT * FROM form ORDER BY nomor ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<?php
	$nama_file = "Data Kinerja Notaris/PPAT";
	header("Content-type: application/vnd-ms-excel"); 
    header('Content-disposition: attachment; filename="' .$nama_file.".xls");
?>

	<h1>Data Kinerja Notaris/PPAT Divisi Operasional Kredit</h1>
	<h2>PT Bank Negara Indonesia (Persero) Tbk.</h2>

	<table class ="table1" border="1" cellpadding="10" cellspacing="0">


		<tr>
			<th>No.</th>
			<th>Nama Notaris</th>
			<th>Wilayah Kerja</th>
			<th>Nama Penilai</th>
			<th>NPP Penilai</th>
			<th>Unit Penilai</th>
			<th>Email Penilai</th>
			<th>Tanggal Review</th>
			<th>Rata-rata pemenuhan SLA sesuai standar yang ditetapkan oleh BNI dalam pembuatan Akta (dalam kurun waktu 1 tahun terakhir)</th>
			<th>Ketaatan dalam menyampaikan Laporan Produksi</th>
			<th>Pemahaman Notaris terhadap Materi Perjanjian sesuai kebutuhan BNI</th>
			<th>Kemudahan dalam berkomunikasi & berkoordinasi dengan BNI</th>
			<th>Frekuensi koreksi akibat kesalahan Notaris / PPAT dalam pembuatan Akta</th>
			<th>Kemampuan Notaris / PPAT dalam menjalankan Fungsi Konsultasi</th>
			<th>Mengikuti Seminar terkait kenotariatan / PPAT baik yang diselenggarakan di Dalam Negeri / Luar Negeri</th>
			<th>Jumlah pending penyelesaian Akta</th>
			<th>Tingkat independensi Notaris</th>
			<th>Adanya informasi negatif yang berpotensi mempengaruhi kinerja Notaris</th>
			<th>Keterangan</th>
		</tr>

		<?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama_notaris"];?></td>
            <td><?php echo $data["wilayah_kerja"];?></td>
            <td><?php echo $data["nama_penilai"];?></td>
            <td><?php echo $data["npp_penilai"];?></td>
            <td><?php echo $data["unit_penilai"];?></td>
            <td><?php echo $data["email"];?></td>
            <td><?php echo $data["tanggal"];?></td>
            <td><?php echo $data["rata_rata_pemenuhan_sla_sesuai_standar_yang_ditetapkan_oleh_bni"];?></td>
            <td><?php echo $data["ketaatan_dalam_menyampaikan_laporan_produksi"];?></td>
            <td><?php echo $data["pemahaman_notaris_terhadap_materi_perjanjian_sesuai_kebutuhanbni"];?></td>
            <td><?php echo $data["kemudahan_dalam_berkomunikasi_dan_berkoordinasi_dengan_bni"];?></td>
            <td><?php echo $data["frekuensi_koreksi_akibat_kesalahan_notaris_dalam_pembuatan_akta"];?></td>
            <td><?php echo $data["kemampuan_notaris_atau_ppat_dalam_menjalankan_fungsi_konsultasi"];?></td>
            <td><?php echo $data["mengikuti_seminar_terkait_kenotariatan_atau_ppat"];?></td>
            <td><?php echo $data["jumlah_pending_penyelesaian_akta"];?></td>
            <td><?php echo $data["tingkat_independensi_notaris"];?></td>
            <td><?php echo $data["adanya_informasi_negatif_yang_dapat_mempengaruhi_kinerja_notaris"];?></td>
            <td><?php echo $data["keterangan"];?></td>
        </tr>

        <?php $no++; } ?>
        <?php } ?>
	</table>
<br>

</div>
</body>
</html>