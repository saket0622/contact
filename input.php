<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>サンプルコード</title>
  </head>
  <body>
 
    <table>
      <tr>
        <td>名前</td>
        <td><?php echo $_POST['name']; ?></td>
      </tr>
      <tr>
        <td>メールアドレス</td>
        <td><?php echo $_POST['email']; ?></td>
      </tr>
      <tr>
        <td>電話番号</td>
        <td><?php echo $_POST['tel']; ?></td>
      </tr>
      <tr>
        <td>お問合せ種別</td>
        <td><?php echo $_POST['type']; ?></td>
      </tr>
      <tr>
        <td>ご希望の連絡方法</td>
        <td><?php echo $_POST['contact']; ?></td>
      </tr>
      <tr>
        <td>メッセージ</td>
        <td><?php echo $_POST['message']; ?></td>
      </tr>
    </table>
 
  </body>
</html>