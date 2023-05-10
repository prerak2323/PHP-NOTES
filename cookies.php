<?php

/* A cookie is a piece of data from a website that is stored within a web browser that the website 
can retrieve at a later time. Cookies are used to tell the server that users have returned to a 
particular website.*/

/* a single host can request up to 20 cookies be stored by 
a users browser
Each cookie consists of a name, value, and expiration date, as well as
host and path information. The size of an individual cookie is limited to 4KB.

After a cookie is set, only the originating host can read the data, ensuring that the user’s
privacy is respected

Anatomy of a cookie
A PHP script that sets a cookie might send headers that look something like this:
HTTP/1.1 200 OK
Date: Wed, 18 Jan 2012 10:50:58 GMT
Server: Apache/2.2.21 (Unix) PHP/5.4.0
X-Powered-By: PHP/5.4.0
Set-Cookie: vegetable=artichoke; path=/; domain=yourdomain.com
Connection: close
Content-Type: text/html

if set, the expiration field provides the date at which the browser should forget thevalue

the path is a directory found on the domain, below which the cookie should br sent back to the server
if the path is "/" , that means the cookie can be read only by files within the /products directory

If the path is “/products/”, the cookie can be read only by files within
the /products directory of the website.
cookie can be send to a particular domain only

acccessing cookies 
the browser send some header in resopnse to the cookie request


A PHP script then has access to the cookie in the environment variable HTTP_COOKIE
or as part of the $_COOKIE superglobal variable, which you may access three different ways:
echo $_SERVER[‘HTTP_COOKIE’]; // will print “vegetable=artichoke”
echo getenv(‘HTTP_COOKIE’); // will print “vegetable=artichoke”
echo $_COOKIE[‘vegetable’]; // will print “artichoke”


setting up cookies
*/
setcookie("key","value",time()+3600,"/","",0);
// 0 means that cookies can be strored in non secure enviournment
if(isset($_COOKIE['key']))
{
    echo " hello again! you have chosen   " .$_COOKIE['key'];

}
else 
{
    echo "<p> Hello, you this may be your first visit.</p>";

}
// '/' means that a cookie should be sent for any page withen this server enviroment.
// viewing a stored cookie in browser go settings and then cookies


/* deleting a cookie with php */

setcookie("key","",time()-60,"/","",0);

?>