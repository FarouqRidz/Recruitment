@foreach ($candidates as $candidate)
    <div class="bg-gray-100 pt-4 pl-4 pb-1 pr-1 rounded-lg">
        <div class="flex flex-col items-center md:items-start space-y-4 md:space-y-0 md:flex-row md:space-x-4">
            <div class="w-32">
                <div class="flex justify-center items-center h-40 bg-white rounded-lg shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-28 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-1 flex-col bg-white px-6 py-4 w-full rounded-tl-3xl rounded-lg shadow-md">
                <div class="flex">
                    <div class="flex-1">
                        <div class="flex flex-col items-center sm:items-start w-full lg:flex-row mb-2">
                            <div class="font-semibold sm:w-40 text-sm">Applicant's Name</div>
                            <div>{{ $candidate->name }}</div>
                        </div>
                        <div class="flex flex-col items-center sm:items-start w-full lg:flex-row mb-2">
                            <div class="font-semibold sm:w-40 text-sm">Phone Number</div>
                            <div>{{ $candidate->phone_number }}</div>
                        </div>
                        <div class="flex flex-col items-center sm:items-start w-full lg:flex-row mb-2">
                            <div class="font-semibold sm:w-40 text-sm">Gender</div>
                            <div>{{ $candidate->gender }}</div>
                        </div>
                        <div class="flex flex-col items-center sm:items-start w-full lg:flex-row mb-2">
                            <div class="font-semibold sm:w-40 text-sm">Expected Salary</div>
                            <div>RM {{ $candidate->expected_salary }}</div>
                        </div>
                    </div>
                    <div class="hidden lg:flex flex-col space-y-2 items-center w-48 text-sm border-l-2">
                        <div class="font-semibold">
                            Application Date
                        </div>
                        <div>
                            {{ $candidate->created_at->format('d/m/Y') }}
                        </div>
                        <div class="font-semibold">
                            Application Time
                        </div>
                        <div>
                            {{ $candidate->created_at->format('h:i A') }}
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 justify-end mt-2">
                    <select name="status" id="status" class="rounded-lg shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value=""></option>
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}" @if ($status->id == $candidate->status_id) selected @endif>{{ $status->name }}</option>
                        @endforeach
                    </select>
                    <button class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded-full text-white font-semibold text-sm">
                        Details
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach
