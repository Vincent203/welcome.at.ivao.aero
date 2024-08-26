<?php
require __DIR__ . '/autoloader.php';

//IMPORT CLASSES
use Config\ConfigHandler;
use Classes\DatabaseHandler;
use Classes\PermissionHandler;
use Classes\UserHandler;
use Classes\TranslationHandler;
use Classes\LoginHandler;
use Classes\HeadManager;
use Classes\StyleManager;
use Classes\Toastify;

//CREATE HANDLER
$loginHandler = new LoginHandler;
$configHandler = new ConfigHandler;
$database = new DatabaseHandler;
$headManager = new HeadManager;
$styleManager = new StyleManager;
$permissionHandler = new PermissionHandler;
$translationHandler = new TranslationHandler;
$toastify = new Toastify;

//EXECUTE HANDLER
$pdo = $database->getPDO();
$translationHandler->setLanguage($translationHandler->getActiveLanguage());
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
        $headManager->loadTemplate('main');
        $styleManager->loadStyle('bootstrap');
        $styleManager->loadStyle('sweetalert');
        $styleManager->loadStyle('toastify');
        $styleManager->loadStyle('fonts');
        $styleManager->loadStyle('ivao_default');
        $styleManager->loadStyle('ativao_index');
        ?>
    </head>
    <body>
        <div class="container">
           
        </div>
    </body>
</html>