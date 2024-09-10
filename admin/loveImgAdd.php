<?php
session_start();
include_once 'Nav.php';
$inv_date = date("Y-m-d");
$imgurl = $_GET['imgurl'];
?>

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3 size_18">新增图片</h4>

                <form class="needs-validation" action="ImgAddPost.php" method="post" onsubmit="return check()"
                      novalidate>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">日期</label>
                        <input class="form-control col-sm-4" id="example-date" type="date" name="imgDatd" class="form-control" placeholder="日期" value="<?php echo $inv_date ?>" required>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="validationCustom01">图片描述<span class="margin_left badge badge-success-lighten">尽量控制在25个字符以内 </span></label>
                        <input name="imgText" type="text" class="form-control" placeholder="请输入图片描述" value="" required>
                    </div>

                    <form id="uploadForm" enctype="multipart/form-data">
                        <div class="form-group mb-3" id="img_url">
                            <label for="imgurl">图片地址</label>
                            <input type="text" name="imgUrl" class="form-control" id="imgurl"
                                   placeholder="请输入图片地址（没有无需填写）" value="<?php echo $imgurl ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="file">选择图片文件</label>
                            <input type="file" name="file" id="file" accept="image/*">
                        </div>
                        <button type="button" id="submitButton" class="btn btn-primary">上传图片</button>
                    </form>

                    <script>        document.getElementById('submitButton').addEventListener('click', function() {
                            var fileInput = document.getElementById('file');
                            var file = fileInput.files[0];

                            if (!file) {
                                alert('请选择一个文件');
                                return;
                            }

                            var formData = new FormData();
                            formData.append('file', file);

                            fetch('upload_handler.php', {
                                method: 'POST',
                                body: formData
                            })
                                .then(response => response.text())
                                .then(data => {
                                    console.log(data);
                                    // 更新 imgurl 变量或显示结果
                                    document.getElementById('imgurl').value = data;
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    alert('文件上传失败');
                                });
                        });
                    </script>
                    <div class="form-group mb-3 text_right">
                        <button class="btn btn-primary"  type="button" id="ImgAddPost">新增相册</button>
                    </div>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<script>
    function check() {
        let title = document.getElementsByName('imgText')[0].value.trim();
        if (title.length == 0) {
            alert("事件不能为空");
            return false;
        }
    }

</script>

<?php
include_once 'Footer.php';
?>

</body>
</html>