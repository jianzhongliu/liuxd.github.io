<?php

$path = __DIR__ . '/../';

$md_path = $path . 'md/';
$tpl_file = $path . 'md.tpl';
$html_path = $path . 'html/';

$md_files = glob($md_path . '*.md');
$tpl_content = file_get_contents($tpl_file);

foreach ($md_files as $md_file) {
    $text = file_get_contents($md_file);
    $html = str_replace('{$markdown}', $text, $tpl_content);
    $fileinfo = pathinfo($md_file);
    $filename = $html_path . $fileinfo['filename'] . '.html';
    file_put_contents($filename, $html);
}
