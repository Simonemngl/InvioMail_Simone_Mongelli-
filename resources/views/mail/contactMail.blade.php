<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    
    .color-r{
        color: red
    }
</style>
<body>
    
<h1>Grazie per averci contattato {{$user['name']}} </h1>

<p > Ti ricontatteremo al più presto </p>

<p>Ecco il tuo messagio:</p>
<p>{{$user['message']}}</p>



<p class="color-r">Non risporendere a questo messagio! </p>
</body>
</html>