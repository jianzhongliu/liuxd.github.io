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

//get ppts
function get_ppts(){
    $path = __DIR__ . '/../ppt/';
    $md_files = glob($path . 'md/*.md');
    $ret = '';

    foreach ($md_files as $md_file) {
        $fileinfo = pathinfo($md_file);
        $cli = __DIR__ . '/build_ppt.sh '.$fileinfo['filename'];
        `$cli`;
        $url = 'http://liuxd.github.io/ppt/deck.js/ppt/'.$fileinfo['filename'].'.html';
        $ret .= '<h4><a href="' . $url . '" target="_blank">' . $fileinfo['filename'] . '</a></h4>' . PHP_EOL;
    }

    return $ret;
}

chdir(__DIR__);
$tpl = file_get_contents(__DIR__ . '/index.tpl');
$articles = get_articles();
$ppts = get_ppts();
$tmp = str_replace('{$articles}', $articles, $tpl);
$html = str_replace('{$ppts}', $ppts, $tmp);

file_put_contents(__DIR__ . '/../index.html', $html);
