@extends('layouts.app')

@section('content')
    <div class="col-md-4">
        <h3>Files List</h3>
        <table class="table table-striped col-sm-4">
            <thead>
                <tr>
                <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($files as $file)
                <tr>
                <td>{{$file}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-6 offset-md-2">
        <h3>Upload new file</h3>
        <form action="{{ route('files.store')}}" method="POST" enctype="multipart/form-data">
            <input type="file" name="upload" accept=".jpg,.jpeg,.png,.txt">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit">
        </form>
    </div>
    
    <div class="col-lg-12">
    <h3>Environment Information</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Key</th>
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>APP_ENV</td>
                    <td>{{ env('APP_ENV')}}</td>
                </tr>
                <tr>
                    <td>APP_BUILD</td>
                    <td>{{ env('APP_BUILD')}}</td>
                </tr>
                <tr>
                    <td>APP_RELEASE</td>
                    <td>{{ env('APP_RELEASE')}}</td>
                </tr>
                <tr>
                    <td>FILESYSTEM_DRIVER</td>
                    <td>{{ env('FILESYSTEM_DRIVER')}}</td>
                </tr>
                <tr>
                    <td>AWS_BUCKET</td>
                    <td>{{ env('AWS_BUCKET')}}</td>
                </tr>
                <tr>
                    <td>AZURE_STORAGE_ACCOUNT_NAME</td>
                    <td>{{ env('AZURE_STORAGE_ACCOUNT_NAME')}}</td>
                </tr>
                <tr>
                    <td>AZURE_STORAGE_CONTAINER</td>
                    <td>{{ env('AZURE_STORAGE_CONTAINER')}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection