<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>List Tamu</h2>
        <a href="{{ url('/tasks/create') }}" class="btn btn-primary">Tambah Daftar</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <a href="{{ url('/tasks/' . $task->id . '/edit') }}" class="btn btn-warning">Edit</a>
                            <form action="{{ url('/tasks/' . $task->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
