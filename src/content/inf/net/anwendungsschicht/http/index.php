<?
    $preprocess = function (PreprocessContext $ctx) {
        $ctx->title = 'Webseiten abrufen';
            };
?>

<? $process = function(Target $target) { ?>

<p>
    Ein typisches Beispiel für die Anwendungsschicht ist die Abfrage einer Webseite. Diese Abfrage wird über das sogenannte HTTP-Protokoll abgewickelt. Zunächst benötigt man einen Client (Webbrowser) und einen Server (Webserver). Anschließend sendet der Browser eine HTTP-Anfrage, auf welche der Webserver mit einer HTTP-Antwort reagiert. 
</p>
<p class="text-center">
    <img src="res/http.svg" alt="">
</p>

<? ex_start(); ?>
<? ex_desc_start('HTTP-Anfrage analysieren', open: true); ?>
<p>
    Die HTTP-Anfrage und -Antwort geschieht über eine TCP-Verbindung. <strong>Bestimme</strong>, unter welcher Portnr. der Webserver erreichbar ist. <strong>Identifiziere</strong> die HTTP-Anfrage und -Antwort gemäß oben beschriebenem Schema. 
</p>
<? ex_desc_end(); ?>
<? ex_end(); ?>

<? }; ?>