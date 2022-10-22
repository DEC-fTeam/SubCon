<!-- resources/views/subscribe/show.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Show subscribe Detail') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="mb-6">
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">subscribe</p>
              <p class="py-2 px-3 text-grey-darkest" id="name">
                {{$subscribe->name}}
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">Price</p>
              <p class="py-2 px-3 text-grey-darkest" id="price">
                {{$subscribe->price}}円
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">Cycle</p>
              <p class="py-2 px-3 text-grey-darkest" id="cycle">
                {{$subscribe->cycle}}ヶ月
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-grey-darkest">Payment</p>
              <p class="py-2 px-3 text-grey-darkest" id="payment">
                {{$subscribe->payment}}
              </p>
            </div>
            <a href="{{ route('subscribe.delete',$subscribe->id) }}">
              <h3 class="text-left font-bold text-lg text-grey-dark">削除</h3>
            </a>
            <a href="{{ url()->previous() }}" class="text-left font-bold text-lg text-grey-dark">
              Back
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>


