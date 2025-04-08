@php
use Illuminate\Support\Str;
@endphp

<x-mail::message>

    A new post has just been created on your site.

    **Title:** {{ $title }}

    **Content Preview:**
    {{ Str::limit($content, 200) }}

    <x-mail::button :url="url('/admin/posts')">
        View All Posts
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>