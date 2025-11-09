@extends('layout.hello')

@section('container')
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
       <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Program Study</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Anggun</td>
            <td>3337240030</td>
            <td>Informatika</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Rafli</td>
            <td>3331220037</td>
            <td>Teknik Mesin</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            {{-- <td colspan="2">Larry the Bird</td> --}}
            <td>Sapayaa</td>
            <td>3338230001</td>
            <td>Statistika</td>
            </tr>
        </tbody>
        </table>
  </body>
  </html>
@endsection