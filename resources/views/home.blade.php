<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <a href="/create-message" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">New</a>
    <ul role="list" class="divide-y divide-gray-100 mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        @foreach ($messages as $message)
            <div class="border-b border-gray-200">
                <li class="flex gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4 mr-auto">
                      <a href="/message/{{ $message->id }}" class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $message->title }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ Str::limit($message->body, 50) }}</p>
                      </a>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                      <p class="text-sm leading-6 text-gray-900">{{ $message->created_at->format('j F Y') }}</p>
                      <p class="mt-1 text-xs leading-5 text-gray-500">Updated {{ $message->updated_at->diffForHumans() }}</time></p>
                    </div>
                    <div class="flex items-center text-sm leading-6">
                      <a href="/edit-message/{{ $message->id }}" class="rounded-md font-semibold px-3 py-2 mr-2 bg-indigo-600 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
                      <a href="/delete-message/{{ $message->id }}" class="rounded-md font-semibold px-3 py-2 mr-2 text-gray-900 hover:bg-gray-100">Delete</a>
                    </div>
                </li>
            </div>
        @endforeach
    </ul>
</x-layout>