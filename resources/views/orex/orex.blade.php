<!DOCTYPE html>
<html>

<head>
    <title>My view</title>
</head>

<body>

    {{-- @if (is_array($v))
	
    @foreach ($v as $key => $elem)
    @if ($loop->first)
    @endif

   
    <a href="https://"{{$elem['href']}}>{{$elem['text']}}</a> <br>


@endforeach
@endif  --}}
    {{-- @if (is_array($v))
	
@foreach ($v as $key => $elem)
@if ($loop->first)
@endif

<ul>
<li>{{$elem['href']}} {{$elem['text']}}</li>
</ul>

@endforeach
@endif  --}}
    {{-- <table>
	
		<tr>
            <th>номер</th>
            <th>Имя</th> 
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        
            @foreach ($z as $elem)
            @if ($elem['salary'] > 2000)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$elem['name']}}</td> 
               
                <td>{{$elem['surname']}}</td>
               
                <td>{{$elem['salary']}}</td>
            </tr>
            @endif
			@endforeach
		
	
</table> --}}
    {{-- <table>

        <tr>
            <th>номер</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>ban</th>
        </tr>

        @foreach ($x as $elem)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $elem['name'] }}</td>

                <td>{{ $elem['surname'] }}</td>
                @if ($elem['banned'] == 1)
                    <td style="color: red">Забанен</td>
                @else
                    <td style="color: green">активен</td>
                @endif


            </tr>
        @endforeach





    </table> --}}

  

    @foreach ($b as $elem)
        
        
            <ul>
                <li class="active">{{$elem}} </li>
            </ul>
        
        @endforeach


</body>

</html>
