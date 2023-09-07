@extends('default')
@section('contents')
<style>
</style>
<div class="w-full p-6 bg-neutral-700 rounded-xl backdrop-blur-[30px]">
    <div class="flex">
        <img class="w-14 h-14 rounded-full" src="https://via.placeholder.com/56x56" />
        <div class="w-1/4 ml-2">
            <div class="text-gray-200 font-semibold">Doni Trondolo</div>
            <div class="w-[50px] h-[21px] px-2.5 py-[3px] left-[107px] top-[55px] bg-white bg-opacity-20 rounded justify-center items-center gap-1.5 inline-flex">
                <div class="text-gray-200 text-xs font-medium">Basic</div>
            </div>
        </div>
    </div>

</div>
<div class="w-full mt-4">
    <div class="text-gray-200 text-lg font-semibold leading-tight mb-4">Setting</div>
        <div class="w-full bg-neutral-700 mr-2 mb-2 rounded-xl divide-y">
            <div class="p-4">
                <div class="flex justify-between">
                    <div class="justify-items-start">
                        <div class="flex-col justify-start items-start gap-[3px] inline-flex">
                            <div class="text-gray-200 text-[15px] font-semibold leading-tight">Subscription Plan</div>
                            <div class="h-[18px] text-neutral-400 text-xs font-medium leading-tight">Choose your subscription</div>
                        </div>
                    </div>
                    <div class="pt-2 pr-2 justify-items-end text-gray-500">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="bg-zinc-800 rounded-bl-sm rounded-br-sm divide-y">
                    <div class="text-gray-200 text-sm font-medium leading-tight px-3.5 py-3 ">
                        Transaction History
                    </div>
                    <div class="text-gray-200 text-sm font-medium leading-tight px-3.5 py-3 ">
                        Subscription Plan
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="flex justify-between">
                    <div class="justify-items-start">
                        <div class="flex-col justify-start items-start gap-[3px] inline-flex">
                            <div class="text-gray-200 text-[15px] font-semibold leading-tight">Subscription Plan</div>
                            <div class="h-[18px] text-neutral-400 text-xs font-medium leading-tight">Choose your subscription</div>
                        </div>
                    </div>
                    <div class="pt-2 pr-2 justify-items-end text-gray-500">
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
