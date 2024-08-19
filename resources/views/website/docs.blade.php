@extends('layoutsweb.default')

@section('content')
<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
            <div class="greennature-page-title-overlay"></div>
            <div class="greennature-page-title-container container">
                <h1 class="greennature-page-title">Documents</h1>
                <span class="greennature-page-caption"></span>
            </div>
        </div>
<div class="content-wrapper"></div>
<div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="container mt-4">
        <table class="table table-striped w-auto">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Link</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                
                
                <tr class="table-info">
                    <td>{{$data['sno']}}</td>
                    <td><a href="{{url('website/docs/'.$data['link'])}}" target="_blank">{{$data['title']}}</a></td>
                    <td><a href="{{url('website/docs/'.$data['link'])}}" target="_blank"><i class="fa fa-eye"></i></a></td>
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
