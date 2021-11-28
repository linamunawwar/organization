@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Organization
                    <div class="pull-right" style="text-align: right;">
                        <a class="btn btn-primary" href="{{URL::route('organization.create')}}">+ Add</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Phone</td>
                                <td>Email</td>
                                <td>Website</td>
                                <td>Logo</td>
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($organizations as $organization)
                                <tr>
                                    <td>{{$organization->name}}</td>
                                    <td>{{$organization->phone}}</td>
                                    <td>{{$organization->email}}</td>
                                    <td>{{$organization->website}}</td>
                                    <td>{{$organization->logo}}</td>
                                    <td>
                                        <a class="btn btn-dark" href="{{URL::route('organization.detail',$organization->id)}}">Detail</a>
                                        <a class="btn btn-success" href="{{URL::route('organization.edit',$organization->id)}}">Edit</a>
                                        <a class="btn btn-danger" href="{{URL::route('organization.delete',$organization->id)}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection