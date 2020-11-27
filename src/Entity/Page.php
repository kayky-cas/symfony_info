<?php

namespace App\Entity;

class Page
{
    public $title;

    public $name;

    public $path_file;
    
    public function __construct($title, $name, $controller)
    {
        $this->title = $title;
        $this->name = $name;
        $this->path_file = 'pages/'.$controller.'/'.$this->name.'.html.twig';
    }
    
}