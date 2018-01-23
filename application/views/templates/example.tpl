<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
{foreach $test as $result}
    <p>{$result.id}</p>
    <p>{$result.username}</p>
{/foreach}
</body>
</html>