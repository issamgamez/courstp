<?php
namespace App\Http\Controllers;

use App\Models\CoursModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Show registration form
    public function register()
    {
        return view('user.register');
    }

    // Store new user
    public function store(Request $request)
    {
        UserModel::create($request->all());
        return redirect()->route('cours.index');
    }

    // Show login form 
    public function login()
    {
        return view('user.login');
    }

    // Handle login
    public function loginUser(Request $request)
    {
        
        $user = UserModel::where('fullname', $request->input('fullname'))->first();

        if ($user && $request->input('password') === $user->password) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('cours');
        }
    }

    public function dashboard()
    {
        $cours = CoursModel::all();
        return view('user.dashboard',compact('cours'));
    }

}
