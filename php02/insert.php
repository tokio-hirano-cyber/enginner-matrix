<?php
ini_set("display_errors", 1);

// 1. POSTデータ取得
$name        = $_POST["name"]        ?? "";
$email       = $_POST["email"]       ?? "";
$age         = $_POST["age"]         ?? "";
$station     = $_POST["station"]     ?? "";
$skill       = $_POST["skill"]       ?? "";
$process     = $_POST["process"]     ?? "";
$db          = $_POST["db"]          ?? "";
$timing      = $_POST["timing"]      ?? null;
$remote      = $_POST["remote"]      ?? "";
$nationality = $_POST["nationality"] ?? "";
$naiyou      = $_POST["naiyou"]      ?? "";

// 2. DB接続
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBconnectError!:'.$e->getMessage());
}

// 3. SQL（※ indatte を削除）
$sql = "INSERT INTO gs_an_table
(name,email,age,station,skill,process,db,timing,remote,nationality,naiyou)
VALUES
(:name,:email,:age,:station,:skill,:process,:db,:timing,:remote,:nationality,:naiyou)";

$stmt = $pdo->prepare($sql);

// 4. bind
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':age', ($age === "" ? null : (int)$age), PDO::PARAM_INT);
$stmt->bindValue(':station', $station, PDO::PARAM_STR);
$stmt->bindValue(':skill', $skill, PDO::PARAM_STR);
$stmt->bindValue(':process', $process, PDO::PARAM_STR);
$stmt->bindValue(':db', $db, PDO::PARAM_STR);
$stmt->bindValue(':timing', ($timing === "" ? null : $timing), PDO::PARAM_STR);
$stmt->bindValue(':remote', $remote, PDO::PARAM_STR);
$stmt->bindValue(':nationality', $nationality, PDO::PARAM_STR);
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);

// 5. 実行
$status = $stmt->execute();

// 6. 結果処理
if ($status == false) {
  $error = $stmt->errorInfo();
  exit("SQLError!!:".$error[2]);
} else {
  header("Location: index.php");
  exit();
}
