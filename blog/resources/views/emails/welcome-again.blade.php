@component('mail::message')
# Introduction

Thank you so much for registering!

@component('mail::button', ['url' => 'https://Laracasts.com'])
Get Started
@endcomponent


@component('mail::panel', ['url' => ''])
Some inspirational quote here.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
