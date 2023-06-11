<x-layout title="TOP | 英語学習アプリ">
    <div class="space-y-4">
        <h2 class="text-2xl">英語学習アプリ</h2>

        <div>
            <a href="{{ route('fill-in-the-blank') }}" class="px-4 py-2 rounded bg-blue-500 text-white">穴埋め問題</a>
            <a href="{{ route('word-card') }}" class="px-4 py-2 rounded bg-blue-500 text-white">単語カード問題</a>
            <a href="{{ route('review') }}" class="px-4 py-2 rounded bg-blue-500 text-white">過去の問題を復習</a>
        </div>
    </div>
</x-layout>
