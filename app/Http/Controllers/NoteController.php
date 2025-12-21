<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::query()
            ->where('user_id', $this->userId())
            ->latest()
            ->paginate(10);

        return view('note.index', ['notes' => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'note' => ['required', 'string', 'max:2000'],
        ]);

        $note = Note::create([
            'note' => $validated['note'],
            'user_id' => $this->userId(),
        ]);

        return redirect()
            ->route('note.show', $note)
            ->with('status', 'Note created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        $this->assertOwnership($note);

        return view('note.show', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        $this->assertOwnership($note);

        return view('note.edit', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $this->assertOwnership($note);

        $validated = $request->validate([
            'note' => ['required', 'string', 'max:2000'],
        ]);

        $note->update($validated);

        return redirect()
            ->route('note.show', $note)
            ->with('status', 'Note updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $this->assertOwnership($note);

        $note->delete();

        return redirect()
            ->route('note.index')
            ->with('status', 'Note deleted');
    }

    /**
     * Resolve the acting user id. Falls back to seeded user 1 when unauthenticated.
     */
    private function userId(): int
    {
        return auth()->id() ?? 1;
    }

    /**
     * Ensure the note belongs to the current user.
     */
    private function assertOwnership(Note $note): void
    {
        if ($note->user_id !== $this->userId()) {
            throw new ModelNotFoundException();
        }
    }
}
