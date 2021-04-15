@foreach ($candidates as $candidate)
    <div class="bg-gray-100 p-4 rounded">
        <div class="flex space-x-8">
            <div class="w-32 p-1">
                <div class="flex justify-center items-center h-40 bg-white rounded-lg">
                    <svg class="w-20 text-gray-300" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-1 flex-col">
                <div class="flex">
                    <div class="flex-1">
                        <div class="flex">
                            <div class="font-semibold w-40">Applicant's Name</div>
                            <div>: {{ $candidate->name }}</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">NRIC</div>
                            <div>: {{ $candidate->nric }}</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Phone Number</div>
                            <div>: {{ $candidate->phone_number }}</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Gender</div>
                            <div>: {{ $candidate->gender }}</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Race</div>
                            <div>: {{ $candidate->race }}</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Email</div>
                            <div>: {{ $candidate->email }}</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Marital Status</div>
                            <div>: {{ $candidate->marital_status }}</div>
                        </div>
                        <div class="flex">
                            <div class="font-semibold w-40">Expected Salary</div>
                            <div>: RM {{ $candidate->expected_salary }}</div>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-2 items-center w-48 text-sm border-l">
                        <div class="font-semibold">
                            Application Date / Time
                        </div>
                        <div>
                            {{ $candidate->created_at->format('d/m/Y') }}
                        </div>
                        <div>
                            {{ $candidate->created_at->format('h:i A') }}
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 justify-end mt-2">
                    <select name="status" id="status" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value=""></option>
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}" @if ($status->id == $candidate->status_id) selected @endif>{{ $status->name }}</option>
                        @endforeach
                    </select>
                    <button class="px-4 py-2 bg-green-600 hover:bg-green-700 rounded text-white text-sm">
                        Details
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach
