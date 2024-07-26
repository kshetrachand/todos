@extends('layouts.main')
@push('head')
<title>Bulk Create Multiple Todos</title>
@endpush
@section('main-section')
<div class="container">
<div class="d-flex justify-content-between align-items-center my-5">
<div class="h2">Add Todo</div>
<a href="{{route('todo.home')}}" class="btn btn-primary btn-lg">Back</a>

</div>


<div class="card">
<div class="card-body">
<form action="{{route('todo.store')}}" method="post">
@csrf

<label for="" class="form-label mt-4">Staff Name</label>
<input type="text" name="name" class="form-control">
<div class="text-danger">
    @error('name')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Work to be done</label>
<input type="text" name="work" class="form-control">
<div class="text-danger">
    @error('work')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Due Date</label>
<input type="date" name="dueDate" class="form-control">
<div class="text-danger">
    @error('dueDate')
    {{$message}}
    @enderror
</div>
<button class="btn btn-primary btn-lg mt-4">Add Todo</button>

</form>

</div>
</div>

</div>

<div class="container">
<div class="d-flex justify-content-between align-items-center my-5">
<div class="h2">Add Todo</div>
<a href="{{route('todo.home')}}" class="btn btn-primary btn-lg">Back</a>

</div>


<div class="card">
<div class="card-body">
<form action="{{route('todo.store')}}" method="post">
@csrf

<label for="" class="form-label mt-4">Staff Name</label>
<input type="text" name="name" class="form-control">
<div class="text-danger">
    @error('name')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Work to be done</label>
<input type="text" name="work" class="form-control">
<div class="text-danger">
    @error('work')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Due Date</label>
<input type="date" name="dueDate" class="form-control">
<div class="text-danger">
    @error('dueDate')
    {{$message}}
    @enderror
</div>
<button class="btn btn-primary btn-lg mt-4">Add Todo</button>

</form>

</div>
</div>

</div>

<div class="container">
<div class="d-flex justify-content-between align-items-center my-5">
<div class="h2">Add Todo</div>
<a href="{{route('todo.home')}}" class="btn btn-primary btn-lg">Back</a>

</div>


<div class="card">
<div class="card-body">
<form action="{{route('todo.store')}}" method="post">
@csrf

<label for="" class="form-label mt-4">Staff Name</label>
<input type="text" name="name" class="form-control">
<div class="text-danger">
    @error('name')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Work to be done</label>
<input type="text" name="work" class="form-control">
<div class="text-danger">
    @error('work')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Due Date</label>
<input type="date" name="dueDate" class="form-control">
<div class="text-danger">
    @error('dueDate')
    {{$message}}
    @enderror
</div>
<button class="btn btn-primary btn-lg mt-4">Add Todo</button>

</form>

</div>
</div>

</div>

<div class="container">
<div class="d-flex justify-content-between align-items-center my-5">
<div class="h2">Add Todo</div>
<a href="{{route('todo.home')}}" class="btn btn-primary btn-lg">Back</a>

</div>


<div class="card">
<div class="card-body">
<form action="{{route('todo.store')}}" method="post">
@csrf

<label for="" class="form-label mt-4">Staff Name</label>
<input type="text" name="name" class="form-control">
<div class="text-danger">
    @error('name')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Work to be done</label>
<input type="text" name="work" class="form-control">
<div class="text-danger">
    @error('work')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Due Date</label>
<input type="date" name="dueDate" class="form-control">
<div class="text-danger">
    @error('dueDate')
    {{$message}}
    @enderror
</div>
<button class="btn btn-primary btn-lg mt-4">Add Todo</button>

</form>

</div>
</div>

</div>

<div class="container">
<div class="d-flex justify-content-between align-items-center my-5">
<div class="h2">Add Todo</div>
<a href="{{route('todo.home')}}" class="btn btn-primary btn-lg">Back</a>

</div>


<div class="card">
<div class="card-body">
<form action="{{route('todo.store')}}" method="post">
@csrf

<label for="" class="form-label mt-4">Staff Name</label>
<input type="text" name="name" class="form-control">
<div class="text-danger">
    @error('name')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Work to be done</label>
<input type="text" name="work" class="form-control">
<div class="text-danger">
    @error('work')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Due Date</label>
<input type="date" name="dueDate" class="form-control">
<div class="text-danger">
    @error('dueDate')
    {{$message}}
    @enderror
</div>
<button class="btn btn-primary btn-lg mt-4">Add Todo</button>

</form>

</div>
</div>

</div>

<div class="container">
<div class="d-flex justify-content-between align-items-center my-5">
<div class="h2">Add Todo</div>
<a href="{{route('todo.home')}}" class="btn btn-primary btn-lg">Back</a>

</div>


<div class="card">
<div class="card-body">
<form action="{{route('todo.store')}}" method="post">
@csrf

<label for="" class="form-label mt-4">Staff Name</label>
<input type="text" name="name" class="form-control">
<div class="text-danger">
    @error('name')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Work to be done</label>
<input type="text" name="work" class="form-control">
<div class="text-danger">
    @error('work')
    {{$message}}
    @enderror
</div>
<label for="" class="form-label mt-4">Due Date</label>
<input type="date" name="dueDate" class="form-control">
<div class="text-danger">
    @error('dueDate')
    {{$message}}
    @enderror
</div>
<button class="btn btn-primary btn-lg mt-4">Add Todo</button>

</form>

</div>
</div>

</div>


@endsection


