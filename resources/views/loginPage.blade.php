<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MassKurd 2.0</title>

    @vite('resources/css/app.css')
</head>

<body>


    <div class="fixed top-6 right-6">
        <a href="{{ url('/adminLogin') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Admin Login Only </a>
    </div>



    <form method="post" action="#" class="flex justify-center items-center h-screen bg-gray-900">
        <div class="max-w-md w-full bg-gray-900 rounded p-6 space-y-4">
            <div class="mb-4">
                <h2 class="text-xl font-bold text-white">Go To Your Profile</h2>
                <p class="text-gray-400">Memebers Only</p>
            </div>
            <div>
                <input
                    class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600"
                    type="text" placeholder="Full Name">
            </div>
            <div>
                <button
                    class="w-full py-4 bg-blue-600 hover:bg-blue-700 rounded text-sm font-bold text-gray-50 transition duration-200">Show
                    Profile</button>
            </div>
        </div>
    </form>

</body>

</html>
