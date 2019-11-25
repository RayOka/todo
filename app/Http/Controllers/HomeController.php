<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index ()
    {
        $user = Auth::user();

        $folder = $user->folders()->first();

        // フォルダを一つも持っていなかったらホームページを返す
        if (is_null($folder)) {
            return view('home');
        }

        // フォルダがあればフォルダのindexを返す
        return redirect()->route('tasks.index', [
            'folder' => $folder->id,
        ]);
    }
}
