<button style="background-color: #d58823" {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex btn btn-primary items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }} >
    {{ $slot }}
</button>
