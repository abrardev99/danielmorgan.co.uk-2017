<?php

return [

    'baseUrl' => 'https://danielmorgan.co.uk',

    'production' => false,

    'myName' => 'Daniel Morgan',

    'collections' => [
        'projects' => [
            'sort' => ['-date'],
        ],

        'trips' => [
            'path' => 'travel/{filename}',
            'sort' => ['year', 'month'],
        ],
    ],

    'selected' => function ($page, $section) {
        $homePage = 'projects';
        $className = 'is-active';
        if ($page->getPath() === '' && $section === $homePage) {
            return $className;
        }
        return str_contains($page->getPath(), $section) ? $className : '';
    },

    'tripsInYear' => function ($page, $trips, $year) {
        return $trips->filter(function ($trip) use ($year) {
            return $trip->year === $year;
        })->sortBy(function ($trip) {
            return $trip->month;
        })->reverse();
    },

    'cache_bust' => function ($page, $filePath) {
        if ($page->production) {
            return $filePath . '?v=' . $page->version;
        }

        return $filePath;
    },

];
