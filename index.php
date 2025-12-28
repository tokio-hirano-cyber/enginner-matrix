<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">My Profile</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>スキル概要登録</legend>
     <label>名前：<input type="varchar" name="name"></label><br>
     <label>Email：<input type="varchar" name="email"></label><br>
     <label>年齢：<input type="int" name="age"></label><br>
     <label>駅：<input type="varchar" name="station"></label><br>
 <label>スキル：<input type="varchar" name="skill"></label><br>
  <label>工程：<input type="varchar" name="process"></label><br>
   <label>DB：<input type="varchar" name="db"></label><br>
   <label>時期：<input type="date" name="timing"></label><br>
     <label>出勤：<input type="varchar" name="remote"></label><br>
      <label>国籍：<input type="varchar" name="nationality"></label><br>
     <label>自己PR：<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

</body>
</html>