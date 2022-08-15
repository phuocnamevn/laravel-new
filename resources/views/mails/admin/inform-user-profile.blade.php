@component('mail::message')
<h1>Hi, {{$name}}</h1>
<p>This email send from system</p>
<p>Please check your information. Is it correctly</p>
@component('mail::table')
| Name       | Email         | Address  |
| ------------- |:-------------:| --------:|
| {{$name}}      | {{$email}}      | {{$address}}      |
@endcomponent
@component('mail::button', ['url' => 'http://phuoc.vn'])
User Profile
@endcomponent
@endcomponent