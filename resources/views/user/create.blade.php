@extends('layouts.appdash')

@section('contents')
    <form action="{{ route('user.store')}}" enctype="multipart/form-data" method="post">
        <div class="password-meter-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline12-list responsive-mg-b-30">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Profile Details</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div id="pwd-container1">
                                    <div class="form-group">
                                        <label for="password1">Full name</label>
                                        <input type="text" class="form-control example1" placeholder="ex. cardo dalisay">
                                    </div>
                                    <div class="form-group">
                                        <div class="pwstrength_viewport_progress"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline11-list">
                            <div class="sparkline11-hd">
                                <div class="main-sparkline11-hd">
                                    <h1>Choose Gender</h1>
                                </div>
                            </div>
                            <div class="sparkline11-graph">
                                <div id="pwd-container2">
                                    <div class="form-group head-strong-password">
                                        <label for="password2" id="password2">Gender</label>
                                        <select class="form-control example2" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="pwstrength_viewport_verdict text-strong-password"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Accounts</h1>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div id="pwd-container3">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password3">Password</label>
                                        <input type="password" class="form-control example3" id="password3" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="pwstrength_viewport_progress2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline9-list mg-t-30">
                            <div class="sparkline9-hd">
                                <div class="main-sparkline9-hd">
                                    <h1>Calculate <span class="password-mt-none">the</span> password <span class="password-mt-none">strength</span></h1>
                                </div>
                            </div>
                            <div class="sparkline9-graph">
                                <div id="pwd-container4">
                                    <div class="form-group">
                                        <label for="year">Year of birth</label>
                                        <input type="date" class="form-control" id="year">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="login-btn-inner">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <div class="login-horizental cancel-wp pull-left">
                                    <button class="btn btn-white" type="submit">Discard</button>
                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection