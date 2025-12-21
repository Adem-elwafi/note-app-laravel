<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
            :root {
                --bg: #0b1021;
                --card: #121932;
                --text: #e8ecf7;
                --muted: #9aa2be;
                --accent: #5dd4ff;
                --danger: #ff6b6b;
            }

            * { box-sizing: border-box; }

            body {
                margin: 0;
                font-family: "Inter", system-ui, -apple-system, sans-serif;
                background: radial-gradient(circle at 20% 20%, rgba(93, 212, 255, 0.08), transparent 30%),
                    radial-gradient(circle at 80% 0%, rgba(255, 107, 107, 0.08), transparent 25%),
                    linear-gradient(140deg, #0b1021 0%, #0c1126 60%, #0f1430 100%);
                color: var(--text);
                min-height: 100vh;
            }

            a { color: var(--accent); text-decoration: none; }
            a:hover { text-decoration: underline; }

            header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 1rem 1.5rem;
                position: sticky;
                top: 0;
                backdrop-filter: blur(12px);
                background: rgba(11, 16, 33, 0.7);
                border-bottom: 1px solid rgba(93, 212, 255, 0.1);
            }

            nav { display: flex; gap: 1rem; }
            nav a { font-weight: 600; }

            main { max-width: 960px; margin: 0 auto; padding: 2rem 1.25rem 3rem; }

            .card {
                background: var(--card);
                border: 1px solid rgba(93, 212, 255, 0.14);
                border-radius: 12px;
                padding: 1.25rem;
                box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
            }

            .btn {
                display: inline-flex;
                align-items: center;
                gap: 0.4rem;
                padding: 0.65rem 1rem;
                border-radius: 10px;
                border: none;
                cursor: pointer;
                font-weight: 600;
                background: linear-gradient(120deg, #5dd4ff, #6b8bff);
                color: #0c1126;
                transition: transform 120ms ease, box-shadow 120ms ease;
            }

            .btn:hover { transform: translateY(-1px); box-shadow: 0 10px 30px rgba(93, 212, 255, 0.25); }
            .btn.secondary { background: rgba(154, 162, 190, 0.2); color: var(--text); }
            .btn.danger { background: linear-gradient(120deg, #ff6b6b, #ff9a6b); color: #0c1126; }

            form { display: grid; gap: 0.75rem; }

            label { font-weight: 600; color: var(--muted); }

            textarea {
                width: 100%;
                min-height: 180px;
                padding: 0.75rem;
                border-radius: 10px;
                border: 1px solid rgba(93, 212, 255, 0.25);
                background: rgba(12, 17, 38, 0.8);
                color: var(--text);
                resize: vertical;
            }

            .stack { display: grid; gap: 0.75rem; }
            .row { display: flex; gap: 0.75rem; align-items: center; flex-wrap: wrap; }

            .muted { color: var(--muted); font-size: 0.95rem; }
            .status { padding: 0.75rem 1rem; border-radius: 10px; background: rgba(93, 212, 255, 0.12); border: 1px solid rgba(93, 212, 255, 0.35); }
            .error { padding: 0.5rem 0.75rem; border-radius: 8px; background: rgba(255, 107, 107, 0.12); border: 1px solid rgba(255, 107, 107, 0.4); color: #ffc7c7; }

            ul.list { list-style: none; padding: 0; margin: 0; display: grid; gap: 0.75rem; }
            ul.list li { padding: 1rem; border-radius: 10px; background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(93, 212, 255, 0.08); }
        </style>
    </head>
    <body>
        <header>
            <div class="row">
                <strong>Notes</strong>
            </div>
            <nav>
                <a href="{{ route('welcome') }}">Home</a>
                <a href="{{ route('note.index') }}">All notes</a>
                <a href="{{ route('note.create') }}">Create</a>
            </nav>
        </header>

        <main>
            @if(session('status'))
                <div class="status">{{ session('status') }}</div>
            @endif

            {{ $slot }}
        </main>
    </body>
</html>
