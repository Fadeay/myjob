<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<title><?php echo ($webtitle); ?></title>
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
<nav class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/ThinkPHP/Home/Home/home">Home</a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/ThinkPHP/Home/Code/base64"><?php echo ($webtitle); ?></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">编码 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/ThinkPHP/Home/Code/base64">base64</a></li>
          <li><a href="/ThinkPHP/Home/Code/url">url编码</a></li>
          <li><a href="/ThinkPHP/Home/Code/radix">进制转换</a></li>
          <li class="divider"></li>
          <li><a href="/ThinkPHP/Home/Code/md5">MD5</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">爆破<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/ThinkPHP/Home/Burst/burstback">后台爆破</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="" >你好:<kbd class="btn-lg"><?php echo ($user); ?></kbd></a></li>
      <li><a href="<?php echo U('User/logout');?>"><kbd class="btn-lg">退出</kbd></a></li>
    </ul>
  </div>
</nav>
  <div class="container-fluid">
    <div style="margin-top: 10%" class="row">
      <div class="col-md-6 col-md-offset-1">
        <form class="form-inline" action="/ThinkPHP/Home/Code/base64" method="post">
          <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">base64</span>
                <textarea rows="15" cols="70" maxlength=1024 class="form-control" placeholder="请输入" name="base64"required autofocus><?php echo ($origin); ?></textarea>
            </div>
          </div>
          <div class="form-group col-md-offset-2">
            <button name="way" type="submit" class="btn btn-primary btn-lg" value="encode">加密=></button><br/><br/>
            <button name="way" type="submit" class="btn btn-primary btn-lg" value="decode">解密=></button>
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <div class="input-group">
                <span class="input-group-addon">结果</span>
                <textarea rows="15" maxlength="1024" class="form-control"><?php echo ($anwser); ?></textarea>
        </div>
      </div>
    </div>
  </div>
<script src="/bootstrap/js/tests/vendor/jquery.min.js"></script>
<script src="/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>