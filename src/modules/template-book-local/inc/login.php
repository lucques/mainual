<?
    $render_generic = function(Module $template, Target $root_target, array $params) {
        // Use shared template-book
        $sub_template = new Module('template-book', is_shared: true, is_external: false, config: $template->config->root);

        $template->render_component_generic_with_sub_template($sub_template, 'login', $root_target, $params);
    };
?>