<?php
        $connect = mysqli_connect('localhost', 'root', '11111111', 'whenwemeet', '3306') or die("fail");
        $id=$_GET[inputEmail];
        $pw=$_GET[inputPassword];

        $date = date('Y-m-d H:i:s');
 
        //입력받은 데이터를 DB에 저장
        $query = "insert into member (id, pw, date, permit) values ('$id', '$pw', '$date', 0)";

        $result = $connect->query($query);

        //저장이 됬다면 (result = true) 가입 완료
        if($result) {
        ?>
<script>
        alert('가입 되었습니다.');
        location.replace("./login.html");
</script>

<?php   }
        else{
?>
<script>

        alert("fail");
</script>
<?php   }
 
        mysqli_close($connect);
?>