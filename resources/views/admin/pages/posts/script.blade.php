@push('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script src="{{ asset('assets/libs/tabler/libs/tinymce/tinymce.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/tinymce-custom.js') }}" defer></script>
    <script src="{{ asset('assets/js/media-manager.js') }}"></script>
    <script>
        var cateIdsSelect, categoryParentIdSelect;

        var categories = "{{ $categoryIds ?? '' }}".split(',')

        $(document).ready(function () {

            cateIdsSelect = new TomSelect('#category-ids-selects');
            categoryParentIdSelect = new TomSelect('#category_parent_id');
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

            function getCategories() {
                Http.get('{{ route('admin.api.categories') }}?type={{ $type }}', headers).then(function (res) {
                    const selects = res.data
                    let html = '<option value="">Chọn danh mục</option>';
                    selects.forEach(function (item) {
                        html += `<option value="${item.id}" ${ categories.includes(item.id.toString()) ? 'selected' : ''}>${item.title_dept}</option>`;
                    })
                    Dom.selectId('category-ids-selects').html(html)
                    Dom.selectId('category_parent_id').html(html)
                    cateIdsSelect.sync()
                    categoryParentIdSelect.sync()
                })
            }

            getCategories()
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
                        }
                    }
                })
            })


            Dom.click('#add_category', function () {
                $('.category-add').toggleClass('d-none')
            })
            Dom.click('#save_category', function (e) {
                e.preventDefault()
                let category_parent_id = Dom.select('#category_parent_id').val()
                let formData = new FormData()
                formData.append('type', '{{ $type }}')
                formData.append('title', Dom.select('#category_title').val())
                formData.append('parent_id', category_parent_id || 0)

                let url = $(this).attr('data-action')
                Http.postForm(url, formData, headers).then((res) => {
                    getCategories()
                    Dom.select('#category_title').val('')
                    Dom.selectClass('category-add').addClass('d-none')
                    toastr.success("Thêm danh mục thành công")
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
    </script>

@endpush
