
<!DOCTYPE html>
<html>
<head>
<title>My view</title>
</head>
<style>
    .good{
        color:aqua;
    }
    .bad{
        color:red;
    }
    </style>
<body>
<!-- 
 @if(is_array($arr))

	@foreach ($arr as $key => $elem)
	
	@if ($loop->remaining <= 2 )
	 <i>  {{$elem}}</i>
		@else
        <b>{{$elem}}</b> <br>
	@endif
	@endforeach
@endif -->
<!-- @forelse($arr as $elem)
	<p>{{ $elem }}</p>
@empty
	<p>В массиве нет элементов</p>
@endforelse -->
@for ($i = 1; $i < 11; $i++)
	<p> {{ $i }}</p>
@endfor








</body>
</html>
