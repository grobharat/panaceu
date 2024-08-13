@extends('layoutscrm.default')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">District</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">List of Districts</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Dictricts
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    
                                <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>State</th>
                                            <th>Country</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>State</th>
                                            <th>Country</th>
                                            <th>Action</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($data as $key=>$value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->state->name}}</td>
                                            <td>{{$value->state->country->name }}</td>
                                            <td>
                                            <a href="#"><i class="fas fa-eye"></i></a>||
                                            <a href="#"><i class="fas fa-edit"></i></a>||
                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</main>
                
@endsection
