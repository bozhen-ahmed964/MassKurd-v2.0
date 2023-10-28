@extends('layout.admin')
@section('content')
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            {{-- picture section --}}
            <div class="w-full md:w-3/12 md:mx-2">
                <div class="rounded">
                    <div class="image overflow-hidden">
                        <img class="h-auto rounded w-full mx-auto"
                            src="https://cdn.britannica.com/63/215263-050-6C78005B/American-actor-Joaquin-Phoenix-2020.jpg"
                            alt="userImage">
                    </div>
                    <h1 class="text-white px-2 py-2 bg-gray-800 rounded font-bold text-xl leading-8 my-1">
                        {{ $profileData->fullName }}</h1>
                    <ul class="bg-gray-800 text-gray-600 py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span class="text-white font-thin">Status</span>
                            <span class="ml-auto">
                                <button
                                    class="{{ $profileData->created_at < $profileData->updated_at ? 'px-2 py-2 rounded bg-green-600  text-white text-xs' : 'px-2 py-2 rounded bg-red-700 text-white text-xs' }}"
                                    {{ $profileData->created_at >= $profileData->updated_at ? 'disabled' : '' }}>
                                    {{ $profileData->created_at < $profileData->updated_at ? 'Active' : 'Deactive' }}
                                </button>
                            </span>
                        </li>
                        <li class="flex items-center py-3">
                            <span class="font-thin text-white">Member since</span>
                            <span class="ml-auto text-white">{{ $profileData->created_at->format('Y-m-d') }}</span>
                        </li>
                        <li class="flex items-center py-3">
                            <span class="font-thin text-white">Expire Date</span>
                            <span class="text-white ml-auto">{{ $profileData->updated_at->format('Y-m-d') }}</span>
                        </li>
                    </ul>
                </div>
            </div>



            {{-- about section --}}
            <div class="w-full md:w-9/12 mx-2 h-64">
                <div class="p-3 bg-gray-800 rounded shadow-sm">
                    <div class="flex items-center space-x-2 font-semibold text-white leading-10">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Member Information</span>
                    </div>
                    <div class="text-white font-thin">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Full Name</div>
                                <div class="px-4 py-2">{{ $profileData->fullName }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Gender</div>
                                <div class="px-4 py-2">{{ $profileData->gender }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Phone Number</div>
                                <div class="px-4 py-2">{{ $profileData->phoneNumber }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Weight</div>
                                <div class="px-4 py-2">{{ $profileData->weight }} Kg</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Height</div>
                                <div class="px-4 py-2">{{ $profileData->height }} Cm</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Course Type </div>
                                <div class="px-4 py-2">
                                    {{ $profileData->game_type }}
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Pay</div>
                                <div class="px-4 py-2">{{ $profileData->pay }} IQD</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Course Pay</div>
                                <div class="px-4 py-2">{{ $profileData->coursePay }} IQD</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Trainer</div>
                                <div class="px-4 py-2">Trainer Name</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of about section -->



                <div class="my-4"></div>
                <!-- Experience and education -->
                <div class="p-3 bg-gray-800 shadow-sm rounded-sm">
                    <div class="grid grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-white leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Experience</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                            </ul>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
@endsection
