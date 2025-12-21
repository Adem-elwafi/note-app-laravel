@php use Illuminate\Support\Str; @endphp
<x-layout>
    <div class="row" style="justify-content: space-between; align-items: flex-start; margin-bottom: 1rem;">
        <div>
            <h1 style="margin: 0;">Your notes</h1>
            <p class="muted">Latest first · Paginated</p>
        </div>
        <a class="btn" href="{{ route('note.create') }}">New note</a>
    </div>

    <div class="card stack">
        @if($notes->isEmpty())
            <p class="muted">No notes yet. Create your first one.</p>
        @else
            <ul class="list">
                @foreach ($notes as $note)
                    <li>
                        <div class="row" style="justify-content: space-between; align-items: flex-start;">
                            <div class="stack" style="gap: 0.35rem;">
                                <div class="muted">{{ $note->created_at->diffForHumans() }}</div>
                                <a href="{{ route('note.show', $note) }}" style="font-size: 1rem;">{{ Str::limit($note->note, 120) }}</a>
                            </div>
                            <div class="row" style="gap: 0.35rem;">
                                <a class="btn secondary" href="{{ route('note.edit', $note) }}">Edit</a>
                                <form action="{{ route('note.destroy', $note) }}" method="POST" onsubmit="return confirm('Delete this note?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div style="margin-top: 1rem;">
                {{ $notes->links() }}
            </div>
        @endif
    </div>
</x-layout>
