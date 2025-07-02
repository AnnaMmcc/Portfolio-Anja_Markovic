<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="robots" content="index, follow">


<meta property="og:title" content="{{ $ogTitle }}" />
<meta property="og:description" content="{{ $ogDescription }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ $ogImage }}" />


<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $twitterTitle }}" />
<meta name="twitter:description" content="{{ $twitterDescription }}" />
<meta name="twitter:image" content="{{ $twitterImage }}" />
