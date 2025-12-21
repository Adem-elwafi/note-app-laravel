<x-layout>
    <div class="row" style="justify-content: space-between; align-items: center; margin-bottom: 1rem;">
        <div class="stack" style="gap: 0.35rem;">
            <h1 style="margin: 0;">Note</h1>
            <p class="muted">Created {{ $note->created_at->diffForHumans() }} · Updated {{ $note->updated_at->diffForHumans() }}</p>
        </div>
        <div class="row" style="gap: 0.5rem;">
            <a class="btn secondary" href="{{ route('note.index') }}">Back</a>
            <a class="btn" href="{{ route('note.edit', $note) }}">Edit</a>
            <form action="{{ route('note.destroy', $note) }}" method="POST" onsubmit="return confirm('Delete this note?');">
                @csrf
                @method('DELETE')
                <button class="btn danger" type="submit">Delete</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div style="white-space: pre-wrap; line-height: 1.5;">{{ $note->note }}</div>
    </div>
</x-layout>
