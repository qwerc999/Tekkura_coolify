@props([
    'title',
    'description' => null,
])

<section class="auth-shell application-settings-form">
    <div class="auth-shell-content">
        <div class="auth-card">
            <div class="auth-card-heading text-center">
                <div class="flex items-center justify-center gap-2.5 mb-4">
                    <img src="{{ asset('coolify-logo.svg') }}" alt="Tekkura" class="h-9 w-9 shrink-0" />
                    <span class="text-xl font-semibold tracking-tight text-black dark:text-white">Tekkura</span>
                </div>
                <h1>{{ $title }}</h1>
                @if ($description)
                    <p class="mx-auto">{{ $description }}</p>
                @endif
            </div>

            <div class="auth-card-body">
                {{ $slot }}
            </div>

            @isset($footer)
                <footer class="auth-card-footer">
                    {{ $footer }}
                </footer>
            @endisset
        </div>
    </div>
</section>
