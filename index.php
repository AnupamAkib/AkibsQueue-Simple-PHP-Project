<?php include "header.php"?>
<?php include "snackbar.php"?>
<?php
if(isset($_SESSION['is_login'])==false){
    echo "<script> window.location.href='login.php'</script>";
}
 ?>
<title>Akib's QUEUE</title>

<script type='text/javascript'>
function copyToClipboard(element){
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
  copied();
}
</script>

<center>
<form method='POST'>
    <input placeholder="Enter Link/Text to Push" type='text' name='textadd' class='txt' required>
    <button name='newtest' type='submit' class='btn'>PUSH</button>
</form>
</center>

<?php
if(isset($_POST['newtest'])){
    $add = $_POST['textadd'];
    $file = fopen("data.txt", "a");
    fwrite($file, $add."\n");
    fclose($file);
    unset($_POST['newtest']);
    echo "<script> window.location.href='/'</script>";
}

$all = array_fill(0, 1000, 0);
$cnt=0;
$file = fopen("data.txt", "r");
while(!feof($file)){
    $x=fgets($file);
    $all[$cnt]=$x;
    $cnt++;
}
fclose($file);

function isLink($s){
    if($s[0]=='h' && $s[1]=='t' && $s[2]=='t' && $s[3]=='p' && $s[4]==':' && $s[5]=='/' && $s[6]=='/'){
        return true;
    }
    else if($s[0]=='h' && $s[1]=='t' && $s[2]=='t' && $s[3]=='p' && $s[4]=='s' && $s[5]==':' && $s[6]=='/' && $s[7]=='/'){
        return true;
    }
    return false;
}

if($mobile==1){
    include "mobile_show.php";
}
else{
    include "desktop_show.php";
}

if(isset($_POST['submit'])){
    $ind=$_POST['del_ind'];
    $k=0;
    $new = array_fill(0, 1000, 0);
    for($i=0; $i<$cnt-1; $i++){
        if($i!=$ind){
            $new[$k] = $all[$i];
            $k++;
        }
    }
    $file = fopen("data.txt", "w");
    for($i=0; $i<$k; $i++){
        fwrite($file, $new[$i]);
    }
    fclose($file);
    unset($_POST['submit']);
    echo "<script> window.location.href='/'</script>";
}

 ?>



