<?php
class IndexAction extends Action {

    // 处理表单数据
    public function upfile() {
		$path = APP_PATH."Uploads/";
       
		$file_src = "src.png"; 
		$filename162 = "1.png"; 
		$filename48 = "2.png"; 
		$filename20 = "3.png";   

		$src=base64_decode($_POST['pic']);
		$pic1=base64_decode($_POST['pic1']);   
		$pic2=base64_decode($_POST['pic2']);  
		$pic3=base64_decode($_POST['pic3']);  

		if($src) {
		file_put_contents($file_src,$src);
		}

		file_put_contents($path.$filename162,$pic1);
		file_put_contents($path.$filename48,$pic2);
		file_put_contents($path.$filename20,$pic3);

		$rs['status'] = 1;

		echo json_encode($rs);
    }

}