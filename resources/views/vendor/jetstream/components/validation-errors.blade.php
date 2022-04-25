@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'border border-red-500 rounded px-4 pt-2 pb-3']) }}>
        <div class="font-semibold text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-1 font-medium text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
