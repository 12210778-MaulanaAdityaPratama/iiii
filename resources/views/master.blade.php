<!DOCTYPE html>
<html>
<head>
	<title> coba</title>
</head>
<body>

	<h3>Data Anggota</h3>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>Email</th>
		</tr>
		@foreach($anggota as $p)
		<tr>
			<td>{{ $p->NIM }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->kelas }}</td>
			<td>{{ $p->alamat }}</td>
            <td>{{ $p->email }}</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
