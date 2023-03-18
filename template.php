<?php
declare(strict_types=1);

// inport should have been resoled from the caller (index.php)
use Oeuvres\Kit\{I18n, Route};
use GalenusVerbatim\Verbatim\{Verbatim};


$page = ltrim(Route::url_request(), '/');
$body_class = $page;
if (@substr_compare($page, 'tlg', 0, strlen('tlg'))==0) {
    $body_class = 'tlg';
}
// where to find 
?><!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?= Route::title(Verbatim::name()) ?></title>
        <link rel="stylesheet" href="<?= Route::home_href() ?>vendor/galenus-verbatim/verbatim/verbatim.css"/>
        <link rel="stylesheet" href="<?= Route::home_href() ?>theme/homerus.css"/>
    </head>
    <body class="<?=$body_class?>">
<div id="all">
    <header id="header">
        <div class="banner">
            <div class="titles">
                <div class="title">Homerus Verbatim</div>
                <div class="titlesub">😍So greek !</div>
            </div>
            <div class="moto"><?= I18n::_('moto') ?></div>
            <img class="banner" src="<?= Route::home_href() ?>theme/banner.png" />
        </div>
    </header>
    <div id="content">
        
        <nav id="tabs" class="tabs">
            <?= Route::tab('', I18n::_('ostium')) ?>
            <?= Route::tab('editiones', I18n::_('editiones')) ?>
            <?php 
            if ($page == 'tlg') {
                // if doc visible, add a button search in doc search in doc
                Verbatim::qform(true);
            }
            else {
                Verbatim::qform();
            }
            
            ?>
            <?= Route::tab('verba', I18n::_('verba')) ?>
            <?= Route::tab('de', I18n::_('de')) ?>
        </nav>
        <div class="container">
            <?php Route::main(); ?>
        </div>
    </div>
    <footer id="footer">
        <nav id="logos">
            <a>A sponsor</a>
            <a>Another sponsor</a>
        </nav>
    </footer>
</div>
        <script src="<?= Route::home_href() ?>theme/homerus.js"></script>
    </body>
</html>
