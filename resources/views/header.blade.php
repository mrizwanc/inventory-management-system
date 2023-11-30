<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>CRUD System Home</title>
    <style>
        .alert {
            padding: 10px;
            margin: 10px;
        }
        .alert-success{
            color: green;
        }
        .alert-danger{
            color: red;
        }
    </style>
</head>
<body>
<header>
        <div class="logo">{{env('APP_NAME')}}</div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/add">Add New</a></li>
            </ul>
        </nav>
        <a href="/logout" class="user-profile">Log Out</a>
    </header>