<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1>Sei stato contattato da {{$user['name']}}</h1>
<h2>ECCO COSA TI HA SCRITTO</h2>
<p>Soggetto : {{$user['subject']}}</p>
<p>Messaggio :  {{$user['message']}}</p>
<p>Email : {{$user['email']}}</p>

</body>
</html>