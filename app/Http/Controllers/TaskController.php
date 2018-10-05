<?php

namespace App\Http\Controllers;

use App\Model\TaskModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\New_;

class TaskController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function getAll()
    {
        $tasks = TaskModel::all();
        return view('takslist', compact('tasks'));

    }

    public function create()
    {
        return view('create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request) {
        $create = New TaskModel();
        $create->name = $request->input('name');
        $create->phone = $request->input('phone');
        $create->email = $request->input('email');
        $create->address = $request->input('address');

//        dd($request);
        $file = $request->file('inputFile');
        //hasfile kiem tra xem co ton tai file hay k
        if (!$request->hasFile('inputFile')) {
            $create->image = $file;
        } else {
////Lấy ra định dạng và tên mới của file từ request
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->input('inputFileName');
            // Gán tên mới cho file trước khi lưu lên server
            $newFileName = "$fileName.$fileExtension";
//            dd($newFileName);

            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('inputFile')->storeAs('public/images', $newFileName);


            // Gán trường image của đối tượng task với tên mới
            $create->image = $newFileName;
        }
        $create->save();
        return redirect()->route('takslist');
    }
}
