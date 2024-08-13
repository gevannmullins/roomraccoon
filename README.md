# roomraccoon
RoomRaccoon technical Assessment

File Structure:
    /app
        /controllers
            ShoppingListController.php
        /models
            ShoppingList.php
        /views
            shopping-list
                index.php
                edit.php
    /public
        index.php
    /config
        config.php
    /core
        Controller.php
        Model.php
        App.php

- app/SQLite - database for easier access to local database
- app/controllers/ShoppingListController - Controller for adding and editing items
- app/models/ShoppingList - Model that queries the database table
- app/views/shopping-list/edit.php - View that allows the user to edit an item
- app/views/shopping-list/index.php - View that lists all the items
- config/config.php - Configuration file for basic config setup
- core/App.php - Core App file that determines the Routes/Url functions
- core/Controller.php - Core Controller that determines what Model and View to be used
- core/Model.php - Core Model that makes the connection to our SQLite database
- public/index.php - The main entry point to the system