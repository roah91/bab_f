<?php
$db_host = "localhost"; 
$db_user = "root"; 
$db_passwd = "apmsetup";
$db_name = "babfriends"; 
$uid = $_POST["user_id"];
$upw = $_POST["user_pw"];

$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
if (mysqli_connect_errno($conn)) 
	{
		echo "�����ͺ��̽� ���� ����: " . mysqli_connect_error();
	} 
else //DB�����
	{
		$query = "SELECT * FROM users WHERE id='$uid' AND pw='$upw';";
		$result= $conn->query($query);
		$row = mysqli_fetch_array($result);
		if(isset($row['id']) AND $row['id'] != NULL)
		{
			//echo $content;
			echo $uid;
			echo $upw;
			echo "����";
			//session open
?>
	<script>
		window.location.href="bab_list.html";
	</script>
<?php
		}
		else
		{
?>
	<script>
		alert("���̵� Ȥ�� �н����带 Ȯ�����ּ���");
		window.history.back();
	</script>

<?php
		}
	}
?>