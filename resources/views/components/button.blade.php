@props([
    'type' => 'submit',
    'as' => 'button'
    ])
@php
    $classes = "block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"    
@endphp
{{-- Suggested code may be subject to a license. Learn more: ~LicenseLog:267353734. --}}
@if ($as == 'button')
{{-- Suggested code may be subject to a license. Learn more: ~LicenseLog:3688002113. --}}
{{-- Suggested code may be subject to a license. Learn more: ~LicenseLog:3732094014. --}}
    <button type="{{$type}}" {{$attributes->merge(['class' => $classes])}}>
    {{$slot}}
    </button>
{{-- Suggested code may be subject to a license. Learn more: ~LicenseLog:2531056647. --}}
@else
    <a  {{$attributes->merge(['class' => $classes])}}>
   
    {{$slot}}
    </a>
@endif


