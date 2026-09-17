@props(['status'])

@php
    $isActive = $status === 'Aktif';
@endphp

<span {{ $attributes->class([
    'inline-flex items-center px-2.5 py-1 text-xs font-semibold',
    'bg-green-100 text-green-800' => $isActive,
    'bg-red-100 text-red-800' => ! $isActive,
]) }}>
    {{ $status }}
</span>
