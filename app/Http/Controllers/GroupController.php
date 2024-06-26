<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequestGroup;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // вывести список всех записей
        $table = Groups::all();
        return view('groups.index',['table'=>$table]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //вывести форму для создания новой записи
        return view('/groups/create');
    }

    public function add(CreateRequestGroup $request)
    {
        //dd($request);        

        $group = new Groups();
        $group->title = $request->input('title');
        $group->start_from = $request->input('start_from');
        
        if ($request->input('is_active') === null) {
            $is_active = false; 
        } else {
            $is_active =  $request->input('is_active');
        }

        $group->is_active = $is_active;
        $group->save();

        return redirect()->route('home')->with('success',"Новая группа успешно добавлена");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //сохранение записи в бд
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Groups $groups)
    {
        //вывод одной записи
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //отобразить форму для редактирование одной записи
        $data = Groups::find($id);   
        $table = $data->students;         
        return view('/groups/details',['data'=>$data, 'table'=>$table]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Groups $groups)
    {
        //обновление записи в бд
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Groups $groups)
    {
        //удаление созданной записи
    }
}
