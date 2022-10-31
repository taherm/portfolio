<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill</title>
</head>

<body>
    <form method="post" action="/save_skill">
        @csrf
        Name <input name="name" />
        Percentage <input name="percentage" />
        <input type="submit" />
    </form>
</body>

</html>