<?php
session_start();
include_once 'Nav.php';
$imgurl = $_GET['imgurl'];
?>

<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3 size_18">新增事件</h4>

                <form class="needs-validation" action="listaddPost.php" method="post" onsubmit="return check()"
                      novalidate>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">事件标题</label>
                        <input name="eventname" type="text" class="form-control" id="validationCustom01"
                               placeholder="请输入事件标题" value="" required>
                    </div>
                    <div class="form-group mb-3">
                        <script>
                            function myOnClickHandler(obj) {
                                var input = document.getElementById("switch3");
                                var imgurl = document.getElementById("img_url")
                                console.log(input);
                                if (obj.checked) {
                                    console.log("打开");
                                    input.setAttribute("value", "1");
                                    imgurl.style.display = "block";
                                } else {
                                    console.log("关闭");
                                    input.setAttribute("value", "0");
                                    imgurl.style.display = "none";
                                }
                            }
                        </script>
                        <label for="validationCustom01">完成状态</label>
                        <input type="checkbox" name="icon" id="switch3" value="1" data-switch="success"
                               onclick="myOnClickHandler(this)" checked>
                        <label id="switchurl" style="display:block;" for="switch3" data-on-label="Yes"
                               data-off-label="No"></label>
                    </div>
                    <div class="form-group mb-3" id="img_url">
                        <label for="imgurl">图片地址</label>
                        <input type="text" name="img" class="form-control" id="imgurl"
                               placeholder="请输入图片地址（没有无需填写）" value="<?php echo $imgurl ?>">
                    </div>
                    <form id="uploadForm" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="file">选择图片文件</label>
                            <input type="file" name="file" id="file" accept="image/*">
                        </div>
                        <button type="button" id="submitButton" class="btn btn-primary">上传图片</button>
                    </form>

                    <script>        document.getElementById('submitButton').addEventListener('click', function () {
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
                                    //触发input
                                    document.getElementById('imgurl').dispatchEvent(new Event('input'));
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    alert('文件上传失败');
                                });
                        });
                    </script>
                    <div class="form-group mb-3 text_right">
                        <button class="btn btn-primary" type="button" id="listaddPost">提交修改</button>
                    </div>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<script>
    function check() {
        let title = document.getElementsByName('eventname')[0].value.trim();
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