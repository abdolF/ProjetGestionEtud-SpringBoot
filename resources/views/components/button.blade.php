@props(['lg' => false])
@php $padding = $lg ? 'px-4 py-2' : 'px-2 py-1'; @endphp
<a
  {{ $attributes->class(
     $padding . ' border rounded border-zinc-100 hover:border-zinc-400 hover:shadow hover:bg-zinc-100'
  ) }}
>{{$slot}}</a>
