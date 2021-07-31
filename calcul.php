
    <?php
    $result=0;
        if(isset($_POST['submit'])) {
            if($_POST['submit']=='+') {
                $result=$_POST['num1'] + $_POST['num2'];
            }elseif(isset($_POST['submit'])) {
                if($_POST['submit']=='-') {
                    $result=$_POST['num1'] - $_POST['num2'];
                }
            } if(isset($_POST['submit'])) {
                if($_POST['submit']=='/') {
                    $result= $_POST['num1'] / $_POST['num2'];
                }
            }   if(isset($_POST['submit'])) {
                if($_POST['submit']=='*') {
                    $result= $_POST['num1'] * $_POST['num2'];
                }
            }else {
                return "false";
            }

        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculater</title>
</head>
<body>
<form action="" method="POST">
  <label for="fname">First Number:</label><br>
  <input type="text" id="fname" name="num1" value="<?= $_POST['num1'] ?? 0 ?>" ><br>
  <label for="lname">Last Number:</label><br>
  <input type="text" id="lname" name="num2" value="<?= $_POST['num2'] ?? 0 ?>"><br><br>
  <button type="submit" value="+" name="submit">ADD</button>
  <button type="submit" value="-" name="submit" >MINUS</button>
  <button type="submit" value="/" name="submit">DIVIDE</button>
  <button type="submit" value="*" name="submit" >MULTI</button>
</form>

<br>
<textarea name="" id="" cols="30" rows="10"><?= $result ?></textarea>
</body>
</html>