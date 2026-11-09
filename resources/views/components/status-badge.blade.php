@props(['status'])
@if ($status === 'Aktif')
<div class="inline-flex flex-col items-center rounded-md border border-green-500 bg-green-100 px-3 py-1">
    <span class="whitespace-nowrap text-xs font-semibold text-green-600">Active</span>
</div>
@else
<div class="inline-flex flex-col items-center rounded-md border border-blue-500 bg-blue-100 px-3 py-1">
    <span class="whitespace-nowrap text-xs font-semibold text-blue-600">Tidak Aktif</span>
</div>
@endif