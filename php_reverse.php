<html>
    <body>
        <h1>Print the number</h1>
        <form method="post">
            <input type="number" placeholder="number" name="num"/>
            <button type="submit" name="submit" value="submit">Check</button>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $num = $_POST['num'];
                function reverse($temp){
                    $remainder = 0;
                    $r = 0;
                    while($temp != 0){
                        $remainder = $temp % 10;
                        $r = $r * 10 + $remainder;
                        $temp =floor($temp/10);
                    }
                    return $r;
                }

                echo "Reverse of $num is ".reverse($num);
           
            }
            ?>
    </body>
</html>

