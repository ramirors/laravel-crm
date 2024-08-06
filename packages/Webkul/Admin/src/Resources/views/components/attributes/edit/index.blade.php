@props([
    'attribute'   => '',
    'value'       => '',
    'validations' => '',
])

@switch($attribute->type)
    @case('text')
        <x-admin::attributes.edit.text
            :attribute="$attribute"
            :value="$value"
            :validations="$validations"
        />
        @break

    @case('email')
        <x-admin::attributes.edit.email
            :attribute="$attribute"
            :value="$value"
            :validations="$validations"
        />
        @break

    @case('phone')
        <x-admin::attributes.edit.phone
            :attribute="$attribute"
            :value="$value"
            :validations="$validations"
        />
        @break

    @case('lookup')
        <x-admin::attributes.edit.lookup
            :attribute="$attribute"
            :value="$value"
            :validations="$validations"
        />
        @break

    @case('select')
        <x-admin::attributes.edit.select
            :attribute="$attribute"
            :value="$value"
            :validations="$validations"
        />
        @break

    @case('price')
        <x-admin::attributes.edit.price
            :attribute="$attribute"
            :value="$value"
            :validations="$validations"
        />
        @break

    @case('textarea')
        <x-admin::attributes.edit.textarea
            :attribute="$attribute"
            :value="$value"
            :validations="$validations"
        />
        @break

    @case('address')
        <x-admin::attributes.edit.address
            :attribute="$attribute"
            :value="$value"
            :validations="$validations"
        />
        @break
    @case('date')
        <x-admin::attributes.edit.date
            :attribute="$attribute"
            :value="$value"
            :validations="$validations"
        />
        @break
@endswitch