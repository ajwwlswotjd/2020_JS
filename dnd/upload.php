<?php
	// header("Content-Type: application/json");
	$upfile = $_FILES["file"];
	$src = "/upload/".$upfile['name'];
	move_uploaded_file($upfile["tmp_name"], ".".$src);

	// 업로드한게 이미지인가 확인띠

	echo json_encode(['success' => true, 'type'=>'image', 'src' => $src],JSON_UNESCAPED_UNICODE);