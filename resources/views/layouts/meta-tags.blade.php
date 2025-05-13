<meta name="title" content="{{ $meta->meta_title ?? '' }}" />
<meta name="keywords" content="{{ $meta->meta_keywords ?? '' }}" />
<meta name="description" content="{{ $meta->meta_description ?? '' }}" />
<meta name="robots" content="index,follow" />
<meta name="revisit-after" content="7 days">
<meta name="coverage" content="Worldwide">
<meta name="distribution" content="Global">
<meta name="title" content="{{ $meta->meta_title ?? '' }}">
<meta name="author" content="{{ config('app.name', 'Huement') ?? '' }}">
<meta name="url" content="{{ request()->fullUrl()?? '' }}">

@isset($meta->og_image)
<meta name="og_image" content="{{ asset('storage/' . $meta->og_image) ?? '' }}" />
<meta name="og_secureImage" content="{{ asset('storage/' . $meta->og_image) ?? '' }}" />
<meta name="og_imageAlt" content="{{ $meta->og_imageAlt ?? '' }}" />
<meta name="og_imageType" content="{{ $meta->og_imageType ?? '' }}" />
@endisset

<meta name="rating" content="General">
<meta property="og:title" content="{{ $meta->meta_title ?? '' }}" />
<meta property="og:description" content="{{ $meta->meta_description ?? '' }}" />
<meta property="og:type" content="{{ $meta->og_type ?? '' }}" />
<meta property="og:locale" content="en_us" />
<meta property="og:sitename" content="{{ config('app.name', 'Huement') ?? '' }}" />
<meta property="og:url" content="{{ request()->fullUrl() ?? '' }}" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="{{ $meta->twitter_site ?? '' }}" />
<meta name="twitter:creator" content="{{ $meta->twitter_creator ?? '' }}" />
