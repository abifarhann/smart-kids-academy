@props(['type' => 'success', 'title' => 'Berhasil', 'message' => 'Pesan berhasil disimpan.'])

@php
    $color = match($type) {
        'success' => 'success-500',
        'danger' => 'red-500',
        'warning' => 'yellow-500',
        'info' => 'blue-500',
        default => 'gray-500'
    };
@endphp

<div x-show="showAlert" x-transition x-effect="if (showAlert) setTimeout(() => showAlert = false, 3000)"
    class="rounded-xl border border-{{ $color }} bg-{{ $type }}-50 p-4 dark:border-{{ $color }}/30 dark:bg-{{ $color }}/15">
    <div class="flex items-start gap-3">
        <div class="-mt-0.5 text-{{ $color }}">
            <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.7 12c0-4.6 3.7-8.3 8.3-8.3s8.3 3.7 8.3 8.3-3.7 8.3-8.3 8.3-8.3-3.7-8.3-8.3Zm8.3-10.1C6.4 1.9 1.9 6.4 1.9 12s4.5 10.1 10.1 10.1 10.1-4.5 10.1-10.1S17.6 1.9 12 1.9Zm3.6 8.8c.4-.4.4-1 0-1.4s-1-.4-1.4 0l-3.2 3.2-1.5-1.5c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l2.2 2.2c.2.2.5.3.7.3s.5-.1.7-.3l3.9-3.9Z"
                    fill="currentColor" />
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
