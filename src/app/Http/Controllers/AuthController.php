<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginPostRequest $request)
    {
        $datum = $request->validated();

    /**
     * ログイン処理
     * 
     */
        if (Auth::attempt($datum) === false) {
            return back()
                   ->withInput() // 入力値の保持
                   ->withErrors(['auth' => 'メールアドレスかパスワードに誤りがあります。',])
                   ;
        }

        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    /**
     * ログアウト処理
     * 
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerateToken();  // CSRFトークンの再生成
        $request->session()->regenerate();  // セッションIDの再生成
        return redirect(route('front.index'));
    }
}
