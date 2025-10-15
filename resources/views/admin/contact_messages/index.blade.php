<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Pesan Kontak</h1>

        @if ($messages->isEmpty())
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-gray-600">Tidak ada pesan kontak yang tersedia.</p>
            </div>
        @else
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <tr>
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-left">Email</th>
                            <th class="py-3 px-6 text-left">Telepon</th>
                            <th class="py-3 px-6 text-left">Pesan</th>
                            <th class="py-3 px-6 text-left">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($messages as $message)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $message->name }}</td>
                                <td class="py-3 px-6 text-left">{{ $message->email }}</td>
                                <td class="py-3 px-6 text-left">{{ $message->phone ?? '-' }}</td>
                                <td class="py-3 px-6 text-left">{{ Str::limit($message->message, 100) }}</td>
                                <td class="py-3 px-6 text-left">{{ $message->created_at->format('d M Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $messages->links() }}
            </div>
        @endif
    </div>
</body>
</html>
