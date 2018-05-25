@extends('master')

@section('content')
<div class="home">
    <div class="col-md-4" style="float: left">
        <div class="card">
            <div class="card-header">My Bag</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-9">
                        Level 1: .col-sm-9
                        <div class="row">
                            <div class="col-8 col-sm-6">
                                Level 2: .col-8 .col-sm-6
                            </div>
                            <div class="col-4 col-sm-6">
                                Level 2: .col-4 .col-sm-6
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4" style="float: left">
        <div class="card">
            <div class="card-header">What I have already bought</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-9">
                        Level 1: .col-sm-9
                        <div class="row">
                            <div class="col-8 col-sm-6">
                                Level 2: .col-8 .col-sm-6
                            </div>
                            <div class="col-4 col-sm-6">
                                Level 2: .col-4 .col-sm-6
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4" style="float: left">
        <div class="card">
            <div class="card-header">I`m going to by..</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-9">
                        Level 1: .col-sm-9
                        <div class="row">
                            <div class="col-8 col-sm-6">
                                Level 2: .col-8 .col-sm-6
                            </div>
                            <div class="col-4 col-sm-6">
                                Level 2: .col-4 .col-sm-6
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="clearfix"></div>
</div>


@endsection
