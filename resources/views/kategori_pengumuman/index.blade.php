 <html>
<head>
 	<title> kategori pengumuman </title>
 </head>
 <body>

 <table border="1">
 	<tr>
 		<td>ID</td>
 		<td>Nama</td>
 		<td>Users_Id</td>
 	</tr>

 	@foreach($kategori_pengumuman as $item)

 	<tr>
 		<td> {!! $item->id !!}</td>
 		<td> {!! $item->nama !!}</td>
 		<td> {!! $item->users_id !!}</td>
 	</tr>
 	@endforeach

 </table>
 </body>
 </html>