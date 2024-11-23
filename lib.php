<?php

function local_simplebarchart_extend_navigation(global_navigation $nav) {
    $node = $nav->add(get_string('pluginname', 'local_simplebarchart'), new moodle_url('/local/simplebarchart/index.php'));
    $node->showinflatnavigation = true;
}