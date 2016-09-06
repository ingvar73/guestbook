<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Messages;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Гостевая книга на Laravel',
            'messages' => Messages::Latest()->paginate(3),
            'count' => Messages::count()
        ];
        return view('pages.messages.index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Редактирование: Гостевая книга на Laravel',
            'pagetitle' => 'Гостевая книга'
        ];
        return view('pages.messages.edit', $data);
    }
}
