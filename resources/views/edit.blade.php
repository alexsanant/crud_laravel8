<!--Esta vista heredará de la vista layout.blade.php-->
@extends('layout')

@section('content')

<style>
  .container{

    max-width:450px;
  }

  .push-top{

    margin-top:50px;
  }

  .btn-info{
    margin-top:20px;
  }
</style>


<div class="card push-top">
  <div class="card-header">
    Edit & update
  </div>

  <div class="card-body">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
  @endif

  <form method="post" action="{{ route('students.update', $student->id )}}">
    <div class="form-group">
      @csrf
      @method('PATCH')
      <label for="name">Name</label>
      <input type="text" class="form-control"name="name" value="{{ $student->name }}"/>
    </div>


    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" value="{{ $student->email }}"/>
    </div>


    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}"/>
    </div>


    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="passowrd" value="{{ $student->password }}"/>
    </div>


    <button type="submit" class="w-100 btn btn-info">Update User</button>
  </form>
</div>
</div>
@endsection
