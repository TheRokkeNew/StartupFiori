<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use App\Models\Flower;
class PermissionsController extends Controller
{
    use HasRoles; // Usa il trait HasRoles
    // public function createAdmin()
    // {
    //     Role::firstOrCreate(["name" => "admin"]);

    //     $user = User::where("name", "Test User")->first();
    //     $roles = $user->getRoleNames(); // Ottieni i ruoli associati

    //     // // Stampa i ruoli
    //     print($roles);
    //     // $user->assignRole("admin");

    // }

    public function GetPanel()
    {
        $users = User::with('roles')  // Esegui il "caricamento eager" dei ruoli
            ->get()
            ->sortByDesc(function ($user) {
                // Metti gli utenti con il ruolo 'admin' in cima
                return $user->roles->contains('name', 'admin') ? 1 : 0;
            });
    
        // Aggiungi il conteggio totale dei fiori
        $totalFlowers = Flower::count();  // Ottieni il numero totale dei fiori nel catalogo
        $totalUsers = User::count();

        // Passa gli utenti e il conteggio dei fiori alla vista
        return view('admin/adminPanel', compact('users', 'totalFlowers','totalUsers'));
    }

    public function GetPermissions(){}

    public function GetCreateUserView(){
        // Recupera tutti i ruoli
        $roles = Role::all();

        // Passa i ruoli alla vista
        return view('admin/adminCreateUser', compact('roles'));
    }

    public function AdminCreateUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'roles' => 'nullable|array', 
            'roles.*' => 'exists:roles,id', 
        ]);

        
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        
        if (isset($validated['roles'])) {
            $user->roles()->sync($validated['roles']);
        }
        
        return redirect()->route('admin.panel')->with('success', 'Utente creato con successo');
    }

    public function GetEditUserView($userId){
        $user = User::with('roles')->findOrFail($userId);
        $roles = Role::all();
        return view('admin/adminEditUser', compact('user', 'roles'));
    }

    public function AdminEditUser(Request $request, User $user)
    {
        // Recupera tutti i ruoli disponibili dal database
        $availableRoles = Role::pluck('name')->toArray();
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'role' => 'nullable|string|in:' . implode(',', $availableRoles)
        ]);
    
        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);
    
        // Gestione ruoli
        if (empty($validatedData['role'])) {
            $user->roles()->detach();
        } else {
            $role = Role::where('name', $validatedData['role'])->firstOrFail();
            $user->roles()->sync([$role->id]);
        }
    
        return redirect()->route('admin.panel')
            ->with('success', 'Utente aggiornato con successo!');
    }

    public function AdminDestroyUser($id){
        $user = User::findOrFail($id);
        if ($user->id === Auth::id()) {
            
            return redirect()->route('admin.panel')->with('error', 'Non puoi eliminare il tuo account.');
        }
        $user->delete();
    
        return redirect()->route('admin.panel')->with('success', 'Utente eliminato con successo');
    }

}