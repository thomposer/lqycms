@extends('admin.layouts.app')
@section('title', '会员等级修改')

@section('content')
<h5 class="sub-header"><a href="<?php echo route('admin_userrank'); ?>">会员等级列表</a> > 会员等级修改</h5>

<form id="addarc" method="post" action="" role="form" enctype="multipart/form-data" class="table-responsive">{{ csrf_field() }}
<table class="table table-striped table-bordered">
<tbody>
    <tr>
        <td align="right" width="150px;">等级名称：</td>
        <td><input name="title" type="text" id="title" value="<?php echo $post['title']; ?>" class="required" style="width:30%" placeholder="在此输入关键词"><input style="display:none;" name="id" type="text" id="id" value="<?php echo $id; ?>"></td>
    </tr>
    <tr>
        <td align="right">等级：</td>
        <td><input name="rank" type="text" id="rank" value="<?php echo $post['rank']; ?>" size="3" class="required"></td>
    </tr>
    <tr>
        <td align="right">排序：</td>
        <td>
			<input name="listorder" type="text" id="listorder" value="<?php echo $post['listorder']; ?>" size="3" />
		</td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" class="btn btn-success" value="Submit">保存(Submit)</button>&nbsp;&nbsp;<button type="reset" class="btn btn-default" value="Reset">重置(Reset)</button></td>
    </tr>
</tbody></table></form><!-- 表单结束 -->
<script>
$(function(){
    $(".required").blur(function(){
        var $parent = $(this).parent();
        $parent.find(".formtips").remove();
        if(this.value=="")
        {
            $parent.append(' <small class="formtips onError"><font color="red">不能为空！</font></small>');
        }
        else
        {
            $parent.append(' <small class="formtips onSuccess"><font color="green">OK</font></small>');
        }
    });

    //重置
    $('#addarc input[type="reset"]').click(function(){
            $(".formtips").remove(); 
    });

    $("#addarc").submit(function(){
        $(".required").trigger('blur');
        var numError = $('#addarc .onError').length;
        
        if(numError){return false;}
    });
});
</script>
@endsection