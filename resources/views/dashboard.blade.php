<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-col h-full px-8 py-5">
        <div class="flex justify-between w-full shadow rounded-full overflow-hidden">
            <div class="flex space-x-4 px-4 py-2 w-full justify-center bg-purple-600 cursor-pointer">
                <div class="font-semibold text-white">
                    Applicant List
                </div>
                <div class="flex items-center font-semibold bg-white rounded-full px-2 text-xs">
                    15
                </div>
            </div>
            <div class="flex space-x-4 px-4 py-2 w-full justify-center bg-gray-200 hover:bg-yellow-200 cursor-pointer">
                <div class="font-semibold">
                    KIV List
                </div>
                <div class="flex items-center font-semibold bg-white rounded-full px-2 text-xs">
                    8
                </div>
            </div>
            <div class="flex space-x-4 px-4 py-2 w-full justify-center bg-gray-200 hover:bg-yellow-200 cursor-pointer">
                <div class="font-semibold">
                    Ready for Interview
                </div>
                <div class="flex items-center font-semibold bg-white rounded-full px-2 text-xs">
                    2
                </div>
            </div>
            <div class="flex space-x-4 px-4 py-2 w-full justify-center bg-gray-200 hover:bg-yellow-200 cursor-pointer">
                <div class="font-semibold">
                    Completed
                </div>
                <div class="flex items-center font-semibold bg-white rounded-full px-2 text-xs">
                    1
                </div>
            </div>
        </div>
        <hr class="my-2">
        <div class="flex flex-col space-y-2 flex-1 overflow-auto">
            <div class="bg-gray-100 p-4">
                <div class="flex space-x-8">
                    <div class="w-32 p-1">
                        <div class="flex justify-center items-center h-36 bg-white rounded-lg">
                            <svg class="w-20 text-gray-300" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex">
                            <div class="font-semibold w-40">Applicant's Name</div>
                            <div>: Ahmad Farouq Bin Ahmad Ridzuan</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">NRIC</div>
                            <div>: 880809-10-5041</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Position</div>
                            <div>: Senior Executive (Programmer)</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Home Location</div>
                            <div>: Cyberjaya</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Expected Salary</div>
                            <div>: RM3000</div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-48 text-sm border-l">
                        <div class="font-semibold">
                            Application Date / Time
                        </div>
                        <div>
                            14 / 02 / 2021 02:48 PM
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 justify-end mt-2">
                    <button class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded text-white text-sm">
                        Details
                    </button>
                    <button class="px-4 py-2 bg-yellow-600 hover:bg-yellow-700 rounded text-white text-sm">
                        KIV
                    </button>
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-white text-sm">
                        Interview
                    </button>
                    <button class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded text-white text-sm">
                        Reject
                    </button>
                </div>
            </div>
            <div class="bg-gray-100 p-4">
                <div class="flex space-x-8">
                    <div class="w-32 p-1">
                        <div class="flex justify-center items-center h-36 bg-white rounded-lg">
                            <svg class="w-20 text-gray-300" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex">
                            <div class="font-semibold w-40">Applicant's Name</div>
                            <div>: Ahmad Farouq Bin Ahmad Ridzuan</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">NRIC</div>
                            <div>: 880809-10-5041</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Position</div>
                            <div>: Senior Executive (Programmer)</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Home Location</div>
                            <div>: Cyberjaya</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Expected Salary</div>
                            <div>: RM3000</div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-48 text-sm border-l">
                        <div class="font-semibold">
                            Application Date / Time
                        </div>
                        <div>
                            14 / 02 / 2021 02:48 PM
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 justify-end mt-2">
                    <button class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded text-white text-sm">
                        Details
                    </button>
                    <button class="px-4 py-2 bg-yellow-600 hover:bg-yellow-700 rounded text-white text-sm">
                        KIV
                    </button>
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-white text-sm">
                        Interview
                    </button>
                    <button class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded text-white text-sm">
                        Reject
                    </button>
                </div>
            </div>
            <div class="bg-gray-100 p-4">
                <div class="flex space-x-8">
                    <div class="w-32 p-1">
                        <div class="flex justify-center items-center h-36 bg-white rounded-lg">
                            <svg class="w-20 text-gray-300" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex">
                            <div class="font-semibold w-40">Applicant's Name</div>
                            <div>: Ahmad Farouq Bin Ahmad Ridzuan</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">NRIC</div>
                            <div>: 880809-10-5041</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Position</div>
                            <div>: Senior Executive (Programmer)</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Home Location</div>
                            <div>: Cyberjaya</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Expected Salary</div>
                            <div>: RM3000</div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-48 text-sm border-l">
                        <div class="font-semibold">
                            Application Date / Time
                        </div>
                        <div>
                            14 / 02 / 2021 02:48 PM
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 justify-end mt-2">
                    <button class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded text-white text-sm">
                        Details
                    </button>
                    <button class="px-4 py-2 bg-yellow-600 hover:bg-yellow-700 rounded text-white text-sm">
                        KIV
                    </button>
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-white text-sm">
                        Interview
                    </button>
                    <button class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded text-white text-sm">
                        Reject
                    </button>
                </div>
            </div>
            <div class="bg-gray-100 p-4">
                <div class="flex space-x-8">
                    <div class="w-32 p-1">
                        <div class="flex justify-center items-center h-36 bg-white rounded-lg">
                            <svg class="w-20 text-gray-300" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex">
                            <div class="font-semibold w-40">Applicant's Name</div>
                            <div>: Ahmad Farouq Bin Ahmad Ridzuan</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">NRIC</div>
                            <div>: 880809-10-5041</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Position</div>
                            <div>: Senior Executive (Programmer)</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Home Location</div>
                            <div>: Cyberjaya</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Expected Salary</div>
                            <div>: RM3000</div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-48 text-sm border-l">
                        <div class="font-semibold">
                            Application Date / Time
                        </div>
                        <div>
                            14 / 02 / 2021 02:48 PM
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 justify-end mt-2">
                    <button class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded text-white text-sm">
                        Details
                    </button>
                    <button class="px-4 py-2 bg-yellow-600 hover:bg-yellow-700 rounded text-white text-sm">
                        KIV
                    </button>
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-white text-sm">
                        Interview
                    </button>
                    <button class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded text-white text-sm">
                        Reject
                    </button>
                </div>
            </div>
            <div class="bg-gray-100 p-4">
                <div class="flex space-x-8">
                    <div class="w-32 p-1">
                        <div class="flex justify-center items-center h-36 bg-white rounded-lg">
                            <svg class="w-20 text-gray-300" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex">
                            <div class="font-semibold w-40">Applicant's Name</div>
                            <div>: Ahmad Farouq Bin Ahmad Ridzuan</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">NRIC</div>
                            <div>: 880809-10-5041</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Position</div>
                            <div>: Senior Executive (Programmer)</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Home Location</div>
                            <div>: Cyberjaya</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Expected Salary</div>
                            <div>: RM3000</div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-48 text-sm border-l">
                        <div class="font-semibold">
                            Application Date / Time
                        </div>
                        <div>
                            14 / 02 / 2021 02:48 PM
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 justify-end mt-2">
                    <button class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded text-white text-sm">
                        Details
                    </button>
                    <button class="px-4 py-2 bg-yellow-600 hover:bg-yellow-700 rounded text-white text-sm">
                        KIV
                    </button>
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-white text-sm">
                        Interview
                    </button>
                    <button class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded text-white text-sm">
                        Reject
                    </button>
                </div>
            </div>
            <div class="bg-gray-100 p-4">
                <div class="flex space-x-8">
                    <div class="w-32 p-1">
                        <div class="flex justify-center items-center h-36 bg-white rounded-lg">
                            <svg class="w-20 text-gray-300" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex">
                            <div class="font-semibold w-40">Applicant's Name</div>
                            <div>: Ahmad Farouq Bin Ahmad Ridzuan</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">NRIC</div>
                            <div>: 880809-10-5041</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Position</div>
                            <div>: Senior Executive (Programmer)</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Home Location</div>
                            <div>: Cyberjaya</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Expected Salary</div>
                            <div>: RM3000</div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-48 text-sm border-l">
                        <div class="font-semibold">
                            Application Date / Time
                        </div>
                        <div>
                            14 / 02 / 2021 02:48 PM
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 justify-end mt-2">
                    <button class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded text-white text-sm">
                        Details
                    </button>
                    <button class="px-4 py-2 bg-yellow-600 hover:bg-yellow-700 rounded text-white text-sm">
                        KIV
                    </button>
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-white text-sm">
                        Interview
                    </button>
                    <button class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded text-white text-sm">
                        Reject
                    </button>
                </div>
            </div>
            <div class="bg-gray-100 p-4">
                <div class="flex space-x-8">
                    <div class="w-32 p-1">
                        <div class="flex justify-center items-center h-36 bg-white rounded-lg">
                            <svg class="w-20 text-gray-300" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex">
                            <div class="font-semibold w-40">Applicant's Name</div>
                            <div>: Ahmad Farouq Bin Ahmad Ridzuan</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">NRIC</div>
                            <div>: 880809-10-5041</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Position</div>
                            <div>: Senior Executive (Programmer)</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Home Location</div>
                            <div>: Cyberjaya</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Expected Salary</div>
                            <div>: RM3000</div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-48 text-sm border-l">
                        <div class="font-semibold">
                            Application Date / Time
                        </div>
                        <div>
                            14 / 02 / 2021 02:48 PM
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 justify-end mt-2">
                    <button class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded text-white text-sm">
                        Details
                    </button>
                    <button class="px-4 py-2 bg-yellow-600 hover:bg-yellow-700 rounded text-white text-sm">
                        KIV
                    </button>
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-white text-sm">
                        Interview
                    </button>
                    <button class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded text-white text-sm">
                        Reject
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
