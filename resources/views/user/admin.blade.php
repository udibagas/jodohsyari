@extends('layouts.backend')

@section('content')

    <div class="pull-right">
        {!! Form::open(['class' => 'form-inline', 'method' => 'GET']) !!}
            <br>
            <a href="/user/create" class="btn btn-info"><i class="fa fa-plus"></i> ADD POST</a>
            {!! Form::text('q', request('q'), ['class' => 'form-control', 'placeholder' => 'Search']) !!}
        {!! Form::close() !!}
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            MANAGE USERS
        </div>

        <div class="panel-body">
            <table class="table table-striped table-hover  ">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Kontak</th>
                        <th>Status</th>
                        <th>Suku</th>
                        <th>Usia</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $s)
                    <tr>
                        <td>
                            <a href="/user/{{ $s->id }}-{{ str_slug($s->title ) }}" target="_blank">
                                {{ $s->nama_lengkap }}
                            </a>
                        </td>
                        <td>{{ $s->jenis_kelamin ? 'L' : 'P' }}</td>
                        <td>
                            {{ $s->email }}
                        </td>
                        <td>Status</td>
                        <td>{{ $s->suku }}</td>
                        <td>Usia</td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'url' => '/user/'.$s->id]) !!}
                                <a href="/user/{{ $s->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                                <button type="submit" name="delete" class="btn btn-default btn-xs confirm"><i class="fa fa-trash"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            <div class="pull-right">
                Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} entries
            </div>
            {!! $users->appends(['q' => request('q')])->links() !!}
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
