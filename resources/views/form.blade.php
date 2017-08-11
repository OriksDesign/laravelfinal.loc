<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="/comments" method="POST">
	{{ csrf_field() }}
	Имя:
	<input type="text" name="name">
	Комментарий:<br>
	<textarea name="text" id="" cols="30" rows="10"></textarea>
<!-- 	<input type="hidden" name=_method" value="PUT"> -->
	<br>
	<input type="submit" value="Добавить">
	</form>
</body>
</html>
