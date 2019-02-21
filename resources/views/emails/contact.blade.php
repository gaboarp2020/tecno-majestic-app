<h4 class="is-size-5 title">{{ $name }} {{ $last_name }} ha enviado la siguiente consulta:</h4>
<br>
<p>{{ $content }}</p>
<br>
<p>Enviado desde: {{ $email }}</p>

@if ($country)
    <p>País: {{ $country }}</p>
@endif

@if ($company)
    <p>Empresa: {{ $company }}</p>
@endif

@if ($business_sector)
    <p>Rubro: {{ $business_sector }}</p>
@endif