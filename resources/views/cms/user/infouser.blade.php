@extends('cms.master.master')

@section('title', "Thông tin tài khoản")
	
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thông tin tài khoản</h1>
            </div>
        </div>
        <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fas fa-user"></i> Thông tin tài khoản - admin@gmail.com</div>
                    <div class="panel-body">
                        <div class="row justify-content-center" style="margin-bottom:40px">

                            <div class="col-md-8 col-lg-8 col-lg-offset-2">
                                <h3 align="center">Thông tin tài khoản</h3>
                                <div class="form-group">
                                    <label>Email</label>
                                    <p>admin@gmail.com</p>
                                </div>
                                <div class="form-group">
                                    <label>password</label>
                                    <input type="password" name="password" class="form-control" value="123456">
                                </div>
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="full" name="full" class="form-control" value="Admin">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="address" name="address" class="form-control" value="Thường tín">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="phone" name="phone" class="form-control" value="0356653300">
                                </div>
                                
                                    
                             
                            </div>
                            <div>
                               
                            <div class="col-md-8 col-lg-8 col-lg-offset-2"> 
                                <h3 align="center">Thông tin công ty</h3>
                                <div class="form-group">
                                    <label>Name Company</label>
                                    <input type="full" name="name_company" class="form-control" value="Admin">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="address" name="address_company" class="form-control" value="Thường tín">
                                </div>
                                <div class="form-group">
                                    <label>Hotline</label>
                                    <input type="phone" name="hotline" class="form-control" value="0356653300">
                                </div>
                                <div class="form-group">
                                    <label>Thông tin công ty</label>
                                    <textarea name="info_company" style="width: 100%;height: 100px;"></textarea>
                                </div>
                            </div></div>
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
                                  
                                    <button class="btn btn-success"  type="submit">Cập nhập</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>
                           

                        </div>
                    
                        <div class="clearfix"></div>
                    </div>
                </div>

        </div>
    </div>

        <!--/.row-->
    </div>

@endsection

    