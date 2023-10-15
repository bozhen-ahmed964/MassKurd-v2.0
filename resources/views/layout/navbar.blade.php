<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <span class="ml-3 text-xl">MassKurd 2.0</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('adminDashboard') }}" class="mr-5 hover:text-white">Dashboard</a>
            <a href="{{ route('addMemberPage') }}" class="mr-5 hover:text-white">Add Member</a>
            <a href="{{ route('coursePage') }}" class="mr-5 hover:text-white">Courses</a>
            <a href="{{ route('trainerPage') }}" class="mr-5 hover:text-white">Trainer</a>
            <a href="{{ route('billingPage') }}" class="mr-5 hover:text-white">Billing</a>
            <a href="{{ route('settingPage') }}" class="mr-5 hover:text-white">Setting</a>
        </nav>
        <form method="post" action="{{ route('logout') }}" class="fixed top-6 right-6">
            @csrf

            <button
                class="inline-flex items-center bg-red-700 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-base mt-4 md:mt-0">Logout
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>

        </form>
    </div>
</section>
