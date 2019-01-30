@extends('layouts.app')

@section('content')
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
                <td>AWS_ACCESS_KEY_ID</td>
                <td>{{ env('AWS_ACCESS_KEY_ID')}}</td>
            </tr>
            <tr>
                <td>AWS_SECRET_ACCESS_KEY</td>
                <td>{{ env('AWS_SECRET_ACCESS_KEY')}}</td>
            </tr>
            <tr>
                <td>AWS_DEFAULT_REGION</td>
                <td>{{ env('AWS_DEFAULT_REGION')}}</td>
            </tr>
            <tr>
                <td>AWS_BUCKET</td>
                <td>{{ env('AWS_BUCKET')}}</td>
            </tr>
            <tr>
                <td>AWS_URL</td>
                <td>{{ env('AWS_URL')}}</td>
            </tr>
            <tr>
                <td>AZURE_STORAGE_ACCOUNT_NAME</td>
                <td>{{ env('AZURE_STORAGE_ACCOUNT_NAME')}}</td>
            </tr>
            <tr>
                <td>AZURE_STORAGE_API_KEY</td>
                <td>{{ env('AZURE_STORAGE_API_KEY')}}</td>
            </tr>
            <tr>
                <td>AZURE_STORAGE_CONTAINER</td>
                <td>{{ env('AZURE_STORAGE_CONTAINER')}}</td>
            </tr>
        </tbody>
    </table>
@endsection