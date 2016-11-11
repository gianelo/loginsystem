 
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="center-div-30 right">
            <img src="<?=base_url();?>static/img/icons/svg/paper-bag.svg" alt="paper-bag-icon">
            <p style="color: white;">Bienvenido al <b>Loginsystem APP</b></p>
          </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs12">
          <div class="login-form center-div-50 left">
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