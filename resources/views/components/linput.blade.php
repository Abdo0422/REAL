@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['style' => 'border:#5B06E5 1px groove;
border-radius: 3px;
width:300px;height:27px;
}']) !!}>
