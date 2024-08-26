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
        <div class="container p-3">
            <img src="https://cloud.at.ivao.aero/Images/IVAO_AT_white.png">
            <div class="row mt-3">
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        Hauptmenü
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">Neu bei IVAO?</a></li>
                                <li><a href="">Staff</a></li>
                                <li><a href="">IVAO Rules</a></li>
                                <li><a href="">IVAO Regulations</a></li>
                                <li><a href="">IVAO.aero</a></li>
                                <li><a href="">Kontaktformular</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        Member
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">Membership Team</a></li>
                                <li><a href="">Ratings</a></li>
                                <li><a href="">Division Awards</a></li>
                                <li><a href="">Passwort vergessen</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        Pilot
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">Flight-Operations Team</a></li>
                                <li><a href="">Charts</a></li>
                                <li><a href="">Virtual Airlines</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        ATC
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">ATC-Operations Team</a></li>
                                <li><a href="">Funkbeispiel FIS & AFIS</a></li>
                                <li><a href="">Aircraft Data</a></li>
                                <li><a href="" style="color: red;">Handysheets</a></li>
                                <li><a href="" style="color: red;">LoA</a></li>
                                <li><a href="" style="color: red;">FIR Prozeduren</a></li>
                                <li><a href="" style="color: red;">Worksheets</a></li>
                                <li><a href="">Sectorfile (IVAC)</a></li>
                                <li><a href="">ATC Scheduling</a></li>
                                <li><a href="">FRA</a></li>
                                <li><a href="">Guest Controller (GCA)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        Training
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">Training Team</a></li>
                                <li><a href="">Checkout anfragen</a></li>
                                <li><a href="">Luftraumstruktur und Sichtflugregeln in AT</a></li>
                                <li><a href="">ATC Training Assistance Award</a></li>
                                <li><a href="">Pilot Support Award</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        Events
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">Event Team</a></li>
                                <li><a href="">ATC Booking System</a></li>
                                <li><a href="">AT Touren</a></li>
                                <li><a href="">Pilot Event Award</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        Special Operations
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">Special Operations Freigabe</a></li>
                                <li><a href="">NAH - Flugrettung (Rescue Helicopter Procedures)</a></li>
                                <li><a href="">Wien MCC (Austrian Military Radar)</a></li>
                                <li><a href="">Pilot Guide (Austrian Military Operations)</a></li>
                                <li><a href="">Military Phraseology</a></li>
                                <li><a href="">SO Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        Ressources
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">AT Division Kalender</a></li>
                                <li><a href="">Forum</a></li>
                                <li><a href="">Software</a></li>
                                <li><a href="">Tracker</a></li>
                                <li><a href="">Flugplan</a></li>
                                <li><a href="">Liveries</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        Social Media
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">Discord</a></li>
                                <li><a href="">Facebook</a></li>
                                <li><a href="">Instagram</a></li>
                                <li><a href="">Twitch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        Language
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">Deutsch</a></li>
                                <li><a href="">Englisch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12" style="display: grid;">
                    <div class="card">
                        <div class="card-header">
                        Profil
                        </div>
                        <div class="card-body" style="color: white; font-size: .85rem;">
                            <ul style="list-style: disclosure-closed;">
                                <li><a href="">Staff</a></li>
                                <li><a href="">Meine gespeicherten Daten</a></li>
                                <li><a href="">Meine IVAO-Profil</a></li>
                                <li><a href="">Meine Examen</a></li>
                                <li><a href="">Meine Trainings</a></li>
                                <li><a href="">Meine Checkouts</a></li>
                                <li><a href="">Meine Guest Controller Approval</a></li>
                                <li><a href="">Anmelden</a></li>
                                <li><a href="">Abmelden</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>