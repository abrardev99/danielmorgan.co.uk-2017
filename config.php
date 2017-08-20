<?php

return [

    'baseUrl' => 'https://danielmorgan.co.uk',

    'production' => false,

    'myName' => 'Daniel Morgan',

    'collections' => [],

    'selected' => function ($page, $section) {
        $className = 'is-active';

        if ($page->getPath() === '' && $section === 'projects') {
            return $className;
        }

        return str_contains($page->getPath(), $section) ? $className : '';
    },

];
