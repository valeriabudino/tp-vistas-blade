<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista de Mascotas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1>Directorio de Mascotas</h1>
    @if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
    @endif
    <a href="{{ route('pets.create') }}">Registrar Nueva
        Mascota</a><br><br>
    <div class="bg-white rounded-xl shadow p-4 mb-6">
        <form method="GET" action="{{ route('pets.index') }}" class="flex gap-3
items-center">
            <label class="font-semibold text-slate-800">Filtrar:</label>
            <input
                type="text"
                name="buscar"
                placeholder="Especie (Ej. Gato)"
                value="{{ request('buscar') }}"
                class="w-full border border-gray-300 rounded-lg px-3 py-2
focus:outline-none focus:ring-2 focus:ring-green-500">
            <button type="submit" class="bg-slate-800 hover:bg-slate-700
text-white px-4 py-2 rounded-lg transition">
                Buscar
            </button>
            <a href="{{ route('pets.index') }}" class="bg-gray-500
hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition">
                Limpiar
            </a>
        </form>
    </div>
    <div class="bg-white rounded-xl shadow overflow-hidden">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-slate-800 text-white">
                    <th class="px-4 py-3 text-left">ID</th>
                    <th class="px-4 py-3 text-left">Nombre</th>
                    <th class="px-4 py-3 text-left">Especie</th>
                    <th class="px-4 py-3 text-left">Edad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                <tr class="border-b hover:bg-gray-100 transition">
                    <td class="px-4 py-3">{{ $pet->id }}</td>
                    <td class="px-4 py-3 font-semibold">{{ $pet->name
}}</td>
                    <td class="px-4 py-3">{{ $pet->species }}</td>
                    <td class="px-4 py-3">{{ $pet->age }} años</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-6">
        {{ $pets->links() }}
    </div>
</body>

</html>