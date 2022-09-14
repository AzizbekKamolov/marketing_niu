@php
use Test\Model\Menu;
    $lang = app()->getLocale();
    $name = "name_".$lang;
@endphp

<div class="app-header">
    <div style="width: 86%;margin: auto;margin-top: 20px;">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" style="margin: 10px;">
                <img src="/photos/lang/{{$localeCode}}.png" style="max-height: 22px;">
                <span style="@if(App::isLocale($localeCode))text-decoration: underline;font-weight: bold @endif">{{Menu::getLocaleName($localeCode)}}</span>
            </a>
        @endforeach
    </div>
</div>