<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company Registration') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    {{-- // Start Of Employee Registration --}}
                    {{-- // Start Of Employee Registration --}}
                    {{-- <div class="col-md-12 ">
                           <p class="text-center"><a href="{{route('companyRegistration')}}" id="signin">Companies </a></p>
                           <p class="text-center"><a href="{{route('companies_view')}}" id="signin">Companies View </a></p>
                    // End Of Employee Registration
                           <p class="text-center"><a href="{{route('employeeRegistration')}}" id="signin">Employees</a></p>
                           <p class="text-center"><a href="{{route('employees_view')}}" id="signin">View Employees</a></p>

                     </div> --}}
                    {{-- // End Of Employee Registration --}}
                    {{-- Form Of Section --}}
                    @yield('Contents')

                    {{-- End Company Form Of Section --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
