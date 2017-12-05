
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>    

</head>
<body>
		<center>
			<form action="add" method="post">
				<table border="10">
					<tr>
						{!! csrf_field() !!}
						<td>留言人</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>留言内容</td>
						<td><textarea name="lm" id="" cols="21" rows="4"></textarea></td>
					</tr>
					<tr>
						<td>时间</td>
						<td>
                  <input placeholder="请输入日期" name="time" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                </td>

					</tr>
					
				</table>
				
				<br>
				<input type="submit" value="提交">
				<input type="reset" value="重置">
			</form>
		</center>
</body>
</html>
<script src="{{ URL::asset('js/js/laydate.js')}}"></script>
