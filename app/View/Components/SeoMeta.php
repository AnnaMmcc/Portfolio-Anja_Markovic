<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SeoMeta extends Component
{
    public $title;
    public $description;
    public $keywords;
    public $ogTitle;
    public $ogDescription;
    public $ogImage;
    public $twitterTitle;
    public $twitterDescription;
    public $twitterImage;

    public function __construct(
        $title = 'Anja Marković – Web Developer Portfolio',
        $description = 'Portfolio website showcasing Anja Marković’s projects and skills in Laravel, PHP, HTML, CSS, and Bootstrap.',
        $keywords = 'Anja Marković, Web Developer, Laravel, PHP, Portfolio, Frontend, Backend, Web development',
        $ogTitle = null,
        $ogDescription = null,
        $ogImage = null,
        $twitterTitle = null,
        $twitterDescription = null,
        $twitterImage = null
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->ogTitle = $ogTitle ?? $title;
        $this->ogDescription = $ogDescription ?? $description;
        $this->ogImage = $ogImage ?? asset('storage/images/your-default-image.jpg');
        $this->twitterTitle = $twitterTitle ?? $this->ogTitle;
        $this->twitterDescription = $twitterDescription ?? $this->ogDescription;
        $this->twitterImage = $twitterImage ?? $this->ogImage;
    }

    public function render()
    {
        return view('components.seo-meta');
    }
}
