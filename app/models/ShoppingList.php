<?php

class ShoppingList extends Model
{
    public function getAllItems()
    {
        $stmt = $this->db->query("SELECT * FROM shopping_list");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getItemById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM shopping_list WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addItem($item)
    {
        $stmt = $this->db->prepare("INSERT INTO shopping_list (name, checked) VALUES (:name, 0)");
        $stmt->execute(['name' => $item]);
    }

    public function deleteItem($id)
    {
        $stmt = $this->db->prepare("DELETE FROM shopping_list WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    public function updateItem($id, $item)
    {
        $stmt = $this->db->prepare("UPDATE shopping_list SET name = :name WHERE id = :id");
        $stmt->execute(['name' => $item, 'id' => $id]);
    }

    public function markAsChecked($id)
    {
        $stmt = $this->db->prepare("UPDATE shopping_list SET checked = 1 WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
