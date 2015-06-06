<!--
IMAGE DATABASE
DATE: 6/6/15

This code somewhat works. The code will display your image once it is uploaded. 
I am going to modify it later and send it over again. 
I just wanted to have something on here so that everyone can test it and what not.

Daniel Johnson
futuregamingtactics@gmail.com
-->
<?php
    ini_set('mysql.connect_timeout',300);
    ini_set('default_socket_timeout',300);
 
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
        <br/>
            <input type="file" name="image" />
            <br/><br/>
            <input type="submit" name="submit" value="Upload" />
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
                {
                    echo "Please select an image.";
                }
                else
                {
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    saveimage($name,$image);
                }
            }
            displayimage();
            function saveimage($name,$image)
            {
                $con=mysql_connect("localhost","root","");
                mysql_select_db('imagesTest',$con);
                $qry="insert into blobTest (name,image) values ('$name','$image')";
                $result=mysql_query($qry,$con);
                if($result)
                {
                    //echo "<br/>Image uploaded.";
                }
                else
                {
                    //echo "<br/>Image not uploaded.";
                }
            }
            function displayimage()
            {
                $con=mysql_connect("localhost","root","");
                mysql_select_db("imagesTest",$con);
                $qry="select * from blobTest";
                $result=mysql_query($qry,$con);
                while($row = mysql_fetch_array($result))
                {
                    echo '<img height="300" width="300" src="data:image;base64,'.$row[2].' "> ';
                }
                mysql_close($con);   
            }
        ?>
    </body>
</html>

<!--echo '<img height="300" width="300" src="data:image;base64,' . $row[2] .'">';
}
mysql_close($con);-->
