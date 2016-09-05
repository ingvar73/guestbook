<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Гостевая книга на Laravel',
            'pagetitle' => 'Гостевая книга'
        ];
        return view('pages.messages.index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Гостевая книга на Laravel',
            'pagetitle' => 'Редактирование: Гостевая книга'
        ];
        return view('pages.messages.edit', $data);
    }
}
