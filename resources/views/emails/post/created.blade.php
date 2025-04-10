@php
use Illuminate\Support\Str;
@endphp

<x-mail::message>

    {{ $title }}

    {{ $content }}

    <x-mail::button :url="url('/admin/posts')">
        View All Posts
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>