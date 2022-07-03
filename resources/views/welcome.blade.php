<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        div.container {
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        .italic {
            font-style: italic;
        }

        p {
            font-size: 1.2rem;
        }


    </style>
</head>
<body>
    <div class="container">
        <h1> Welcome to API CRUD Firebase </h1>
        <p class="italic"> This API build with Lumen Framework for Create, Read, Update and Delete User using Firebase Database </p>
        <p> User management : <a href="{{ url('/api/v1/users') }}"> /api/v1/users </a> </p>
        <p> See documentation here : <a href="{{ url('/api/documentation') }}"> swagger documentation </a> | <a href="{{ url('/docs') }}"> .json </a>  </p>
        <p> {{  app()->version() }}</p>
    </div>
</body>
</html>

