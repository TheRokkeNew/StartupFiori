<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
class PermissionsController extends Controller
{
    use HasRoles; // Usa il trait HasRoles
    public function createAdmin()
    {
        Role::firstOrCreate(["name" => "admin"]);

        $user = User::where("name", "Test User")->first();
        $roles = $user->getRoleNames(); // Ottieni i ruoli associati

        // // Stampa i ruoli
        print($roles);
        // $user->assignRole("admin");

    }
}