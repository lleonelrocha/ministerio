<?php

//1 admin
//2 user
//3 superAdmin

require (__DIR__ . '/Routes/auth.php');
require (__DIR__ . '/Routes/prueba.php');
require (__DIR__ . '/Routes/page.php');
require (__DIR__ . '/Routes/libro.php');

Route::group( ['middleware' => 'auth', 'is_admin', 'est' ], function() {

    require(__DIR__ . '/Routes/home.php');

    require(__DIR__ . '/Routes/user.php');

    require(__DIR__ . '/Routes/post.php');

    require (__DIR__ . '/Routes/profile.php');

    require (__DIR__ . '/Routes/role.php');

    require (__DIR__ . '/Routes/profile_role.php');

    require (__DIR__ . '/Routes/pdf.php');

});






