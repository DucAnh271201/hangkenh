@extends('admin.frame')
@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Cấu hình
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    <button class="nav-link active" data-bs-toggle="pill"
                                            data-bs-target="#general" type="button" role="tab" aria-controls="general"
                                            aria-selected="true">Chung
                                    </button>
                                    <button class="nav-link" data-bs-toggle="pill"
                                            data-bs-target="#email" type="button" role="tab" aria-controls="stock"
                                            aria-selected="false">Email
                                    </button>
                                    <button class="nav-link" data-bs-toggle="pill"
                                            data-bs-target="#social" type="button" role="tab"
                                            aria-controls="attribute"
                                            aria-selected="false">Social
                                    </button>
                                    <button class="nav-link" data-bs-toggle="pill"
                                            data-bs-target="#robot" type="button" role="tab"
                                            aria-controls="attribute"
                                            aria-selected="false">robot.txt
                                    </button>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="general" role="tabpanel">
                                        @include('admin.pages.options.components.general')
                                    </div>
                                    <div class="tab-pane fade" id="email" role="tabpanel"
                                         aria-labelledby="profile-tab" tabindex="0">
                                        @include('admin.pages.options.components.email_system')
                                    </div>
                                    <div class="tab-pane fade" id="social" role="tabpanel"
                                         aria-labelledby="contact-tab" tabindex="0">
                                        @include('admin.pages.options.components.social')
                                    </div>
                                    <div class="tab-pane fade" id="robot" role="tabpanel"
                                         aria-labelledby="contact-tab" tabindex="0">
                                        @include('admin.pages.options.components.robot')
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        const headers = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        Dom.select(document).ready(function () {
            Dom.changeImageBox('#favorite_icon', '.image-box.favorite_icon')
            Dom.changeImageBox('#logo', '.image-box.logo')
            Dom.changeImageBox('#logo_footer', '.image-box.logo_footer')
        });

        Dom.submit('.optionSave', async function (e) {
            e.preventDefault()
            let url = Dom.select(this).attr('action')
            let formData = new FormData(this)

            Http.post(url, formData, headers).then(async (res) => {
                if (res.success) {
                    toastr.success(res.message)
                } else {
                    toastr.error(res.message)
                }
            }).catch((err) => {
                const dataJson = JSON.parse(err.message)
                const errors = dataJson.errors
                toastr.error(dataJson.message)
            })
        })
    </script>
@endpush
