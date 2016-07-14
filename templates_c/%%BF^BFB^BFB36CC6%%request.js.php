<?php /* Smarty version 2.6.25-dev, created on 2016-07-12 08:09:35
         compiled from request.js */ ?>
/**
 * Created by yam8511_li on 2016/7/12.
 */


/**
 * Establish a Request
 */
function createRequest(){
    var request;
    if(window.XMLHttpRequest){
        request = new XMLHttpRequest();
    }
    else{
        request = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return request;
}

function loadDoc(){
    var request = createRequest();
    request.onreadystatechange = function () {
        if(request.readyState == 4 && request.status == 200){
            document.getElementById("hint_username").innerHTML = request.responseText;
        }
    };

    request.open("GET","<?php echo $this->_tpl_vars['file']; ?>
",true);
    request.send();
}