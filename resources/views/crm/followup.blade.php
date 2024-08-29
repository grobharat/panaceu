@extends('layoutscrm.default')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Follow Ups</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">List of Follow Ups</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Follow Ups
            </div>


            <div class="card-body">
                <table id="datatablesSimple">

                    <thead>
                        <tr>
                        <th>Id</th>
                            @foreach($headers as $key => $value)
                                <th>{{ $value->parameterName }}</th>
                            @endforeach
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tfoot>
                        <tr>
                        <th>Id</th>
                        @foreach($headers as $key => $value)
                                <th>{{ $value->parameterName }}</th>
                            @endforeach
                            <th>Action</th>

                        </tr>
                    </tfoot>
                    <tbody>


                        @foreach($datas as $key=> $value)
                            <tr>
                            <td>{{ $value['id'] }}</td>
                            @foreach($headers as $index)
                            
                                <td>{{ $value[$index->parameterName] }}</td>
                                @endforeach
                             

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