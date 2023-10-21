@extends('layout.admin')

@section('content')
    <form method="post" action="{{ route('addTrainer') }}" class="text-gray-400 bg-gray-900 body-font">
        @csrf
        <div class="max-w-5xl space-y-5 px-5 py-24 mx-auto">
            <div class="flex sm:flex-row flex-col mx-auto  items-end gap-5">
                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="trainerName" class="leading-7 text-sm text-gray-400">Full Name</label>
                    <input type="text" id="trainerName" name="trainerName" value="{{ old('trainerName') }}" required
                        class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="phoneNumber" class="leading-7 text-sm text-gray-400">Phone Number</label>
                    <input type="number" id="phoneNumber" name="phoneNumber" min="0" required
                        value="{{ old('phoneNumber') }}"
                        class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="age" class="leading-7 text-sm text-gray-400">Age</label>
                    <input type="number" id="age" name="age" min="0" required value="{{ old('age') }}"
                        class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="pay" class="leading-7 text-sm text-gray-400">Pay</label>
                    <input type="number" id="pay" name="pay" min="0" required value="{{ old('pay') }}"
                        class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-2 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded "> Add Trainer
                </button>
            </div>
    </form>


    <div class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -mx-4 -my-8">
                <div class="py-8 px-4 lg:w-1/3">
                    @foreach ($trainer as $trainerData)
                        <div class="h-full flex items-start">
                            <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                <span
                                    class="text-gray-400 pb-2 mb-2 border-b-2 border-gray-700">{{ $trainerData->created_at->format('M') }}</span>
                                <span
                                    class="font-medium text-lg leading-none text-gray-300 title-font">{{ $trainerData->created_at->format('d') }}</span>
                            </div>
                            <div class="flex-grow pl-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-indigo-400 mb-1">Trainer</h2>
                                <h1 class="title-font text-xl font-medium text-white mb-3">{{ $trainerData->trainerName }}
                                </h1>
                                <p class="leading-relaxed mb-5">{{ $trainerData->phoneNumber }} | {{ $trainerData->age }} |
                                    Course Give</p>
                                <p class="leading-relaxed mb-5">{{ $trainerData->pay }} IQD</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
