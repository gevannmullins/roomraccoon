<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping List</title>
</head>
<body>
    <h1>Shopping List</h1>
    <form action="<?php BASE_URL ?>ShoppingListController/add" method="POST">
        <input type="text" name="item" placeholder="Add a new item">
        <button type="submit">Add</button>
    </form>
    <ul>
        <?php foreach ($data['items'] as $item): ?>
            <li>
                <?php htmlspecialchars($item['name']) ?> 
                <?php if (!$item['checked']): ?>
                    <a href="<?php BASE_URL ?>ShoppingListController/check/<?php $item['id'] ?>">[Check]</a>
                <?php else: ?>
                    [Checked]
                <?php endif; ?>
                <a href="<?php BASE_URL ?>ShoppingListController/edit/<?php $item['id'] ?>">[Edit]</a>
                <a href="<?php BASE_URL ?>ShoppingListController/delete/<?php $item['id'] ?>">[Delete]</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>