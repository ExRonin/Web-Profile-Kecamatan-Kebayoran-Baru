
<!DOCTYPE html>
<html>
<head>
	<title>Form Lapor</title>
</head>
<body>
	<form action="proses_lapor.php" method="" name="input">
<h1 align="center">Form Lapor</h1>
<table border="0" align="center" width="600">
	<tr>
		<td>Jenis Laporan</td>
		<td><input type="text" name="jenis_laporan" id="jenis_laporan" placeholder="Laporan Baru"></td>
	</tr>
	<tr>
		<td>Nama Pelapor</td>
		<td><input type="text" name="nama_pelapor" id="nama_pelapor" placeholder="Masukkan Nama Anda"></td>
	</tr>
	<tr>
		<td>Email Pelapor</td>
		<td><input type="text" name="email_pelapor" id="email_pelapor" placeholder="Masukkan Email Anda"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat" id="alamat" cols="40" rows="5"></textarea></td>
	</tr>
	<tr>
		<td>Kabupaten / Kota Pelapor</td>
		<td><input type="text" name="kota" id="kota" placeholder="Kabupaten / Kota"></td>
	</tr>
	<tr>
		<td>Laporan</td>
		<td><textarea name="laporan" id="laporan" cols="40" rows="5" placeholder="Laporan..."></textarea></td>
	</tr>
	<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Cancel"></td>
</form>
	<li><a href="/" >Close</a></li>
	<li><a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
									</a></li>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
	
</table>
</body>
</html>