<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <form action="<?php echo BASE_URL; ?>ShoppingListController/edit/<?php echo $data['item']['id'] ?>" method="POST">
        <input type="text" name="item" value="<?php echo htmlspecialchars($data['item']['name']) ?>">
        <button type="submit">Save</button>
    </form>
    <a href="<?php echo BASE_URL; ?>">Back to List</a>
</body>
</html>