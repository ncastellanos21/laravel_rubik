@extends('app')

@section('formulari')

<div class="mb-3">
    <form action="{{ route ('todos') }}" method="post">
    @csrf
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" name="nombre" id="" aria-describedat="helpId">
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

  @endsection