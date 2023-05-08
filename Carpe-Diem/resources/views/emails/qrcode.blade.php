<x-mail::message>
# Introduction

We are pleased to inform you that your purchase was successful. Your QR code is attached to this email.

<x-mail::button :url="'afp.p44brj.hu'">
View Order
</x-mail::button>

<x-mail::panel>
If you have any questions about your purchase, please do not hesitate to contact us at support@example.com.
</x-mail::panel>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
