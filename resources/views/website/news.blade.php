@extends('layoutsweb.default')

@section('content')
<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
            <div class="greennature-page-title-overlay"></div>
            <div class="greennature-page-title-container container">
                <h1 class="greennature-page-title">News and Updates</h1>
                <span class="greennature-page-caption"></span>
            </div>
        </div>
<div class="content-wrapper"></div>
<div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="container mt-6">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data )
                <tr>
                    <td>{{$data['sno']}}</td>
                    <td>{{$data['title']}}</td>
                    <td>{{$data['description']}}</td>
                    <td><a href="{{$data['link']}}"><i class="fa fa-eye"></i></a></td>
                </tr>
                
                @endforeach
              
            </tbody>
        </table>
    </div>
                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
@endsection
