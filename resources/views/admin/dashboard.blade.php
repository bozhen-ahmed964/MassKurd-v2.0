@extends('layout.admin')
@section('content')
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-14 mx-auto space-y-5">
            <div class="lg:w-10/5 w-full mx-auto overflow-auto">
                <table class="table-auto w-full min-w-max text-left whitespace-no-wrap">
                    <thead>
                        <tr>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">
                                Full Name</th>

                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 ">
                                Age</th>

                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 ">
                                Gender</th>

                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 ">
                                Phone Number</th>

                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 ">
                                Status</th>

                            <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 ">
                                End Date</th>

                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tr rounded-br">
                                Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($memberData as $data)
                            <tr>
                                <td class="px-4 py-3">{{ $data->fullName }}</td>
                                <td class="px-4 py-3">{{ $data->age }}</td>
                                <td class="px-4 py-3">{{ $data->gender }}</td>
                                <td class="px-4 py-3">{{ $data->phoneNumber }}</td>
                                <td class="px-4 py-3">
                                    <button
                                        class="{{ $data->created_at < $data->updated_at ? 'px-2 py-2 rounded bg-green-600  text-white text-xs' : 'px-2 py-2 rounded bg-red-700 text-white text-xs' }}"
                                        {{ $data->created_at >= $data->updated_at ? 'disabled' : '' }}>
                                        {{ $data->created_at < $data->updated_at ? 'Active' : 'Deactive' }}
                                    </button>
                                </td>

                                <td class="px-4 py-3">{{ $data->updated_at?->format('Y-m-d') }}</td>

                                <td class="px-4 py-3 space-x-4 flex items-center">

                                    <button class="px-2 py-2 bg-gray-600 text-white rounded"> Profile</button>

                                        <a href="{{ url('admin/memberInfoUpdate/' . $data->id) }}" class="px-2 py-2 bg-blue-700 text-white rounded"> Update</a>

                                    <form action="{{ url('/admin/deleteMember/' . $data->id) }}" method="post">
                                        @csrf
                                        <button class="px-2 py-2 bg-red-700 text-white rounded">Delete</button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $memberData->links() }}
        </div>
    </section>
@endsection
