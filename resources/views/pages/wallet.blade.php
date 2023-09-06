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
            <div class="text-gray-200 font-semibold">Your Points</div>
            <div class="text-white text-[34px] font-extrabold">1240</div>
        </div>

        <a class="bg-white px-3 py-1.5 rounded-[20px]">
            <div class="text-cyan-600 text-sm font-semibold">Collect Points</div>
        </a>
    </div>
    <div class="backdrop-blur-2xl bg-opacity-20 bg-white p-2.5 rounded-md w-full">
        <p class="font-medium text-sm text-white">Redeem your points to get amazing reward</p>
    </div>
</div>
<div class="w-full mt-4">
    <div class="text-gray-200 text-lg font-semibold leading-tight mb-4">Choose Plan</div>
    <div class="grid grid-rows-2 grid-flow-col gap-4">
        <div class="col-span-2 earn-card p-6">01</div>
        <div class="col-span-2 earn-card p-6">02</div>
        <div class="col-span-2 earn-card p-6">03</div>
        <div class="col-span-2 earn-card p-6">04</div>
    </div>

</div>
@endsection
