<?php

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_simplebarchart', get_string('pluginname', 'local_simplebarchart'));
    $ADMIN->add('localplugins', $settings);
}