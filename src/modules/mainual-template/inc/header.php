<?
    $render_for_target = function(Module $template, Target $target) {
        // Use shared default-template
        $sub_template = new Module('default-template', is_shared: true, is_external: false, config: $target->template->config->root);

        $template->render_component_for_target_with_sub_template($sub_template, 'header', $target);
    };
?>