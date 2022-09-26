<?php

namespace App\Http\Controllers;

use App\Helpers\ValidationHelper;
use App\Models\Categories;
use App\Models\Films;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Тестовое задание KZ',
            'films' => Films::where('status', 'publish')->orderByDesc('id')->paginate(5),
        ];

        return view('front.home', $data);
    }

    /**
     * Publish an entry.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function publish($id)
    {
        Films::findOrFail($id)->update(['status'=>'publish']);
        return redirect()->route('film.index')->with('status', 'Фильм опубликован');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title'      => 'Добавление фильма',
            'categories' => Categories::all(),
        ];

        return view('front.filmCreate', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('head', 'poster', 'categories');

        $request->validate([
            'head'       => 'required|string',
            'poster'     => 'mimes:jpeg,jpg,png,gif|max:10000',
            'categories' => 'required|array',
        ]);

        if($request->hasFile('poster')) {
            $fileName = md5(time().$request->ip()).'.'.$request->file('poster')->getClientOriginalExtension();
            $filePath = public_path('uploads/poster');
            $request->file('poster')->move($filePath, $fileName);
            $data['poster'] = $fileName;
        }

        $films = Films::create($data);
        $films->categories()->attach($data['categories']);

        return redirect()->route('film.index')->with('status', 'Данные фильма успешно сохранены.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Films::whereRaw('id=? && status=?', [$id, 'publish'])->get()->first();

        $data = [
            'title' => $film['head']??null,
            'film'  => $film,
        ];

        return view('front.filmShow', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title'      => 'Редактирование фильма',
            'film'       => Films::findOrFail($id),
            'categories' => Categories::all(),
        ];

        return view('front.filmEdit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film = Films::findOrFail($id);
        $data = $request->only('head', 'poster', 'categories');

        $request->validate([
            'head'       => 'required|string',
            'poster'     => 'mimes:jpeg,jpg,png,gif|max:10000',
            'categories' => 'required|array',
        ]);

        if($request->hasFile('poster')) {
            $fileName = md5(time().$request->ip()).'.'.$request->file('poster')->getClientOriginalExtension();
            $filePath = public_path('uploads/poster');
            $request->file('poster')->move($filePath, $fileName);
            $data['poster'] = $fileName;
            File::delete(public_path('uploads/poster/'.$film['poster']));
        }

        $film->update($data);
        $film->categories()->detach();
        $film->categories()->attach($data['categories']);

        return redirect()->back()->with('status', 'Данные фильма успешно сохранены.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Films::findOrFail($id);
        $film->categories()->detach();
        $film->delete();
        return redirect()->route('film.index')->with('status', 'Фильм успешно удален');
    }
}
