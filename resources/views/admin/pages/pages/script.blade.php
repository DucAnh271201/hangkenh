@push('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script src="{{ asset('assets/libs/tabler/libs/tinymce/tinymce.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/tinymce-custom.js') }}" defer></script>
    <script src="{{ asset('assets/js/media-manager.js') }}"></script>
    <script>


        $(document).ready(function () {

            new TomSelect('#tags-selects', {
                create: true, // Cho phép tạo tags mới
                persist: false, // không giữ lại tag trong danh sách sau khi nó đã được chọn
                hideSelected: true, // ẩn các lựa chọn đã được chọn khỏi dropdown
                closeAfterSelect: true, // đóng dropdown sau khi chọn một lựa chọn
                delimiter: ',', // delimiter để phân biệt các tags, mặc định là dấu phẩy
                plugins: ['remove_button'], // sử dụng plugin remove_button để có nút xóa
            });
            const headers = {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            Dom.submit('#formPost', function (e) {
                e.preventDefault()
                $('.validate-error').html('')

                let formData = new FormData(this);
                const url = $(this).attr('action')
                $.ajax({
                    url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    contentType: false,
                    method: 'POST',
                    data: formData,
                    success: function (data) {
                        if (data.success) {
                            toastr.success(data.message)
                            setTimeout(function () {
                                location.href = data.data.redirect
                            }, 300)
                        } else {
                            toastr.error(data.message)
                        }
                    },
                    error: function (err) {
                        if (err.status === 400) {
                            const dataJson = err.responseJSON
                            toastr.error(dataJson.message)
                            const errors = dataJson.errors

                            Object.entries(errors).forEach(function ([index, item]) {
                                let html = '';
                                item.map(function (message) {
                                    html += `<p class="text-danger mt-2 mb-0">${message}</p>`;
                                })
                                $(`#${index}_error`).append(html)
                            })
                        } else {
                            toastr.error(err.responseJSON.message)
                            // console.error(err.responseJSON)
                        }
                    }
                })
            })

            Dom.change('#feature_image', function (event){
                const file = event.target.files[0];

                if (file){
                    const fileURL = URL.createObjectURL(file);
                    $('.image-post-box img').removeClass('d-none')
                    $('.image-post-box img').attr('src', fileURL)
                    $('.image-post-box .icon').addClass('d-none')
                }
            })

            Dom.select('#title').on('change keyup', function (){
                let val = Dom.select(this).val()
                Dom.select('#seoTitle').val(val)
                Dom.select('#seoSlug').val(Dom.createSlug(val))
            })
            Dom.select('#shortDescription').on('change keyup', function (){
                let val = Dom.select(this).val()
                Dom.select('#seoDesc').val(val)
            })
        })
    </script>
@endpush
