<div>
    <div id="{{ $id }}"
         class="image-post-box d-flex align-items-center justify-content-center open-media-modal"
         data-multiple="false"
         data-refer-id="#{{ $id }}"
         data-input-name="{{ $inputName }}"
         data-image-ids="{{ $objectId }}"
    >
        @if(!empty($objectId))
            <input type="hidden" name="{{ $inputName }}[0][id]" value="{{ $objectId }}">
            <input type="hidden" name="{{ $inputName }}[0][image]" value="{{ $objectImage }}">
            <img
                src="{{ $objectImage }}"
                class="w-100 h-100 object-cover">
        @endif

        <div
            class="icon d-flex align-items-center justify-content-center {{ $objectImage ? 'd-none' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" stroke-width="1"
                 stroke="currentColor" fill="none" stroke-linecap="round"
                 stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 5l0 14"/>
                <path d="M5 12l14 0"/>
            </svg>
        </div>
    </div>
</div>
