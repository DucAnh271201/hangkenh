<div class="image-box {{$id}} d-flex align-items-center justify-content-center">
    <img
            src="{{ $image }}"
            class="w-100 h-100 object-cover {{ $image ? : 'd-none' }} "
            alt="">
    <div
            class="icon d-flex align-items-center justify-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" stroke-width="1"
             stroke="currentColor" fill="none" stroke-linecap="round"
             stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 5l0 14"/>
            <path d="M5 12l14 0"/>
        </svg>
    </div>
    <input id="{{ $id }}" type="file" name="{{ $id }}" accept="image/*">
</div>
