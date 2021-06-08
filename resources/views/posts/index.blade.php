<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica validaciones</title>
</head>
<body>
    <div class="content">
        <div class="title m-b-mb">
            Form Request
        </div>
        <div>
            <form action="{{route('posts.store')}}" method="POST">
                @csrf
                <input type="text" name="title">
                <input type="submit" value="Enviar">
            </form>
        </div>

    </div>
    
</body>
</html>