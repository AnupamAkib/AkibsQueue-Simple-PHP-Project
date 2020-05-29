<?php
echo "<div class='bod'><table width='100%' class='table1' cellspacing='0' border='1' align='center'>";
if($cnt<=1){
    echo "<center><h1>Box is Empty!</h1></center>";
}
for($i=$cnt-2; $i>=0; $i--){
    $cp = "\"#id".$i."\"";
    $txtlink = $all[$i];
    if(isLink($all[$i])){
        echo "
        <tr class='division'>
        <td width='12%'><img style='padding:4px' src='images/link.png' width='28px'/></td>
        <td width='63%' style='padding:4px'><a style='font-size:large; text-decoration:none;' id='id".$i."' href='".$all[$i]."' target='_blank'>".$txtlink."</a></td>
        <td width=''><button onclick='copyToClipboard(".$cp.")' class='copy'><i class='fa fa-copy' style='font-size:large;'></i></button></td>
        <td width=''><form method='POST'><input name='del_ind' type='hidden' value='".$i."'/><button onclick='deleted()' type='submit' class='delete' id='submit' name='submit'><i class='fa fa-close'></i></button></form></td>
        </tr>";
    }
    else{
        echo "
        <tr class='division'>
        <td width='12%'><img style='padding:4px' src='images/text.png' width='28px'/></td>
        <td width='63%' style='padding:4px'><font style='font-size:large; text-decoration:none;' id='id".$i."'>".$txtlink."</font></td>
        <td width=''><button onclick='copyToClipboard(".$cp.")' class='copy'><i class='fa fa-copy' style='font-size:large;'></i></button></td>
        <td width=''><form method='POST'><input name='del_ind' type='hidden' value='".$i."'/><button onclick='deleted()' type='submit' class='delete' id='submit' name='submit'><i class='fa fa-close'></i></button></form></td>
        </tr>";
    }
}
echo "</table></div>";
?>
