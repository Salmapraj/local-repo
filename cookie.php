<!-- Cookies are small files of information that a web server generates and sends to a web browser. Web browsers store the cookies they receive for a predetermined period of time, or for the length of a user's session on a website. They attach the relevant cookies to any future requests the user makes of the web server. -->
 <?php 
//cookie are stored as an associative array
// setcookie(key, value, expire, path, domain, secure, httponly);

setcookie("jeans", "baggy", time()+86400,"/");
setcookie("jeans", "baggy", time()+86400,"/");
setcookie("new", "copy", time()+86400,"/");
setcookie("drnik","coffee",time() - 0, "/"); //delete a cookie

foreach($_COOKIE as $key => $value){
    echo $value;
}
    ?>