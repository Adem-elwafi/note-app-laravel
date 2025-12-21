<x-layout>
    <div class="row" style="justify-content: space-between; align-items: center; margin-bottom: 1rem;">
        <div>
            <h1 style="margin: 0;">New note</h1>
            <p class="muted">Write anything up to 2000 characters.</p>
        </div>
        <a class="btn secondary" href="{{ route('note.index') }}">Back</a>
    </div>

    <div class="card">
        <form action="{{ route('note.store') }}" method="POST" class="stack">
            @csrf

            <div class="stack">
                <label for="note">Note</label>
                <textarea name="note" id="note" required maxlength="2000">{{ old('note') }}</textarea>
                @error('note')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <button class="btn" type="submit">Save note</button>
                <a class="btn secondary" href="{{ route('note.index') }}">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
