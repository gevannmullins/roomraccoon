# roomraccoon
**RoomRaccoon technical Assessment**

This is a very simple MVC structured PHP system. The goal is to have it run on a locally without a need to connect to a server database. It primarily uses a sqlite database file that already has a few entries inside of it.

File Structure:
```
    /app
        /controllers
            ShoppingListController.php  -->Controller for adding, editing and deleting items
        /models
            ShoppingList.php    -->Model that queries the database table
        /views
            shopping-list
                index.php   -->View that lists all the items
                edit.php    -->View that allows the user to edit an item
        database.db     -->database for easier access to local database
    /public
        index.php   -->The main entry point to the system
    /config
        config.php      -->Configuration file for basic config setup
    /core
        Controller.php  -->Core Controller that determines what Model and View to be used
        Model.php   -->Core Model that makes the connection to our SQLite database
        App.php     -->Core App file that determines the Routes/Url functions
```

## Requirements

PHP 7 or above

SQLite