<h1>aaaa</h1>
	@foreach ($params as $param)
		{{$param->title}}
		{{$param->body}}
	@endforeach
	<form action="/contents/create" method="get">
		{{ csrf_field() }}
			<input type="text" name="title">
			<input type="text" name="body">
			<input type="submit" value="send">
	</form>