<?
    $preprocess = function (PreprocessContext $c) {
        $c->activate_module('role-info');

        $c->title = 'MaInual';   
         
        $c->add_subpage('inf');
        $c->add_subpage('impressum');
    };
    
    $process = function(Target $t)
    {
?>

<? css_start(); ?> h1 {display:none;} <? css_end(); ?>

<section class="first-child d-flex" style="gap: 40px;">
    <div>
        <img src="./res/logo-extended.png" alt="" style="max-width:300px;">
    </div>
    <div>
        <p class="first-child">
            Diese Website bietet Materialien an, mit denen du dir Themen der Mathematik und der Informatik erschließen kannst. Alle Kurse sind frei zugänglich. Jeder Kurs enthält (zukünftig) folgende Elemente.
        </p>
        <ul>
            <li><strong>Motivation</strong>: Warum ist das Thema spannend?</li>
            <li><strong>Erklärungen</strong> zu wichtigen Ideen</li>
            <li><strong>Interaktive</strong> Apps zum „Rumspielen“</li>
            <li><strong>Aufgaben</strong> mit Lösungsvorschlägen</li>
            <li><strong>Projekte</strong> und <strong>Tutorials</strong></li>
        </ul>
    </div>
</section>

<section>
    <div class="row">
        <div class="col">
<?
    load_defs_from_target_ids($t->navigate_to_ids(['inf', 'net']))['teaser_card']();
?>
        </div>
        <div class="col">
            <p class="text-center" style="padding-top:100px;"><em>(More in the future - stay tuned!)</em></p>
        </div>
    </div>
</section>

<section>
    <em>Quellen:</em>
<?
    ref_print_list();
?>
</section>

<?
    };
?>