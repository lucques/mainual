<?
    $preprocess = function (PreprocessContext $ctx) {
        $ctx->title = 'Internetschicht';
        
        $ctx->add_subpage('grundlagen');
        $ctx->add_subpage('erstes-netz');
        $ctx->add_subpage('binaersystem');
        $ctx->add_subpage('binaersystem-aufgaben');
        $ctx->add_subpage('netzpraefix-adressraum-lan');
        $ctx->add_subpage('netzmaske');
        $ctx->add_subpage('zwei-lans-verbinden');
        $ctx->add_subpage('beliebige-netze-verbinden');

    };
?>

<? $process = function(Target $target) { ?>

<? }; ?>