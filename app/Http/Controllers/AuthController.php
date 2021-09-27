<?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class AuthController extends Controller
    {
        public function showLoginForm()
        {
            return view('auth.login');
        }
        
        public function login(Request $request)
        {
            $data = $request->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);
            
            if (auth()->attempt($data)) {
                $request->session()->regenerate();
                
                return redirect()->intended(route('index'));
            }
            
            return redirect()->back();
        }
    
        public function logout()
        {
            auth()->logout();
            
            return redirect(route('auth.login'));
        }
    }
