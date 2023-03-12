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
		<input type="number" name="upah" required>
		<br>
		<label>Tingkat Risiko:</label>
		<select name="risiko" required>
			<option value="">Pilih Tingkat Risiko</option>
			<option value="0.0024">Sangat Rendah (0,24%)</option>
			<option value="0.0054">Rendah (0,54%)</option>
			<option value="0.0089">Sedang (0,89%)</option>
			<option value="0.0127">Tinggi (1,27%)</op.tion>
			<option value="0.0174">Sangat Tinggi (1,74%)</option>
		</select>
		<br>
		<button type="submit">Hitung</button>
	</form>

    <?php
	if (isset($_POST['upah']) && isset($_POST['risiko'])) {
		$upah = $_POST['upah'];
		$persen = $_POST['risiko'];
		$iuran_jkk = $upah * $persen;

		echo "<br><strong>Hasil perhitungan:</strong><br>";
		echo "Iuran JKK: Rp" . number_format($iuran_jkk, 0, ',', '.') . " per bulan<br>";
	}
	?>
    </div>
</body>
</html>