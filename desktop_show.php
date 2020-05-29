<?php
echo "<div class='bod'><table width='900px' class='table1' cellspacing='0' border='1' align='center'>";
if($cnt<=1){
    echo "<center><h1>Box is Empty!</h1></center>";
}
for($i=$cnt-2; $i>=0; $i--){
    $cp = "\"#id".$i."\"";
    $txtlink = $all[$i];
    if(isLink($all[$i])){
        echo "
        <tr class='division'>
        <td width='10%'><img style='padding:10px' src='images/link.png' width='50px'/></td>
        <td width='70%' style='padding:10px'><a style='font-size:25px; text-decoration:none;' id='id".$i."' href='".$all[$i]."' target='_blank'>".$txtlink."</a></td>
        <td width='11%'><button onclick='copyToClipboard(".$cp.")' class='copy'>COPY</button></td>
        <td width='6%'><form method='POST'><input name='del_ind' type='hidden' value='".$i."'/><button onclick='deleted()' type='submit' class='delete' id='submit' name='submit'><i class='fa fa-close'></i></button></form></td>
        </tr>";
    }
    else{
        echo "
        <tr class='division'>
        <td width='10%'><img style='padding:10px' src='images/text.png' width='50px'/></td>
        <td width='70%' style='padding:10px'><font style='font-size:25px; text-decoration:none;' id='id".$i."'>".$txtlink."</font></td>
        <td width='11%'><button onclick='copyToClipboard(".$cp.")' class='copy'>COPY</button></td>
        <td width='6%'><form method='POST'><input name='del_ind' type='hidden' value='".$i."'/><button onclick='deleted()' type='submit' class='delete' id='submit' name='submit'><i class='fa fa-close'></i></button></form></td>
        </tr>";
    }
}
echo "</table></div>";
?>
