<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
maximum-scale=1, user-scalable=no">
<title>登陆</title>
<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
<style>
    body {
    background: url(/ThinkPHP/Public/image/44981-106.jpg) fixed center center no-repeat;
    background-size: cover;
    width: 100%;
    }
</style>
</head>
<body>
  <div class="container-fluid">
    <div style="margin-top: 12%" class="row">
      <div class="col-md-3 col-md-offset-8">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">
          登陆
          </h4>
        </div>
        <div class="modal-body">
          <form class="" action="/ThinkPHP/Home/user/login" method="post">
            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon">账号</span>
                  <input type="text" class="form-control" placeholder="请输入您的账号" name="username"required autofocus/>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon">密码</span>
                  <input type="password" class="form-control" placeholder="请输入您的密码" name="password"required/>
              </div>
            </div>
            <div class="form-group form-inline">
                <input type="text" name="verify" class="form-control" placeholder="验证码" style="width:170px;" />
                <img class="verify" src="<?php echo U(verify);?>" alt="验证码" onClick="this.src=this.src+'?'+Math.random()" />
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-block btn-primary">登录</button>
              <a href ="/ThinkPHP/Home/user/register" class="btn btn-block btn-info">注册</a>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
<script src="/bootstrap/js/tests/vendor/jquery.min.js"></script>
<script src="/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>