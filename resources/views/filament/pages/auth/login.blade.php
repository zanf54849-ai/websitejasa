<x-filament-panels::page.simple>
    <div class="space-y-6">
        {{ $this->content }}

        <div class="text-center mt-4 pt-4 border-t border-gray-100 dark:border-gray-800 space-y-2">
            <p class="text-xs text-gray-500">
                Belum punya akun klien? 
                <a href="/register" class="text-primary-600 hover:underline font-semibold">
                    Daftar di sini
                </a>
            </p>
            <div>
                <a href="/" class="text-xs text-gray-400 hover:text-gray-600 transition-colors inline-flex items-center gap-1">
                    &larr; Kembali ke Website Utama
                </a>
            </div>
        </div>
    </div>
</x-filament-panels::page.simple>
