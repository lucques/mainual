<?
    $preprocess = function (PreprocessContext $c)
    {
        $c->title = 'Rechnernetze';

        $c->add_subpage('netze-protokolle');
        $c->add_subpage('schichtenarchitekturen');
        $c->add_subpage('internetschicht');
        $c->add_subpage('transportschicht');
        $c->add_subpage('anwendungsschicht');
        $c->add_subpage('verbindungsschicht');
        $c->add_subpage('hintergrundwissen');
    };

    $t_ids = path_to_target_ids(__DIR__);

    $teaser_card = function() use ($t_ids)
    {
?>
        <div class="card">
            <? ref_img($t_ids, './res/teaser/earth-3537401.png', class: 'card-img-top'); ?>
            <div class="card-body">
                <? nav_heading_print(2, 'Rechnernetze', class: 'card-title boxed-h1'); ?>
<?
        load_defs_from_target_ids($t_ids)['teaser']();
?>
                <div class="alert alert-warning" role="alert">
                    Dieser Kurs befindet sich noch im Aufbau.
                </div>
                <div class="pp"><a href="<?= url_collect($t_ids) ?>" class="btn btn-primary">Kurs starten</a></div>
            </div>
        </div>
<?
    };

    $teaser = function()
    {
?>
    <p>
        Das Internet hat ein neues Zeitalter der Kommunikation eingeläutet. Bei diesem Thema geht es um die Grundlagen des Internets:
    </p>
    <ul>
        <li>
            <p>
                Wie genau sorgt ein Netz von Routern dafür, dass ein Video-Chat zwischen Deutschland und Australien fast ohne Verzögerung möglich ist?
            </p>
        </li>
        <li>
            <p>
                Wie finden die Datenpakete ihren Weg durch das Internet?
            </p>
        </li>
        <li>
            <p>
                Was genau verbirgt sich hinter dem WWW und dem E-Mail-System? 
            </p>
        </li>
    </ul>
<?
    };

    $process = function(Target $target)
    {
?>
    <div class="alert alert-warning" role="alert">
        Dieser Kurs befindet sich noch im Aufbau.
    </div>
<?
    };
?>