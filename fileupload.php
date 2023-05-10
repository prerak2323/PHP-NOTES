<?php
/* information about the uploaded file becomes available to you in the
$_FILES
$_FILES[‘fileupload’][‘name’] Original name of file test.gif
uploaded
$_FILES[‘fileupload’] Path to temporary file /tmp/phprDfZvN
[‘tmp_name’]
$_FILES[‘fileupload’][‘size’] Size (in bytes) of 6835
uploaded file
$_FILES[‘fileupload’][‘type’] MIME type of uploaded image/gif
file (where given by 
client)

enctype(ENCode TYPE) attribute specifies how the form-data should be encoded when submitting it to the server
*/
$file_dir="C:\Users\Prerak\Desktop";
foreach($_FILES as $file_name=>$file_array)
{
    echo "path: ".$file_array['tmp_name']."<br>\n";echo "path: ".$file_array['tmp_name']."<br>\n";
    echo "name: ".$file_array['name']."<br>\n";
    echo "type: ".$file_array['type']."<br>\n";
    echo "size: ".$file_array['size']."<br>\n";
// 'tmp_name' elements in $_FILES array refers to the temporary location of the uploaded file on the server
    if(is_uploaded_file($file_array['tmp_name'])) /* is_uploaded_file() function. This function accepts a path to an
    uploaded file and returns true only if the file in question is a valid upload file. */
    {
        move_uploaded_file($file_array['tmp_name'],"$file_dir/".$file_array['name'])
        or die("could not move file");
        // move_uploaded_file(temperory location, final location)
        echo "file was moved";
    }
    else {
        echo "no file found";
    }

}

?>