@extends('master')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{route('departments.create')}}" class="btn btn-primary">Create New Department</a>

        </div>
    </div>
    <h2>All Departments</h2>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">created at</th>
                    <th scope="col">update up</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($departments as $department)
                    <tr>
                        <td>1</td>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->description }}</td>
                        <td>{{ $department->created_at }}</td>
                        <td>{{ $department->updated_at }}</td>
                        <td>
                            <a name="" id="" class="btn btn-primary"
                                href="{{route('departments.edit',$department->id)}}" role="button">Edit</a>

                            <form  style="display: inline-block" action="{{route('departments.destroy',$department->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="" id="" class="btn btn-danger"
                                    role="button">Delete</button>
                            </form>


                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
