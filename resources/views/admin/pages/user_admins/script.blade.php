@push('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script>
        $(document).ready(function () {
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

        })

    </script>

@endpush
