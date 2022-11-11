@component('mail::message')
# Indroção

O corpo da mensagem.

@component('mail::button', ['url' => ''])
Text do botão
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
