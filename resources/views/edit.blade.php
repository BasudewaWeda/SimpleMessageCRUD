<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <form method="POST" action="{{ route('message.update', $id=$message->id) }}">
    @csrf
    @method('PUT')
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $message->title }}">
              </div>
            </div>
          </div>
        
          <div class="col-span-full">
            <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
            <div class="mt-2">
              <textarea id="body" name="body" rows="10" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                {{ $message->body }}
              </textarea>
            </div>
          </div>
      </div>
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="rounded-md font-semibold px-3 py-2 mr-2 text-gray-900 hover:bg-gray-100 leading-6">Cancel</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>

</x-layout>