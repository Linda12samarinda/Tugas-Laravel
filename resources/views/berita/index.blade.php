 <html>
<head>
 	<title> berita </title>
 </head>
 <body>

 <table border="1">
 	<tr>
 		<td>ID</td>
 		<td>Judul</td>
 		<td>Isi</td>
 		<td>Users Id</td>
 	</tr>

 	@foreach($berita as $item)

 	<tr>
 		<td> {!! $item->id !!}</td>
 		<td> {!! $item->judul !!}</td>
 		<td> {!! $item->isi !!}</td>
 		<td> {!! $item->users_id !!}</td>
 	</tr>
 	@endforeach

 </table>
 </body>
 </html>