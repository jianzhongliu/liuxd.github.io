<?php

//get articles
function get_articles () {
    $path = __DIR__ . '/../article/';

    $md_path = $path . 'md/';
    $tpl_file = $path . 'md.tpl';
    $html_path = $path . 'html/';

    $md_files = glob($md_path . '*.md');
    $tpl_content = file_get_contents($tpl_file);

    $ret = '';

    foreach ($md_files as $md_file) {
        $text = file_get_contents($md_file);
        $html = str_replace('{$markdown}', $text, $tpl_content);
        $fileinfo = pathinfo($md_file);
        $filename = $html_path . $fileinfo['filename'] . '.html';
        file_put_contents($filename, $html);
        $url = 'http://liuxd.github.io/article/html/'.$fileinfo['filename'].'.html';
        $ret .= '<h4><a href="' . $url . '" target="_blank">'. $fileinfo['filename'] . '</a></h4>' . PHP_EOL;
    }

    return $ret;
}

print_r(get_articles());

//@todo get ppts

//@todo get tpl

//@todo fresh index.html