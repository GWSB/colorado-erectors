<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Test</title>
  </head>
  <body>
    <h1>TESTING</h1>

    <ul>
      @foreach ($contacts as $contact)
        <li>{{ $contacts }}</li>
      @endforeach
    </ul>
  </body>
</html>
