<?
    $preprocess = function (PreprocessContext $ctx) {
        $ctx->title = 'DNS: Telefonbuch fürs Internet';
            };
?>

<? $process = function(Target $target) { ?>

<p class="text-center">
    <img src="res/dns.svg" alt="">
</p>

<? ex_start(); ?>
<? ex_desc_start('DNS-Server installieren und konfigurieren', open: true); ?>
<p>
    Erstelle ein Netzwerk mit drei Rechnern:
</p>
<ol>
    <li>Client-Rechner (mit Webbrowser) </li>
    <li>Server-Rechner (mit Webserver)</li>
    <li>Server-Rechner (mit DNS-Server)</li>
</ol>
<strong>Konfiguriere</strong> den Client-Rechner so, dass er den DNS-Server als Nachschlagewerk verwendet. <strong>Bilde</strong> das obige Beispiel nach.
<? ex_desc_end(); ?>
<? ex_end(); ?>

<? }; ?>