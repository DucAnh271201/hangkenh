<ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
    @if(isset($pageParentTitle))
        <li class="breadcrumb-item"><a href="#">{{ $pageParentTitle }}</a></li>
    @endif
    <li class="breadcrumb-item"><a href="{{ $pageRoute }}">{{ $pageTitle ?? '' }}</a></li>
    @if(isset($breadcrumbs))
        @foreach ($breadcrumbs as $crumb)
            @if (!$loop->last)
                <li class="breadcrumb-item"><a
                        href="{{ $pageRoute . "?parent_id={$crumb->id}&type={$crumb->type}" }}">{{ $crumb->title }}</a>
                </li>
            @else
                <li class="breadcrumb-item active" aria-current="page"><a href="#">{{ $crumb->title }}</a></li>
                {{ $crumb->name }}
            @endif
        @endforeach
    @endif
</ol>
