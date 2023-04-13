<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>admin</h1>
<br>
    <h1>{{$user->email}}</h1>
    <form action="/add">
        <button>AddAssistant</button>
    </form>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Mail</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($assis as $assi)
          <tr>
            <th scope="row">1</th>
            <td>{{$assi->first_name}}</td>
            <td>{{$assi->last_name}}</td>
            <td>{{$assi->email}}</td>
            <td><button>supprim</button><button>modifay</button></td>
          </tr>
          @endforeach
</body>
</html>
