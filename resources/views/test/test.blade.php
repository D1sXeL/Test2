<!DOCTYPE html>
<html>

<head>
    <title>My view</title>
</head>
<style>
    .good {
        color: aqua;
    }

    .bad {
        color: red;
    }
</style>

<body>

    {{-- <input value="{{count($arr)}}"> --}}
    {{-- <input value="{{ isset($gorod) ? $gorod : 'Moscow' }}"> --}}

    {{-- <input value="{{ isset($country) ? $country : 'Russia' }}"> <br> --}}
    {{-- <input value="{{ isset($gorod) ? $gorod : 'Moscow' }}"> --}}
    {{-- <a>{{$str}}</a> --}}
    {{-- <input value="{{ isset($year) ? $year : date('Y') }}">
    <input value="{{ isset($mounth) ? $mounth : date('m') }}">
    <input value="{{ isset($day) ? $day : date('d') }}">
    @php
    echo "qweasdas"
    @endphp --}}
    {{-- @if ($age >= 6)
	СЁДНЯ ВЫХОДНОЙ
@else
	сёдня в школу()
@endif --}}
    {{-- @if ($age <= 2)
сейчас зима
@elseif ($age <=5 )
весна
@elseif ($age <=8 )
лето
@elseif ($age <=11 )
осень
@elseif ($age ==12 )
декабрь
@else
такого месяца и времени года нету
@endif --}}
    {{-- @unless($age > 18)
	вы еще не совершеноллетний
@endunless --}}
    {{-- @if (count($var1) >= 1)
    {{array_sum($var1)}}
@else
	в массиве нет записей
@endif --}}
    {{-- <ul>
	@foreach ($var1 as $elem)
		<li>{{ $elem*$elem }}</li>
	@endforeach
</ul>
<ul>
	@foreach ($var1 as $elem)
		<li>{{ sqrt($elem) }}</li>
	@endforeach
</ul> --}}
    {{-- <ul>
@foreach ($var1 as $key => $elem)
	{{ $key + 1 }} {{ $elem }} <br>
@endforeach
</ul> --}}
    {{-- <ul>
@foreach ($var1 as $key => $elem)
	{{ $key  }} {{ $elem }} <br>
@endforeach
</ul> --}}
    {{-- <ul>
	@foreach ($var1 as $elem)
		@if ($elem % 2 == 0)
			<li>{{ $elem }}</li>
		@endif
	@endforeach
</ul> --}}
    {{-- @if (is_array($data))
	<ul>
		@foreach ($data as $elem)
			<li>{{ $elem }}</li>
		@endforeach
	</ul>
    @else {{$data}}
@endif --}}
    {{-- <table>
	@foreach ($arr as $subArr)
		<tr>
			@foreach ($subArr as $elem)
				<td>{{ $elem }}</td>
			@endforeach
		</tr>
	@endforeach
</table> --}}
    {{-- @if (is_array($g))
	
		@foreach ($g as $key => $elem)
		@if ($loop->first)
		@endif
	<ul>
		<li>{{ $loop->index }} {{$elem['name']}} </li>
	</ul>
	
    @endforeach
@endif  --}}

    @if (is_array($g))

        @foreach ($g as $key => $elem)
            @continue($loop->first)
            this first
        @break

        ($loop ->last)
        this last


        <ul>
            <li>{{ $loop->iteration }} {{ $elem['name'] }} </li>
        </ul>
    @endforeach
@endif











</body>

</html>
