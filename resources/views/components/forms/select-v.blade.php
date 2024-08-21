<div class="form-group d-flex align-items-center row mb-3 {{ $class ?? '' }}">
    <label for="" class="text-nowrap fw-bold col-12 col-md-3">{{ $label }}</label>
   <div class="col-12 col-md-9">
       <select
           @if($id) id="{{ $id }}" @endif
       name="{{ $name }}"
           class="form-control {{ $classInput ?? '' }}"
       >
           @foreach($options as $option)
               <option value="{{ $option['value'] }}"
                       @if($value && $value == $option['value'])
                           selected
                       @endif
               >{{ $option['label'] ?? '' }}</option>

           @endforeach
       </select>
   </div>
</div>
