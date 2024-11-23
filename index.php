<?php

require('../../config.php');
require_login();

$PAGE->set_url(new moodle_url('/local/simplebarchart/index.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_simplebarchart'));
$PAGE->set_heading(get_string('pluginname', 'local_simplebarchart'));

echo $OUTPUT->header();
echo html_writer::tag('div', '', ['id' => 'barchart']);
echo $OUTPUT->footer();