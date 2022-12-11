<?php

function view(string $page, array $fields)
{
    $finalPage = file_get_contents("views/$page.html");
    foreach ($fields as $key => $field) {
        $finalPage = str_replace('{{$'.$key.'}}', $field, $finalPage);
    }
    return $finalPage;
}

function index()
{
    $title = 'View Page';
    $heading = 'Welcome Back';
    echo view(page: 'index', fields: ['title' => $title , 'heading' => $heading]);
}

// you can call function like this way index() or 'index'() think about that;
'index'();
