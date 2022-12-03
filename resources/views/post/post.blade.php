<!DOCTYPE html>
<html>
	<head>
        
		<title>{{$v['title']}}</title>
        <link rel="stylesheet" href="/public/css/style.css">
        
	</head>
	<body>
		<header id="header">
			<h1>{{$v['title']}}</h1>
		</header>
		<main>
            <div id="wrapper">
                
                <div id="container">
                    <div id="content">
                        {{$v['date']}}
                    </div>
                    <div id="sidebar">
                         {{$v['author']}}
                    </div>
                </div>
                <div id="footer">
                    {{$v['text']}}
                </div>
            </div>

		</main>
	</body>
</html>
