<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>广发信用卡-申请</title>

    <!-- 引入 WeUI -->
    <link rel="stylesheet" href="/assets/styles/weui.min.css"/>

</head>
<body>

<div class="weui_cells_title">基本信息</div>
<div class="weui_cells weui_cells_form">
    <div class="weui_cell">
        <div class="weui_cell_hd">
            <label for="name" class="weui_label">姓名</label>
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <input type="text" class="weui_input" placeholder="请填写您的真实姓名">
        </div>
    </div>
</div>

<div class="weui_cells weui_cells_form">
    <div class="weui_cell weui_cell_select">
        <div class="weui_cell_hd">
            <label for="sex" class="weui_label">性别</label>
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <select class="weui_select" name="sex">
                <option value="1">男</option>
                <option value="2">女</option>
            </select>
        </div>
    </div>

    <div class="weui_cell">
        <div class="weui_cell_bd weui_cell_primary">
            <div class="weui_uploader">
                <div class="weui_uploader_hd weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">身份证图片上传</div>
                    <div class="weui_cell_ft">0/2</div>
                </div>
                <div class="weui_uploader_bd">
                    <ul class="weui_uploader_files">
                        <li class="weui_uploader_file" style="background-image:url(...)"></li>
                        <li class="weui_uploader_file weui_uploader_status" style="background-image:url(...)">
                            <div class="weui_uploader_status_content">
                                <i class="weui_icon_warn"></i>
                            </div>
                        </li>
                        <li class="weui_uploader_file weui_uploader_status" style="background-image:url(...)">
                            <div class="weui_uploader_status_content">50%</div>
                        </li>
                    </ul>
                    <div class="weui_uploader_input_wrp">
                        <input class="weui_uploader_input" type="file" accept="image/*" multiple="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="weui_cell">
        <div class="weui_cell_hd"><label for="idcart" class="weui_label">身份证号</label></div>
        <div class="weui_cell_bd weui_cell_primary"><input type="text" name="idcard" class="weui_input"></div>
    </div>
</div>

<div class="weui_cells_title">联系信息</div>
<div class="weui_cells weui_cells_form">


    <div class="weui_cell">
        <div class="weui_cell_hd"><label for="mobile" class="weui_label">手机号</label></div>
        <div class="weui_cell_bd weui_cell_primary"><input type="tel" name="mobile" class="weui_input"></div>
    </div>

    <div class="weui_cell">
        <div class="weui_cell_hd"><label for="company" class="weui_label">工作单位</label></div>
        <div class="weui_cell_bd weui_cell_primary"><input type="text" name="company" class="weui_input"></div>
    </div>
</div>

<div class="weui_cells_title">单位地址</div>
<div class="weui_cells weui_cells_form">
    <div class="weui_cell">
        <div class="weui_cell_bd weui_cell_primary">
            <select name="province" class="weui_select">
                <option value="">湖北</option>
                <option value="">北京</option>
            </select>
            <select name="city" class="weui_select">
                <option value="">荆州</option>
                <option value="">武汉</option>
            </select>
            <select name="district" class="weui_select">
                <option value="">沙市区</option>
                <option value="">洪湖</option>
            </select>
        </div>
    </div>

    <div class="weui_cell">
        <div class="weui_cell_bd weui_cell_primary">
            <textarea name="address" class="weui_textarea"></textarea>
            <div class="weui_textarea_counter"><span>0</span>/200</div>
        </div>
    </div>
</div>


</body>
</html>