<?php
// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
    && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    } else {
        // 判断当期目录下的 upload 目录是否存在该文件
        // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
        // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
        move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);

        // 调用接口上传文件并获取URL
        $imageUrl = uploadFileAndGetUrl("upload/" . $_FILES["file"]["name"]);
        //删除上传文件
        unlink("upload/" . $_FILES["file"]["name"]);
        // 返回URL
        echo $imageUrl;
        exit;
    }
} else {
    echo "非法的文件格式";
}

// 调用API上传文件并返回URL的函数
function uploadFileAndGetUrl($filePath)
{
    // API URL
    $apiUrl = 'https://wenshan.space/minio/file/minio/upload?bucket=package&folder';
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $apiUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('file' => new CURLFILE($filePath)),
        CURLOPT_HTTPHEADER => array(
            'User-Agent: Apifox/1.0.0 (https://apifox.com)'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    //    // 解析响应数据
    $responseData = json_decode($response, true);

    // 返回URL
    return $responseData['data']['downloadUrl'];
}