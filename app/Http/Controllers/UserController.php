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

class UserController extends Controller
{
    public function showRegistrationForm(){
        return view('register');
    }

    public function showUserProfile(){

        if(!Auth::check()){
            return redirect()->route('login')->with('error','Devi essere loggato per accedere a questa pagina');
        }
        return view('userProfile');
    }

    public function createAdmin()
    {
        $role = Role::create(["name" => "admin"]);
        $permission = Permission::create(['name' => 'edit articles']);
        $role->givePermissionTo($permission);
        $permission->assignRole($role);
        
    }

    public function HandlePermissions(){
        $user = User::where("name", "Test User")->first();
        $user->assignRole('admin');
        $role = Role::where("name","admin")->first();
        if($role and $user){
            DB::table('role_user')->insert([
                "user_id" => $user->id,
                "role_id" => $role->id,
                "user_name" => $user->name,
                "role_name" => $role->name
            ]);
        }

        return redirect()->route("home");
    }

    public function updateUserProfile(Request $request){
        if(!Auth::check()){
            return redirect()->route('login')->with('error','Devi essere loggato per accedere a questa pagina');
        }
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email, '.Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        $updateData = [
            'name' => $validateData['name'],
            'email' => $validateData['email'],
        ];

        if(!empty($validateData['password'])){
            $updateData['password'] = Hash::make($validateData['password']);
        }
        $user->update($updateData);

        Auth::setUser($user->fresh());

        return redirect()->route('showUserProfile')->with('success','Profilo aggiornato con successo');
    }



    public function register(Request $request){
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
        ]);

        
        Auth::login($user);

        return redirect()->route('home')->with('success', 'Registrazione avvenuta con successo! Sei stato loggato automaticamente');

    }

    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/')->with('success','Login effettuato con successo');
        }

        return back()->withErrors([
            'email' => 'Le credenziali fornite non sono corrette',
        ])->onlyInput('email');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success','Logout effettuato con successo');
    }

    public function uploadImage(Request $request){
        $validator = Validator::make($request->all(), [
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        if ($validator->fails()) {
            dd($validator->errors()->toArray());
        }
        

        $user = Auth::user();
        
        if($user->profile_image){
            Storage::delete('public/' .$user->profile_image);
        }

        $path = $request->file('profile_image')->store('profile_images','public');

        $user->profile_image = $path;
        $user->save();    
        
        return redirect()->route('home')->with('success','Immagine del profilo caricata con successo');

    }

}
