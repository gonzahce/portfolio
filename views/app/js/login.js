function goLogin(){
    var connect, form, response, result, user, pass;
    user = __('user').value;
    pass = __('pass').value;
    form = 'user=' + user + '&pass=' + pass;
    connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    connect.onreadystatechange = function(){
      if(connect.readyState == 4 && connect.status == 200){
        if (connect.responseText == 1) {
          result = '<div class="alert alert-dismissible alert-success">';
          result += '<h4>Conectado</h4>';
          result += '<p><strong>Estamos redireccionando</strong></p>';
          result += '</div>';
          __('_AJAX_LOGIN_').innerHTML = result;
          location.reload();
        }else {
          __('_AJAX_LOGIN_').innerHTML = connect.responseText;
        }
      }else if(connect.readyState != 4){
        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<h4>Procesando</h4>';
        result += '</div>';
        __('_AJAX_LOGIN_').innerHTML = result;
      }
    }
    connect.open('POST','ajax.php?mode=login',true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send(form);
  }
  
  function runScriptLogin(e) {
    if(e.keyCode == 13){
      goLogin();
    }
  }
  