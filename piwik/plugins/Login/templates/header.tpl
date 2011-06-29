<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Piwik &rsaquo; {'Login_LogIn'|translate}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="plugins/CoreHome/templates/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="plugins/Login/templates/login.css" />
	<meta name="description" content="{'General_OpenSourceWebAnalytics'|translate|escape}" />
	
{if isset($enableFramedLogins) && !$enableFramedLogins}
{literal}
	<style>body { display : none; }</style>
{/literal}
{/if}
{if isset($forceSslLogin) && $forceSslLogin}
{literal}
	<script>
		if(window.location.protocol !== 'https:') {
			var url = window.location.toString();
			url = url.replace(/^http:/, 'https:');
			window.location.replace(url);
		}
	</script>
{/literal}
{/if}
{literal}
	<script type="text/javascript">
		function focusit() {
			var formLogin = document.getElementById('form_login');
			if(formLogin)
			{
				formLogin.focus();
			}
		}
		window.onload = focusit;
	</script>
{/literal}
	<script type="text/javascript" src="libs/jquery/jquery.js"></script>
</head>
<body class="login">
{if isset($enableFramedLogins) && !$enableFramedLogins}
{literal}
	<script type="text/javascript">
		if(self == top) {
			var theBody = document.getElementsByTagName('body')[0];
			theBody.style.display = 'block';
		} else {
			top.location = self.location;
		}
	</script>
{/literal}
{/if}
{include file="default/ie6.tpl"}
	<div id="logo">
	<a href="http://piwik.org" title="{$linkTitle}">
		<img src='themes/default/images/logo.png' width='200' style='margin-right:20px'>
		<div class="description"># {$linkTitle}</div>
	</a>
	</div>