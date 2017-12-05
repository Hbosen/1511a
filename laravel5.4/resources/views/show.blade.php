<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<center>
			<table border="1">
			<br>
			<hr>
					<tr>
						<td>ID</td>
						<td>留言人</td>
						<td>留言内容</td>
						<td>时间</td>
						<td>操作</td>
					</tr>

				<?php foreach($list as $val):?>
					<tr>
						<td>{{$val->id}}</td>
						<td>{{$val->name}}</td>
						<td>{{$val->lm}}</td>
						<td>{{$val->time}}</td>
						<td>
							<a href="delete?id={{$val->id}}">删除</a>
							<a href="update?id={{$val->id}}">修改</a>
						</td>
					</tr>

				<?php endforeach;?>
			</table>

          {!! $list->links() !!}
          <link rel="stylesheet" href="{{asset('css/app.css')}}">
		</center>




</body>
</html>

