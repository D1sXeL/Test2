<!DOCTYPE html>
<html>
	<head>
        
		
        <link rel="stylesheet" href="/public/css/style.css">
        
	</head>
	<body>
                
                
             <form action="/all" method="POST">
                
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="name">
                <input type="text" name="surname" placeholder="surname">
                <input type="text" name="login" placeholder="login">
                <input type="email" name="email" placeholder="email">
                <input type="password" name="password" placeholder="password">
                
                <input type="submit">
                
            </form>
	</body>
</html>


