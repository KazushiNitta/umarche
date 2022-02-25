<x-tests.app>
    <x-slot name="header">
        ヘッダー1
    </x-slot>

    コンポーネントテスト1

    <x-tests.card title="タイトル" content="本文" :message="$message"></x-tests.card>
    <x-tests.card title="タイトル2"></x-tests.card>
    <x-tests.card title="タイトル3" class="bg-red-500"></x-tests.card>
</x-tests.app>
