@extends('layoutsweb.default')

@section('content')
<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
            <div class="greennature-page-title-overlay"></div>
            <div class="greennature-page-title-container container">
                <h1 class="greennature-page-title">Projects</h1>
                <span class="greennature-page-caption"></span>
            </div>
        </div>

<div class="content-wrapper">
            <div class="greennature-content">

  
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Company Name</th>
                    <th>Registered Address</th>
                    <th>Plant Location</th>
                    <th>Plant Capacity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data )
                <tr>
                    <td>{{$data['sno']}}</td>
                    <td>{{$data['name']}}</td>
                    <td>{{$data['address']}}</td>
                    <td>{{$data['location']}}</td>
                    <td>{{$data['capacity']}}</td>
                    <!-- <td><a href="{{$data['link']}}"><i class="fa fa-eye"></i></a></td> -->
                </tr>
                
                @endforeach
              
            </tbody>
        </table>

                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
@endsection
