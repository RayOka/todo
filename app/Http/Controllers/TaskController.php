<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // index
    public function index (int $id) 
    {
        // 全てのフォルダを取得する
        $folders = Folder::all();

        // 選ばれたフォルダを取得する
        $current_folder = Folder::find($id);

        // 選ばれたフォルダのタスクを全取得
        // $tasks = Task::where('folder_id', $current_folder->id)->get();
        $tasks = $current_folder->tasks()->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $id,
            'tasks' => $tasks,
        ]);
    }
}