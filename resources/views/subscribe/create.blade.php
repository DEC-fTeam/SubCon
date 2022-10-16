<!-- resources/views/tweet/create.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create New Subscribe') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('subscribe.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="SubscribeTitle">Subscribe Title</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="name" id="name">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="subscribePrice">Subscribe Price</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="price" id="price">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="paymentCycle">Payment cycle</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="cycle" id="cycle">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="payment">Payment</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="payment" id="payment">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="firstPayment">Start payDay</label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="firstpayment" id="firstpayment">
            </div>
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
              Create
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>