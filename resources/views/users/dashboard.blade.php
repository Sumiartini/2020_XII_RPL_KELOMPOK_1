@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if(Auth()->user()->hasRole('student'))
            <div class="card">
                <div class="card-header" style="background: yellow">{{ __('Dashboard Siswa') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ Auth()->user()->usr_name }}</td>
                        </tr>
                        <tr>
                            <td>Roles</td>
                            <td>:</td>
                            <td> Student </td>
                        </tr>
                    </table>
                </div>
            </div>
            @elseif(Auth()->user()->hasRole('teacher'))

            <div class="card">
                <div class="card-header" style="background: grey">{{ __('Dashboard Guru') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ Auth()->user()->usr_name }}</td>
                        </tr>
                        <tr>
                            <td>Roles</td>
                            <td>:</td>
                            <td> Teacher </td>
                        </tr>
                    </table>
                </div>
            </div>

            @elseif(Auth()->user()->hasRole('staff'))

            <div class="card">
                <div class="card-header" style="background: blue">{{ __('Dashboard Staff') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ Auth()->user()->usr_name }}</td>
                        </tr>
                        <tr>
                            <td>Roles</td>
                            <td>:</td>
                            <td> Staff </td>
                        </tr>
                    </table>
                </div>
            </div>

            @else

            <div class="card">
                <div class="card-header" style="background: green">{{ __('Dashboard') }} Admin</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ Auth()->user()->usr_name }}</td>
                        </tr>
                        <tr>
                            <td>Roles</td>
                            <td>:</td>
                            <td> Admin </td>
                        </tr>
                    </table>
                </div>
            </div>

            @endif

        </div>
    </div>
</div>
@endsection