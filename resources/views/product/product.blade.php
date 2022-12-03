<!DOCTYPE html>
<html>
	<head>
        
		
        <link rel="stylesheet" href="/public/css/style.css">
        
	</head>
	<body>
		
	@foreach($b as $g=>$value)	

		{{$value['name'] }}
		{{$value['cost'] }}
		@if($value['inStock']  == 1 )
		
		В наличии!
		@else
		Нету
		@endif
		{{$value['desc'] }}	<br>

	@endforeach

	</body>
</html>


