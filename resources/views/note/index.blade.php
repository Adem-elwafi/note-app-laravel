@php use Illuminate\Support\Str; @endphp
<x-layout>
    <style>
        .notes-page { display: grid; gap: 1.25rem; }
        .notes-hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1.25rem;
            padding: 1.25rem 1.5rem;
            border-radius: 14px;
            border: 1px solid rgba(93, 212, 255, 0.2);
            background: radial-gradient(circle at 15% 20%, rgba(93, 212, 255, 0.12), transparent 35%),
                radial-gradient(circle at 85% 10%, rgba(255, 107, 107, 0.12), transparent 30%),
                linear-gradient(135deg, rgba(18, 25, 50, 0.9), rgba(12, 17, 38, 0.9));
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
        }
        .notes-hero h1 { margin: 0; font-size: 1.4rem; }
        .notes-hero .muted { margin-top: 0.2rem; }
        .notes-actions { display: flex; align-items: center; gap: 0.6rem; flex-wrap: wrap; }
        .notes-summary { display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 0.5rem; }
        .notes-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.5rem 0.75rem;
            border-radius: 999px;
            background: rgba(93, 212, 255, 0.12);
            border: 1px solid rgba(93, 212, 255, 0.25);
            color: var(--text);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .notes-card { display: grid; gap: 1rem; padding: 1.25rem; border-radius: 14px; }
        .notes-card h2 { margin: 0; font-size: 1.05rem; letter-spacing: 0.02em; }
        .notes-list { list-style: none; padding: 0; margin: 0; display: grid; gap: 0.85rem; }
        .notes-item {
            display: grid;
            gap: 0.5rem;
            padding: 1rem 1.1rem;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(93, 212, 255, 0.12);
            transition: border-color 140ms ease, transform 140ms ease, background 140ms ease;
        }
        .notes-item:hover {
            border-color: rgba(93, 212, 255, 0.35);
            background: rgba(93, 212, 255, 0.04);
            transform: translateY(-2px);
        }
        .note-meta { display: flex; align-items: center; gap: 0.5rem; color: var(--muted); font-size: 0.95rem; }
        .note-meta .dot { width: 6px; height: 6px; border-radius: 50%; background: var(--muted); opacity: 0.6; }
        .note-title { font-size: 1rem; font-weight: 600; color: var(--text); }
        .note-actions { display: flex; gap: 0.4rem; flex-wrap: wrap; }

        .empty-state {
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px dashed rgba(93, 212, 255, 0.25);
            background: rgba(93, 212, 255, 0.05);
            color: var(--muted);
        }

        .pagination-wrap { display: flex; justify-content: center; margin-top: 0.5rem; }

        @media (max-width: 720px) {
            .notes-hero { flex-direction: column; align-items: flex-start; }
            .notes-actions { width: 100%; justify-content: flex-start; }
            .note-actions { width: 100%; justify-content: flex-start; }
        }
    </style>

    <div class="notes-page">
        <div class="notes-hero">
            <div class="stack" style="gap: 0.3rem;">
                <h1>Your notes</h1>
                <div class="muted">Latest first · Paginated</div>
                <div class="notes-summary">
                    <span class="notes-pill">Total: {{ $notes->total() }}</span>
                    <span class="notes-pill">Page {{ $notes->currentPage() }} of {{ $notes->lastPage() }}</span>
                </div>
            </div>
            <div class="notes-actions">
                <a class="btn" href="{{ route('note.create') }}">New note</a>
                <a class="btn secondary" href="{{ route('welcome') }}">Back to home</a>
            </div>
        </div>

        <div class="card notes-card">
            <div class="row" style="justify-content: space-between; align-items: center;">
                <h2>All notes</h2>
                <span class="muted">Showing {{ $notes->count() }} of {{ $notes->total() }}</span>
            </div>

            @if($notes->isEmpty())
                <div class="empty-state">
                    <strong>No notes yet.</strong> Start a new note to capture your ideas.
                </div>
            @else
                <ul class="notes-list">
                    @foreach ($notes as $note)
                        <li class="notes-item">
                            <div class="note-meta">
                                <span>{{ $note->created_at->diffForHumans() }}</span>
                                <span class="dot"></span>
                                <span>Updated {{ $note->updated_at->diffForHumans() }}</span>
                            </div>
                            <a class="note-title" href="{{ route('note.show', $note) }}">{{ Str::limit($note->note, 140) }}</a>
                            <div class="note-actions">
                                <a class="btn secondary" href="{{ route('note.edit', $note) }}">Edit</a>
                                <form action="{{ route('note.destroy', $note) }}" method="POST" onsubmit="return confirm('Delete this note?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="pagination-wrap">
                    {{ $notes->links() }}
                </div>
            @endif
        </div>
    </div>
</x-layout>
