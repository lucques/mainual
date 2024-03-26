<?
    $preprocess = function (PreprocessContext $c) {
        $c->activate_module('role-info');

        $c->title = 'Informatik';

        $c->add_subpage('net');
    };

    $process = function(Target $t)
    {
?>

<section>
    <div class="row">
        <div class="col">
<?
    load_defs_from_target_ids($t->navigate_to_ids(['net']))['teaser_card']();
?>
        </div>
        <div class="col">
            <p class="text-center" style="padding-top:100px;"><em>(More in the future - stay tuned!)</em></p>
        </div>
    </div>
</section>

<?
    };
?>