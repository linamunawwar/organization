@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Organization
                </div>

                <div class="card-body">
                    <table class="table" id="datatable">
                        <tr>
                            <td>Name</td>
                             <td>{{$organization->name}}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{$organization->phone}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$organization->email}}</td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td>{{$organization->website}}</td>
                        </tr>
                        <tr>
                            <td>Logo</td>
                            <td>{{$organization->logo}}</td>
                        </tr>
                    </table>
                    <table class="table">
                        <tbody>
                            @foreach($persons as $person)
                                <tr>
                                    <td>{{$person->name}}</td>
                                    <td>{{$person->phone}}</td>
                                    <td>{{$person->email}}</td>
                                    <td>{{$person->avatar}}</td>
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