@extends('default')
@section('contents')
<style>
.earn-card {
    background-image:url("{{ asset('/assets/img/img-blues.svg') }}");
    background-repeat: no-repeat;
    background-size: 100vw;
}
</style>
<div class="w-full p-6 earn-card rounded-lg mb-6">
    <div class="flex items-center justify-between">
        <div>
            <div class="text-gray-200 font-semibold">Total Point</div>
            <div class="text-white text-[34px] font-extrabold">1100</div>
        </div>

        <a class="bg-white px-3 py-1.5 rounded-[20px]">
            <div class="text-cyan-600 text-sm font-semibold">Collect Points</div>
        </a>
    </div>
    <div class="backdrop-blur-2xl bg-opacity-20 bg-white p-2.5 rounded-md w-full">
        <p class="font-medium text-sm text-white">You can redeem point min 10000</p>
    </div>
</div>
<div class="w-full md:w-[768px] mt-4">
    <div class="text-gray-200 text-lg font-semibold leading-tight mb-4">Choose Plan</div>
    <div class="flex">
        <div class="w-1/2 bg-yellow-400 p-4 mr-2 mb-2 earn-card">
            <div class="text-gray-200 font-semibold text-lg"><i class="fa fa-money" aria-hidden="true"></i></div>
            <div class="text-gray-200 font-semibold">Can Redeem</div>
            <div class="text-white text-[34px] font-extrabold">100</div>
        </div>
        <div class="w-1/2 bg-red-400 p-4 mb-2 earn-card">
            <div class="text-gray-200 font-semibold text-lg"><i class="fa fa-usd" aria-hidden="true"></i></div>
            <div class="text-gray-200 font-semibold">Point</div>
            <div class="text-white text-[34px] font-extrabold">1000</div>
        </div>
    </div>

</div>
@endsection
