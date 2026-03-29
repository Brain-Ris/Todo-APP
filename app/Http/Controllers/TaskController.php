<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    function index(){
        //$taches=task::all();
        $taches=task::where('del',false)->get();
        return view('accueil',['taches'=>$taches]);
    }

    function add(){
        return view('add');
    }

    function store(Request $request){
        $taches= task::create(
            [
            'title'=> $request->title,
            'description'=> $request->description,
            'completed'=> false,
            'del'=> false,
            ]
        );
        return redirect('/');
    }

    public function delete($id){
        $tache=task::findOrFail($id);
        $tache->update(['del'=>true]);
        return redirect('/');
    }

    function edit($id){
        $tache=task::findOrFail($id);
        return view('edit',['tache'=>$tache]);
    }

    function modify(Request $request,$id){
        $tache=task::findOrFail($id);
        if ($request->completed){
            $cmp=true;
        }else{
            $cmp=false;
        }
        $tache->update(
            [
                'title'=> $request->title,
                'description'=> $request->description,
                'completed'=> $cmp,
            ]
        );
        return redirect('/');
    }
}
