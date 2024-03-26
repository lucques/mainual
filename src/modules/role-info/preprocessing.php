<?
    $init_preprocessing = function(Module $module, PreprocessContext $c) {
        $c->activate_template('template-book-local');

        $c->activate_module('source');
        $c->activate_module('exercise');
        $c->activate_module('references');

        $c->activate_module('nav');
    };
?>