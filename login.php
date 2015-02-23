<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login Modelo01</title>
  <link rel="stylesheet" href="assets/reset/normalize.css">
  <link rel="stylesheet" href="assets/style.css">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto+Slab'>

  <script>
    window.console = window.console || function(t) {};
    window.open = function(){ console.log('window.open is disabled.'); };
    window.print = function(){ console.log('window.print is disabled.'); };
    // Support hover state for mobile.
    if (false) {
      window.ontouchstart = function(){};
    }
  </script>
</head>
<body>
  <div class='preload login--container'>
  <div class='login--form'>
    <div class='login--username-container'>
      <label>Usuario</label>
      <input autofocus placeholder='Usuario' type='text'>
    </div>
    <div class='login--password-container'>
      <label>Senha</label>
      <input placeholder='Senha' type='password'>
      <button class='js-toggle-login login--login-submit'>Login</button>
    </div>
  </div>
  <div class='login--toggle-container'>
    <small>Painel Administrativo</small>
    <div class='js-toggle-login'>Login</div>
  </div>
</div>
  <script src='//assets.codepen.io/assets/libs/fullpage/jquery-c152c51c4dda93382a3ae51e8a5ea45d.js'></script>
  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage('resize', "*");
    } </script>
  <script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout-6c99970ade81e43be51fa877be0f7600.js"></script>
  <script>
    (function () {
    $(function () {
        $('.login--container').removeClass('preload');
        this.timer = window.setTimeout(function (_this) {
            return function () {
                return $('.login--container').toggleClass('login--active');
            };
        }(this), 2000);
        return $('.js-toggle-login').click(function (_this) {
            return function () {
                window.clearTimeout(_this.timer);
                $('.login--container').toggleClass('login--active');
                return $('.login--username-container input').focus();
            };
        }(this));
    });
}.call(this));
    //@ sourceURL=pen.js
  </script>
</body>
</html>