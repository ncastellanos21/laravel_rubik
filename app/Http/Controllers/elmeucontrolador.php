<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class elmeucontrolador extends Controller
{
    public function insert(Request $request) {
        $request->validate(
            [
                'title' => 'riquered|min:3'
            ]
        );

        $todo=new texemple();
        $todo->nom = $request->title;
        $todo->save();
        return redirect()->route('index')->with('success','created correctly');
    }
}
