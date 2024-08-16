<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping List</title>
</head>
<body>

    <h1>Shopping List</h1>
    <form action="<?php echo BASE_URL; ?>ShoppingListController/add" method="POST">
        <input type="text" name="item" placeholder="Add a new item">
        <button type="submit">Add</button>
    </form>

    <ul>
        <?php foreach ($data['items'] as $item): ?>
            <li>
                <?php echo htmlspecialchars($item['name']) ?> 
                <?php if (!$item['checked']): ?>
                    <a href="<?php echo BASE_URL; ?>ShoppingListController/check/<?php echo $item['id'] ?>">[Check]</a>
                <?php else: ?>
                    [Checked]
                <?php endif; ?>
                <a href="<?php echo BASE_URL; ?>ShoppingListController/edit/<?php echo $item['id'] ?>">[Edit]</a>
                <a href="<?php echo BASE_URL; ?>ShoppingListController/delete/<?php echo $item['id'] ?>">[Delete]</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>