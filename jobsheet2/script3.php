<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<header>
		<h1>BPJS Ketenagakerjaan</h1>
		<nav>
			<ul>
				<li><a href="home.php">Beranda</a></li>
				<li><a href="script1.php">Penghitungan JHT</a></li>
				<li><a href="script2.php">Penghitungan JKK</a></li>
				<li><a href="script3.php">Penghitungan JK</a></li>
				<li><a href="script4.php">Penghitungan JP</a></li>
			</ul>
		</nav>
	</header>
    <div class="container">

    <form method="post">
		<label>Upah Pekerja:</label>
		<input type="number" name="upah1" required>
		<br>
		<button type="submit">Hitung</button>
	</form>

	<?php
	if (isset($_POST['upah1'])) {
		$upah1 = $_POST['upah1'];
		$iuran_jk = $upah1 * 0.003;

        echo "<br><strong>Hasil perhitungan:</strong><br>";
		echo "Iuran JK yang dibayar oleh perusahaan: Rp" . number_format($iuran_jk, 0, ',', '.') . " per bulan<br>";
	}
	?>
    </div>

</body>
</html>