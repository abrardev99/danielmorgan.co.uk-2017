<?php

return [

    'baseUrl' => 'https://danielmorgan.co.uk',

    'production' => false,

    'myName' => 'Daniel Morgan',

    'collections' => [
        'projects',

        'trips' => [
            'path' => 'travel/{filename}'
        ],
    ],

    'selected' => function ($page, $section) {
        $className = 'is-active';

        if ($page->getPath() === '' && $section === 'about') {
            return $className;
        }

        return str_contains($page->getPath(), $section) ? $className : '';
    },

    'tripsInYear' => function ($page, $trips, $year) {
        return $trips->filter(function ($trip) use ($year) {
            return $trip->year === $year;
        });
    },

];
