@if ($paginator->hasPages())
    <div class="p-4 flex flex-col sm:flex-row items-center justify-between gap-4">
        <!-- Informasi jumlah data -->
        <span class="text-sm text-gray-500 dark:text-gray-400">
            Menampilkan {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} dari {{ $paginator->total() }} data
        </span>

        <!-- Pagination -->
        <div class="flex flex-wrap items-center justify-center gap-2">
            {{-- Tombol Previous --}}
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 rounded-md border text-gray-400 dark:text-gray-500 cursor-not-allowed">Previous</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                   class="px-4 py-2 rounded-md border text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                    Previous
                </a>
            @endif

            {{-- Tombol Halaman --}}
            @foreach ($paginator->links()->elements[0] ?? [] as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="px-3 py-1.5 rounded-md bg-blue-100 text-blue-600 font-medium">{{ $page }}</span>
                @else
                    <a href="{{ $url }}"
                       class="px-3 py-1.5 rounded-md text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                        {{ $page }}
                    </a>
                @endif
            @endforeach

            {{-- Tombol Next --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                   class="px-4 py-2 rounded-md border text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                    Next
                </a>
            @else
                <span class="px-4 py-2 rounded-md border text-gray-400 dark:text-gray-500 cursor-not-allowed">Next</span>
            @endif
        </div>
    </div>
@endif
