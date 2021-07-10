<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@if($page->seo_title)
    <title>{{ $page->seo_title }}</title>
@endif
@if($page->seo_description)
    <meta name="description" content="{{ $page->seo_description }}" />
@endif
@if($page->seo_keywords)
    <meta name="keywords" content="{{ $page->seo_keywords }}" />
@endif
@if($page->seo_noindex || $page->seo_nofollow)
    @if($page->seo_noindex && $page->seo_nofollow)
        <meta name="robots" content="noindex, nofollow" />
    @elseif($page->seo_noindex)
        <meta name="robots" content="noindex, follow" />
    @else
        <meta name="robots" content="index, nofollow" />
    @endif
@endif

