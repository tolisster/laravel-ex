@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Logo Form -->
        <form action="{{ url('logo') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Logo Name -->
            <div class="form-group">
                <label for="logo-name" class="col-sm-3 control-label">Logo</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="logo-name" class="form-control">
                </div>
            </div>

            <!-- Add Logo Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Logo
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Current Logos -->
    @if (count($logos) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Logos
            </div>

            <div class="panel-body">
                <table class="table table-striped logo-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>Logo</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($logos as $logo)
                        <tr>
                            <!-- Logo Name -->
                            <td class="table-text">
                                <div>{{ $logo->name }}</div>
                            </td>

                            <!-- Delete Button -->
                            <td>
                                <form action="{{ url('logo/'.$logo->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-logo-{{ $logo->id }}" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection