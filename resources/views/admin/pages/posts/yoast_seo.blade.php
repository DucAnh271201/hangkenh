<link rel="stylesheet" href="{{ asset('assets/libs/yoastseo/yoast-seo.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/yoastseo/yoast-seo-custom.css') }}">
<script src="{{ asset('assets/libs/yoastseo/yoastseo-reviewer-bundle.js') }}" defer></script>
<script defer>
    window.onload = function () {
        var yoastseoReviewer = new YoastseoReviewer({
            baseUrl: "{{ config('app.url'). '/' }}",
            selectorName: {
                locale: "locale",
                metaTitle: "seoTitle",
                metaDescription: "seoDesc",
                urlPath: "seoSlug",
                title: "title",
                description: "shortDescription",
                snippet: "snippet",
                keyword: "keywords",
                refreshAnalysis: "refresh-analysis"
            },
            targetSelectorName: {
                output: "output",
                contentOutput: "contentOutput"
            }
        });

        // console.log(yoastseoReviewer);
    };
</script>
<div class="accordion bg-white mt-3">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                    data-bs-target="#seo_block" aria-expanded="true">
                Seo
            </button>
        </h2>
        <div id="seo_block" class="accordion-collapse collapse">
            <div class="accordion-body pt-0">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề SEO</label>
                            <input id="seoTitle" type="text" class="form-control" name="seo_title"
                                   placeholder="Tiêu đề SEO" value="{{ $post->seo?->title ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="shortDescription" class="form-label">Mô tả</label>
                            <textarea id="seoDesc" class="form-control" rows="3"
                                      name="seo_desc">{{ $post->seo?->description ?? '' }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Keywords</label>
                            <input id="keywords" type="text" class="form-control" name="keywords"
                                   placeholder="Keywords" value="{{ $post->seo?->keywords ?? '' }}">
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h3>Yoastseo</h3>

                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <button class="btn btn-primary d-none" id="refresh-analysis"><i
                                            class="fa fa-refresh"></i>
                                        <span>Làm mới</span>
                                    </button>
                                    <div class="col-md-1 pull-left">
                                        <div id="overallScore" class="overallScore">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                 viewBox="0 0 500 500"
                                                 enable-background="new 0 0 500 500" xml:space="preserve" width="34"
                                                 height="34">
                            <g id="BG">
                            </g>
                                                <g id="BG_dark">
                                                </g>
                                                <g id="bg_light">
                                                    <path fill="#5B2942" d="M415,500H85c-46.8,0-85-38.2-85-85V85C0,38.2,38.2,0,85,0h330c46.8,0,85,38.2,85,85v330
                                      C500,461.8,461.8,500,415,500z"/>
                                                    <path fill="none" stroke="#7EADB9" stroke-width="17"
                                                          stroke-miterlimit="10"
                                                          d="M404.6,467H95.4C61.1,467,33,438.9,33,404.6V95.4
                                      C33,61.1,61.1,33,95.4,33h309.2c34.3,0,62.4,28.1,62.4,62.4v309.2C467,438.9,438.9,467,404.6,467z"/>
                                                </g>
                                                <g id="Layer_2">
                                                    <circle id="score_circle_shadow" fill="#77B227" cx="250" cy="250"
                                                            r="155"/>
                                                    <path id="score_circle" fill="#9FDA4F"
                                                          d="M172.5,384.2C98.4,341.4,73,246.6,115.8,172.5S253.4,73,327.5,115.8"/>
                                                    <g>
                                                        <g>
                                                            <g display="none">
                                                                <path display="inline" fill="#FEC228"
                                                                      d="M668,338.4c-30.4,0-55-24.6-55-55s24.6-55,55-55"/>
                                                                <path display="inline" fill="#8BDA53"
                                                                      d="M668,215.1c-30.4,0-55-24.6-55-55s24.6-55,55-55"/>
                                                                <path display="inline" fill="#FF443D"
                                                                      d="M668,461.7c-30.4,0-55-24.6-55-55s24.6-55,55-55"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                        </svg>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <form id="snippetForm" class="snippetForm">
                                        <label>Snippet Preview</label>
                                        <div id="snippet" class="output">

                                        </div>
                                        <input type="hidden" value="vi" id="locale"/>
                                    </form>
                                    <div id="output-container" class="output-container">
                                        <p>This is what the page might look like on a Google search result page.</p>

                                        <p>Edit the SEO title and meta description by clicking the title and meta
                                            description!</p>
                                        <h2>SEO assessments</h2>
                                        <div id="output" class="output">

                                        </div>
                                        <h2>Content assessments</h2>
                                        <div id="contentOutput" class="output">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
