<p>
    Usted ha recibido un nuevo mensaje del formulario de
    conctactenos de su sitio web SOPIOS
</p>
<p>
  Aqui los detalles:
</p>
<ul>
  <li>Nombre: <strong>{{ $name }}</strong></li>
  <li>Correo: <strong>{{ $email }}</strong></li>
</ul>
<hr>
<p>
  @foreach ($messageLines as $messageLine)
    {{ $messageLine }}<br>
  @endforeach
</p>
<hr>