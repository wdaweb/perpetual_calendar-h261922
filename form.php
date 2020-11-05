<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>表單製作</title>
</head>

<body>
  <h1>表單製作</h1>
  <h3>BMI計算機</h3>

  <div>
    <?php
      if(!empty($_GET['height']) && !empty($_GET['weight'])){
        echo "身高是:".$_GET['height'];   //name值
        echo "<br>";
        echo "體重是:".$_GET['weight'];
        $result=($_GET['weight'] /pow($_GET['height']/100,2));

      }   //isset變數 empty值
          //表單未送至client端 不會顯示
      else{   

    ?>
  </div>

  <form action="form.php" method="get">
    <p>身高: <input type="text" name="height" value="">cm<input type="submit" value="開始計算"></p>
    <p>體重: <input type="text" name="weight" value="">kg<input type="reset" value="清除計算"></p>
  </form>

  <?php
          }
  ?>

  <?php
    if(isset($result)){   //isset檢查變數是否定義 //取兩位數,sprintf("%.2f",$result);
  ?>

  <h5>你的BMI為</h5>   
  <div style="background:skyblue;width:200px;height:30px"><?=round($result,2);?></div>

  <a href='student.php?<?=$_GET['num']?>'>回學生查詢</a>
  <a href="form.php">重新計算</a>

  <?php
                      }
  ?>


</body>
</html>