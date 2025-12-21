<x-layout>
    <div class="row" style="justify-content: space-between; align-items: center; margin-bottom: 1rem;">
        <div>
            <h1 style="margin: 0;">Edit note</h1>
            <p class="muted">Last updated {{ $note->updated_at->diffForHumans() }}</p>
        </div>
        <a class="btn secondary" href="{{ route('note.show', $note) }}">Back</a>
    </div>

    <div class="card">
        <form action="{{ route('note.update', $note) }}" method="POST" class="stack">
            @csrf
            @method('PUT')

            <div class="stack">
                <label for="note">Note</label>
                <textarea name="note" id="note" required maxlength="2000">{{ old('note', $note->note) }}</textarea>
                @error('note')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <button class="btn" type="submit">Update note</button>
                <a class="btn secondary" href="{{ route('note.show', $note) }}">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
