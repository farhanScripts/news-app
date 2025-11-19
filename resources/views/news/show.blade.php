@extends('layouts.main')

@section('container')
    <article class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h1 class="text-3xl font-bold mb-4">{{ $news->judul }}</h1>
        <p class="text-gray-600 mb-2">Oleh {{ $news->wartawan->nama }} | {{ $news->created_at->format('d M Y') }}</p>
        <div class="prose max-w-none">
            {{-- pake {!! !!} agar tag html tidak terender --}}
            {!! $news->isi !!}
        </div>
        <a href="{{ asset('storage/' . $news->dokumen) }}" target="_blank" class="text-blue-600 hover:underline">
            Dokumen
            Pendukung Berita
        </a>
    </article>
    <a href="{{ route('news.index') }}" class="text-blue-600 hover:underline">← Kembali ke Daftar Berita</a>
@endsection
