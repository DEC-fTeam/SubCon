<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('How to Use') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Subscribe
                    <p>あなたが登録したサブスクライブを確認できます</p>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Create
                    <p>あなたはサブスクライブを登録することができます</p>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Graph
                    <p>あなたが登録しているサブスクライブの合計金額を支払い方法ごとに確認することができます</p>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    Sort
                    <p>支払い方法からサブスクライブの名前を探すことができます</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>