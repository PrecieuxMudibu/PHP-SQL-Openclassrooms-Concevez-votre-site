<!-- <?php
// Une bien meilleure façon de stocker une recette !
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];

?> -->


<!-- <?php
$recipe['title'] = 'Cassoulet';
$recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
$recipe['author'] = 'john.doe@exemple.com';
$recipe['enable'] = true;
?> -->



<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

// foreach($recipes as $recipe) {
//     echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL; 
// }
    echo $recipes[0]['title'];