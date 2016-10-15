@extends("admin.base.base")

@section("content")
                  <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">添加商品类别</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ URL('/file')}}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="post">
                  <input type="hidden" name="pid" value="0">
                  <input type="hidden" name="path" value="0">
                  <input type="hidden" name="goodsname" value="0">
                  <input type="hidden" name="goodsprice" value="0">
                  <input type="hidden" name="goodsdescript" value="0">
                  <input type="hidden" name="goodsimage" value="0">
                  <input type="hidden" name="stock" value="0">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">添加类别</label>
                      <input type="text" name="classname" class="form-control" id="exampleInputEmail1" placeholder="请输入...">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">描述</label>
                      <input type="text" name="decipt" class="form-control" id="exampleInputPassword1" placeholder="请输入...">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">图片</label>
                      <input type="file" name="classimage" id="exampleInputFile">
                      <p class="help-block">请选择图片上传.....</p>
                    </div>
                  </div><!-- /.box-body -->
                  <div>
                   <?php
                      if(empty($look)){
                        echo "";
                      }else{
                    ?>
                    {{ $look }}
                    <?php
                      }
                    ?>
                    
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">添加</button>
                  </div>
                </form>
              </div><!-- /.box -->
@endsection