<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<form method="POST" action="{{route("villes.store")}}">
    @csrf

    <label>name</label><br/>
    <input name="name" required/><br/>

    <label>content</label><br/>
    <input name="content" required/><br/>

    <button type="submit">Add</button>
</form>
</body>
</html>
