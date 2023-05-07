@extends('admin_layout')
@section('admin_content')
     <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm mã giảm giá
                        </header>
                        <?php
	$message = Session()->get('message');
	if($message){
		echo '<span class="tex-aler">'.$message.'</span>';
		Session()->put('message',null);
	}
	?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" id="formValidation" action="/save-voucher" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label  for="exampleInputEmail1">Tên mã giảm giá</label>
                                    <input type="text" name="voucher_name" class="form-control" id="exampleInputEmail1" >
                                </div>
                              <div class="form-group">
                                    <label  for="exampleInputEmail1">Mã giảm giá</label>
                                    <input type="text" name="voucher_code" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label  for="exampleInputEmail1">Số lượng mã</label>
                                    <input type="text" name="voucher_time" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label  for="exampleInputEmail1">Tính năng mã</label>
                                     <select name="voucher_condition" class="form-control input-sm m-bot15">
                                    <option value="0">-----Chọn-----</option>
                                     <option value="1">Giảm theo phần trăm</option>
                                     <option value="2">Giảm theo tiền</option>
                                    
                                   </select>
                                </div>
                                  <div class="form-group">
                                    <label  for="exampleInputEmail1">Nhập số % hoặc tiền giảm</label>
                                    <input type="text" name="voucher_number" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <button type="submit" name="add_voucher" class="btn btn-info">Thêm mã</button>
                                
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
         
        </div>
@endsection