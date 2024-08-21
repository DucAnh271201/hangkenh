<div class="form-group d-flex align-items-center row mb-3 {{ $class ?? '' }}">
    <label for="" class="text-nowrap fw-bold col-12 col-md-3">{{ $label }}</label>
    <div class="col-12 col-md-9">
        <input
            @if($id) id="{{ $id }}" @endif
            type="{{ $type }}"
            class="form-control {{ $classInput ?? '' }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            @if($value)
                value="{{ $value }}"
            @endif
        >
    </div>
</div>
