<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to My Laravel CRUD App</h1>

    <div>
        <a href="{{ route('items.index') }}" class="btn btn-primary">View Items</a>
        <a href="{{ route('items.create') }}" class="btn btn-success">Add New Item</a>
    </div>
</body>
</html>
