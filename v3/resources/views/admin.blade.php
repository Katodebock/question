@extends('layouts.app')

@section('content')
<h1>Users</h1>
  <table >

      <thead>

        <th>id</th>

        <th>name</th>

        <th>highschore</th>

      </thead>

      <tbody>
  @foreach($users as $user)

          <tr>

            <td>{{$user->id}} </td>

            <td>{{$user->name}} </td>

            <td>{{$user->highscore}} </td>


          </tr>
  @endforeach

      </tbody>

  </table>
@endsection
