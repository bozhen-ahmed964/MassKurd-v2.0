@extends('layout.admin')
@section('content')
    <form method="post" action="{{ url('/admin/updateMember' . $memberData->id) }}"
        class="text-gray-400 bg-gray-900 body-font">
        @csrf
        <input type="hidden" name="_method" value="put">
        <div class="max-w-5xl space-y-5 px-5 py-24 mx-auto">

            {{-- row 1 --}}
            <div class="flex sm:flex-row flex-col mx-auto  items-end gap-5">
                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="fullName" class="leading-7 text-sm text-gray-400">Full Name</label>
                    <input type="text" id="fullName" name="fullName" value="{{ old('fullName', $memberData->fullName) }}" required
                        class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>


                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="phoneNumber" class="leading-7 text-sm text-gray-400">Phone Number</label>
                    <input type="number" id="phoneNumber" name="phoneNumber" min="0" required
                        value="{{ old('phoneNumber' , $memberData->phoneNumber) }}"
                        class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>


            {{-- row 2 --}}
            <div class="flex sm:flex-row flex-col mx-auto  items-end gap-5">

                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="age" class="leading-7 text-sm text-gray-400">Age</label>
                    <input type="number" id="age" name="age" min="0" value="{{ old('age' , $memberData->age) }}" required
                        class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>


                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="weight" class="leading-7 text-sm text-gray-400">Weight</label>
                    <input type="number" id="weight" name="weight" min="0" value="{{ old('weight' , $memberData->weight) }}" required
                        class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="height" class="leading-7 text-sm text-gray-400">Height</label>
                    <input type="number" id="height" name="height" min="0" value="{{ old('height' , $memberData->height) }}" required
                        class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative sm:mb-0 flex-grow w-full">
                    <label class="block text-sm text-grey-700 font-medium">Gender</label>
                    <div class="relative">
                        <select name="gender" required
                            class="rounded border w-full border-gray-700 focus:ring-2 focus:ring-indigo-900 bg-transparent appearance-none py-2 focus:outline-none focus:border-indigo-500 text-white pl-3 pr-10">
                            <option value="male" {{ old('gender' , $memberData->gender) == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender' , $memberData->gender) == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                </div>
            </div>


            {{-- row 3  --}}
            <div class="flex sm:flex-row flex-col mx-auto items-end gap-5">

                <div class="relative sm:mb-0 flex-grow w-full">
                    <label class="block text-sm text-grey-700 font-medium">Course Type</label>
                    <div class="relative">
                        <select name="game_type" required
                            class="rounded border w-full border-gray-700 focus:ring-2 focus:ring-indigo-900 bg-transparent appearance-none py-2 focus:outline-none focus:border-indigo-500 text-white pl-3 pr-10">
                            <option value="cardio" {{ old('game_type' , $memberData->game_type) == 'cardio' ? 'selected' : '' }}>cardio</option>
                            <option value="bodybuilding" {{ old('game_type' , $memberData->game_type) == 'bodybuilding' ? 'selected' : '' }}>body
                                building</option>
                        </select>
                    </div>
                </div>

                <div class="relative sm:mb-0 flex-grow w-full">
                    <label class="block text-sm text-grey-700 font-medium">Pay</label>
                    <select name="pay" required
                        class="rounded border w-full border-gray-700 focus:ring-2 focus:ring-indigo-900 bg-transparent appearance-none py-2 focus:outline-none focus:border-indigo-500 text-white pl-3 pr-10">
                        <option value="30000" {{ old('pay' , $memberData->pay) == '30000' ? 'selected' : '' }}>30,000 IQD</option>
                        <option value="40000" {{ old('pay' , $memberData->pay) == '40000' ? 'selected' : '' }}>40,000 IQD</option>

                    </select>
                </div>

                <div class="relative sm:mb-0 flex-grow w-full">
                    <label class="block text-sm text-grey-700 font-medium">Course Pay</label>
                    <select name="coursePay" required
                        class="rounded border w-full border-gray-700 focus:ring-2 focus:ring-indigo-900 bg-transparent appearance-none py-2 focus:outline-none focus:border-indigo-500 text-white pl-3 pr-10">
                        <option value="5000" {{ old('coursePay' , $memberData->coursePay) == '5000' ? 'selected' : '' }}>5,000 IQD</option>
                        <option value="10000" {{ old('coursePay' , $memberData->coursePay) == '10000' ? 'selected' : '' }}>10,000 IQD</option>

                    </select>
                </div>



                <div class="relative sm:mb-0 flex-grow w-full">
                    <label for="end_date" class="leading-7 text-sm text-gray-400">End Date</label>
                    <input type="date" id="end_date" name="end_date" min="0" value="{{ old('end_date' , $memberData->updated_at->format('Y-m-d')) }}"
                        class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative sm:mb-0 flex-grow w-full">
                    <label class="block text-sm text-grey-700 font-medium">Select Trainer</label>
                    <select name="trainer_id" required
                        class="rounded border w-full border-gray-700 focus:ring-2 focus:ring-indigo-900 bg-transparent appearance-none py-2 focus:outline-none focus:border-indigo-500 text-white pl-3 pr-10">
                        @foreach ($trainers as $trainer)
                            <option value="{{ $trainer->id }}">{{ $trainer->trainerName }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            {{-- add button --}}
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 rounded text-sm font-bold text-gray-50 py-2 px-2 ">Add
                    Member</button>
            </div>


        </div>
    </form>
@endsection
