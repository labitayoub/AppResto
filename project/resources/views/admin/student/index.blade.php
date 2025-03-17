{{-- @extends('layouts.admin') --}}

@section('content')
    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">List of Students</h1>
            <a href="{{ route('questions.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Create New Student
            </a>
        </div>

        @if(session('success'))
            <div id="success-message" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @foreach ($questions as $question)
        <div class="bg-white shadow-md rounded-lg p-6 mb-4">
            <h2 class="text-xl font-bold mb-2">{{ $question->question }}</h2>
            <h3 class="text-lg font-bold mb-2">Students:</h3>
                <ul class="space-y-2">
                    @foreach ($question->responses as $response)
                        <li class="flex items-center">
                            <span class="mr-2">-</span>
                            <span class="text-gray-800">{{ $response->response }}</span>
                            <span class="ml-auto {{ $response->is_correct ? 'text-green-500' : 'text-red-500' }} font-bold">
                                {{ $response->is_correct ? 'Correct' : 'Incorrect' }}
                            </span>
                        </li>
                    @endforeach
                </ul>
                <div class="mt-4 flex justify-end">
                    <a href="{{ route('questions.edit', $question->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Edit
                    </a>
                    
                    <a href="{{ route('admin.delete', $question->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                        onclick="return confirm('Are you sure you want to delete this question and all its responses?')">
                         Delete
                     </a>
                </div>
            </div>
        @endforeach

        @if(count($questions) === 0)
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                No students found. Create your first student!
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.transition = 'opacity 1s ease';
                    successMessage.style.opacity = '0';
                    
                    setTimeout(function() {
                        successMessage.remove();
                    }, 1000);
                }, 5000);
            }
        });
    </script>
@endsection