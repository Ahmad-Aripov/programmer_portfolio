<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programmer;
class ProgrammerController extends Controller
{
    public function index()
    {
        // Получить всех программистов
        $programmers = Programmer::all();
        return view('programmers.index', compact('programmers'));
    }

    public function create()
    {
        // Вывести форму для создания программиста
        return view('programmers.create');
    }

    public function store(Request $request)
    {
        // Сохранить нового программиста в базу данных
        Programmer::create($request->all());
        return redirect()->route('programmers.index');
    }

    public function show(Programmer $programmer)
    {
        // Показать информацию о конкретном программисте
        return view('programmers.show', compact('programmer'));
    }

    public function edit(Programmer $programmer)
    {
        // Вывести форму для редактирования информации о программисте
        return view('programmers.edit', compact('programmer'));
    }

    public function update(Request $request, Programmer $programmer)
    {
        // Обновить информацию о программисте в базе данных
        $programmer->update($request->all());
        return redirect()->route('programmers.index');

    }

    public function destroy(Programmer $programmer)
    {
        // Удалить программиста из базы данных
        $programmer->delete();
        return redirect()->route('programmers.index');
    }
}
