@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Budget Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $budget->description }}</h5>
            <p class="card-text">Amount: {{ $budget->amount }}</p>
            <p class="card-text">Date: {{ $budget->date }}</p>
            <a href="{{ route('budgets.edit', $budget->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('budgets.destroy', $budget->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
