<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta charset="utf-8" />
	{{ HTML::style('assets/css/login.css') }}
	{{ HTML::script('assets/js/jQuery/jquery-1.7.1.min.js') }}
	<script>
		$(document).ready(function(){
 			$("#submit1").hover(function() {
				$(this).animate({"opacity": "0"}, "slow");
			},
			function() {
				$(this).animate({"opacity": "1"}, "slow");
			});
 		});
	</script>
</head>
<body>

	<div id="wrapper">
		{{ Session::get('message') }}
		<p>
			{{ $errors->first('username') }}<br />
			{{ $errors->first('password') }}
		</p>
		<div id="wrappertop"></div>
		<div id="wrappermiddle">
			<h2>Login</h2>
			{{ Form::open(array('route'=>'users.login')) }}
				<div id="username_input">
					<div id="username_inputleft"></div>
					<div id="username_inputmiddle">
						{{ Form::text('username', '', array('autocomplete'=>'off', 'id'=>'url', 'placeholder'=>'Username')) }}
						{{ HTML::image('assets/img/login/mailicon.png', '', array('id'=>'url_user')) }}
					</div>
					<div id="username_inputright"></div>
				</div>
				<div id="password_input">
					<div id="password_inputleft"></div>
					<div id="password_inputmiddle">
						<input autocomplete="off" type="password" name="password" id="url" value="Password" onclick="this.value = ''">
						{{ HTML::image('assets/img/login/passicon.png', '', array('id'=>'url_password')) }}
					</div>
					<div id="password_inputright"></div>
				</div>
				<div id="submit">
					<input type="image" src="{{ URL::to('assets/img/login/submit_hover.png') }}" id="submit1" value="Sign In" onclick="this.form.submit();">
					<input type="image" src="{{ URL::to('assets/img/login/submit.png') }}" id="submit2" value="Sign In" onclick="this.form.submit();">
				</div>
			</form>
		</div>

		<div id="wrapperbottom"></div>
		<div id="powered">
			<p>Powered by <a href="http://www.zantrik.com">zantrik.com</a></p>
		</div>
	</div>

	{{ HTML::script('assets/js/jQuery/jquery.query-2.1.7.js') }}
	{{ HTML::script('assets/js/rainbows.js') }}

</body>
</html>
