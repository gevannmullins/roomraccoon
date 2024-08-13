<?php

class ShoppingListController extends Controller
{
    public function index()
    {
        $shoppingList = $this->model('ShoppingList');
        $items = $shoppingList->getAllItems();
        $this->view('shopping-list/index', ['items' => $items]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $shoppingList = $this->model('ShoppingList');
            $shoppingList->addItem($_POST['item']);
            header('Location: ' . BASE_URL);
        }
    }

    public function delete($id)
    {
        $shoppingList = $this->model('ShoppingList');
        $shoppingList->deleteItem($id);
        header('Location: ' . BASE_URL);
    }

    public function edit($id)
    {
        $shoppingList = $this->model('ShoppingList');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $shoppingList->updateItem($id, $_POST['item']);
            header('Location: ' . BASE_URL);
        } else {
            $item = $shoppingList->getItemById($id);
            $this->view('shopping-list/edit', ['item' => $item]);
        }
    }

    public function check($id)
    {
        $shoppingList = $this->model('ShoppingList');
        $shoppingList->markAsChecked($id);
        header('Location: ' . BASE_URL);
    }
}