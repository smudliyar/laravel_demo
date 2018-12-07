@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Email</th>
                        </tr>
                        @forelse($users as $user)
                        <tr>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                         
                        </tr>
                       @empty
            			<p>No replies</p>
        			   @endforelse
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
