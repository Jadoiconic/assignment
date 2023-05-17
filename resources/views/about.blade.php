<h1>Welocome to About us Page</h1>

{{ Session::get('name') }}


<a href="{{ route('welcome') }}">Welcome</a><br><br>
<a href="{{ route('index') }}">Index page</a><br><br>

Full url (with paremeter): {{ URL::full() }}<br>
Prevevious: {{ url()->previous() }}
