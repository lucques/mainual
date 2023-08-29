<?
    $init_preprocessing = function(Module $module, PreprocessContext $ctx) {
        $ctx->activate_module(new Module('default-template', is_shared: true, is_external: false));
    };
?>