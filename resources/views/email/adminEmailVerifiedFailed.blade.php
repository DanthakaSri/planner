@extends('layouts.plannerApp')

@section('title')
    Verify Email | Wedding Planner Portal
@endsection

@section('style')
    <style type="text/css">
        .verify {
            margin-bottom:20px;
            margin-top:30px;
        }

        .title-box h3:after {
            background: #b23852;
        }
        .boxed-content.boxed-content-v3 {
            background: #b23852;
            padding-top: 65px;
        }
    </style>
@endsection

@section('content')


    <div class="container">
        <div class="row verify">
            <div class="col-md-6 col-md-offset-3">

                <div class="boxed-content boxed-content-v3 center">
                    <i class="bg-black icon-envelope icons top"></i>
                    <div class="title-box">
                        <h3>Email Verification Failed</h3>
                    </div>
                    <p> Your Email verificaion failed. Please login or register again <br><br>
                        <a href="{{ route('register') }}" class="btn btn-lg space-30 btn-info"> Register <i
                                    class="fa fa-backward" aria-hidden="true"></i></a>
                    </p>

                    <p>
                        Thank you !<br>
                        Wedding Planning Portal
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection