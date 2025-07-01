@props(['type' => 'success', 'title' => 'Berhasil', 'message' => 'Pesan berhasil disimpan.'])

@php
    $color = match($type) {
        'success' => 'green-500',
        'danger' => 'red-500',
        'warning' => 'yellow-500',
        'info' => 'blue-500',
        default => 'gray-500'
    };

    $bg = match($type) {
        'success' => 'green-50',
        'danger' => 'red-50',
        'warning' => 'yellow-50',
        'info' => 'blue-50',
        default => 'gray-100'
    };

    $icon = match($type) {
        'success' => 'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2Zm-2 14.59L6.41 13 5 14.41l5 5 9-9L17.59 9 10 16.59Z',
        'danger'  => 'M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z',
        'warning' => 'M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z',
        'info'    => 'M11 7h2v2h-2zm0 4h2v6h-2zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z',
        default   => 'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2Z'
    };
@endphp

<div
    x-data="{ showAlert: true }"
    x-show="showAlert"
    x-transition
    x-init="setTimeout(() => showAlert = false, 3000)"
    class="rounded-xl border border-{{ $color }} bg-{{ $bg }} p-4 dark:border-{{ $color }}/30 dark:bg-{{ $color }}/15"
>
    <div class="flex items-start gap-3">
        <div class="-mt-0.5 text-{{ $color }}">
            <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="{{ $icon }}" fill="currentColor" />
            </svg>
        </div>
        <div>
            <h4 class="mb-1 text-sm font-semibold text-gray-800 dark:text-white/90">
                {{ $title }}
            </h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                {{ $message }}
            </p>
        </div>
    </div>
</div>
