
<meta charset="utf-8" />

 <center><table border="0">
        <tr bgcolor="#96ceb4">
            <td>功能</td>
            <td>編號</td>
            <td>名稱</td>
            <td>價格</td>
            <td>數量</td>
        </tr>
            <?php
            $flag = false;  $total = 0;
            while ( list($arr,$value) = each($_COOKIE) ) {
                if ( isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr]) ) {
                    if ($flag) {   
                        $flag = false;
                        $color="#DDDDDD";
                    } 
                    else {
                        $flag = true;
                        $color="#DDDDDD";
                    }
                    echo "<tr bgcolor='".$color."'><td>";
                    echo "<a href='delete.php?Id=".$arr."'>";
                    echo "刪除</a></td>";
                    $price = 0;
                    $num = 0; 
                    while ( list($name, $value)=each($_COOKIE[$arr])) {
                        echo "<td>" . $value . "</td>";
                        if ($name == "price")  $price = $value;
                        if ($name == "num") $num = $value;
                    }
                    $total += $price * $num;  
                    echo "</tr>";
                }
            }
            if ($total != 0) {  
            echo "<tr bgcolor=#FFAA33><td colspan=5 align=right>";
            echo "總金額 = NT$".$total."元</td></tr>";
            }
            ?>
    </table></center>



<hr size="5px" align="center" width="100%">
<center>
<a href="http://localhost/catalog.php"> <img src="https://www.moedict.tw/%E5%95%86%E5%93%81%E7%9B%AE%E9%8C%84.png?font=wt064" width="6%"> </a>
<a href="http://localhost/cart.php"> <img src="https://img.51miz.com/Element/00/77/78/68/01e44fbc_E777868_aa1104af.png" width="5%"> </a>
</center>