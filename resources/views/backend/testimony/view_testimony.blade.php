@extends('backend_main')
@section('content')

    @if(Session::has('Message'))
        <div class="alert alert-danger">
            {{Session::get('Message')}}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Testimony <a href="{{url('add_testimony')}}" class="btn btn-danger btn-fill">Add New Testimony</a></h4>

                </div>
                <div class="content">
                    <table class="table table-bordered" id="courseTable">

                        <thead>
                            <tr>
                                <th>Testimony Content</th>
                                <th>Testimony Writer</th>
                                <th>Position & Company</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        @foreach($testimonies as $testimony)
                            <tr>

                                <td>{{$testimony->testimony_content}}</td>
                                <td>{{$testimony->testimony_name}}</td>
                                <td>{{$testimony->testimony_position}}, {{$testimony->testimony_company}}</td>
                                <td>
                                    <a href="{{ url('edit_testimony', $testimony->testimony_id) }}" class="btn btn-primary btn-fill">Edit</a>
                                    <a href="{{ url('delete_testimony', $testimony->testimony_id) }}"
                                       class="btn btn-danger btn-fill"
                                       onclick="return confirm('Are you sure to delete this testimony?');">Delete</a>
                                </td>

                            </tr>
                        @endforeach

                    </table>
                </div><!-- end of content -->

            </div>
        </div>
    </div>

@stop