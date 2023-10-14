<h2>hello world</h2>

<form method="post" action="{{ route('logout') }}" class="fixed top-6 right-6">
    @csrf
    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Logout</button>
</form>
