<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('index', compact('notes'));
    }
    public function create():view
    {
        return view('note.create');
    }
    public function store(NoteRequest $request): RedirectResponse
    {
        Note::create($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated.');
    }
    public function edit(Note $note): View
    {
        return view('note.edit', compact('note'));
    }
    public function update(NotaRequest $request, Note $note): RedirectResponse
    {
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated.');
    }
    public function show(Note $note)
    {
        return view('note.show', compact('note'));
    }
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index')->with('success', 'Note deleted.');
    }
}
