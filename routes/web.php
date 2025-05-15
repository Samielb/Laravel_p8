<?php

use App\Http\Controllers\UserController;

Route::get('/users-with-roles', [UserController::class, 'usersWithRoles']);
