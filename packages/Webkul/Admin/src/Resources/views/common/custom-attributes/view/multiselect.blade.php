@php
    $options = $attribute->lookup_type
        ? app('Webkul\Attribute\Repositories\AttributeRepository')->getLookUpEntity($attribute->code, explode(',', $value))
        : $attribute->options()->where('id', $value)->get();
@endphp

@if (count($options))

    @foreach ($options as $option)
        <span class="multi-value">{{ $option->name }}</span>
    @endforeach

@else
    
    {{ __('admin::app.common.not-available') }}

@endif