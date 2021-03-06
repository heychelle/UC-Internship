@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-0 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="fas fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.student.index') }}">Student List</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.student.show', $student->id) }}">{{$student->detailable->nim}}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('admin.history.show', $student->id) }}">Time History</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
@include('admin.history.table.history')
@endsection
