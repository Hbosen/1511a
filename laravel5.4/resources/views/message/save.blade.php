<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<center>
 
            <center>
            <form action="upd" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="id" value="<?= $row->id ?>">
                <table border="10">
                    <tr>
                        {!! csrf_field() !!}
                        <td>留言人</td>
                        <td><input type="text" name="name"  value="<?= $row->name ?>"></td>
                    </tr>
                    <tr>
                        <td>留言内容</td>
                        <td><input type="text" name="lm" value="<?= $row->lm ?>"></td>
                    </tr>
                    
                </table>
                
                <br>
                <input type="submit" value="修改">
            </form>
        </center>
</center>
</body>
</html>