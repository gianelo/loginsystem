 
<body>
  <div class="container">
    <div class="row" style="margin-top: 25%;">
      <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-2">
          <div >
            <img style="display:block;margin:0 auto 0 auto;" src="<?=base_url();?>static/img/icons/svg/paper-bag.svg" alt="paper-bag-icon" style="margin: 0 auto;">
            <p style="color: white; text-align: center;">Bienvenido al <b>Loginsystem APP</b></p>
          </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <div class="login-form">
            <div class="form-group">
              <input class="form-control login-field" value="" placeholder="Correo electronico" id="login-name" type="text">
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input class="form-control login-field" value="" placeholder="Password" id="login-pass" type="password">
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

            <a style="background-color: #3498db;" class="btn btn-primary btn-lg btn-block btn-hover" href="#">Log in</a>
          </div>
      </div>
    </div>
  </div>
</body>