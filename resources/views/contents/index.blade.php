<h1>aaaa</h1>
<table>
	@foreach ($params as $param)
		<tr>
			<td>{{$param->id}}</td>
			<td>{{$param->title}}</td>
			<td>{{$param->body}}</td>
			<td><form action="/contents/{{$param->id}}" method="post">
				{{ csrf_field() }}
				<input name="_method" type="hidden" value="DELETE">
				<input type="submit" value="削除">
				</form>
			</td>
		</tr>
	@endforeach
</table>
	<form action="/contents/create" method="get">
		{{ csrf_field() }}
			<input type="text" name="title">
			<input type="text" name="body">
			<input type="submit" value="send">
	</form>