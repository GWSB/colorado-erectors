<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Test</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <h1>TESTING</h1>
    <table class="table">
      <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Phone</td>
          <td>Email</td>
          <td>Notes</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($contacts as $contact)
          <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->number }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->notes }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{-- <ul>
      @foreach ($contacts as $contact)
        <li>{{ $contacts }}</li>
      @endforeach
    </ul> --}}
  </body>
</html>
