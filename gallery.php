<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid ;
  text-align: left;
  padding: 8px;
}



body{ 
  background-image: url("Tulips.jpg")
}




</style>
</head>
<body>

<h2>Gallery</h2>

<table>
  
  <TABLE BORDER=1 width=100% height=100%>
    <TR>
    <td><a href='gallery.php?picture=image1.jpg&caption=my favorite flower'><img src='image1.jpg' width=100 height=100></a>
    <td rowspan="3">
      
        <?php 
        if (isset($_GET['picture']))
        {
            $a=$_GET['picture'];
            $b=$_GET['caption'];
            print "<img src=$a width=500 height=500><br>$b";
    
        }
        else
            print "<img src='image1.jpg' width=500 height=500><br>my favorite flower";		
    
    ?>
    
    <TR>
<td><a href='gallery.php?picture=image2.jpg&caption=my favorite flower 2'><img src="image2.jpg" width=100 height=100></a>

<TR>
<td><a href='gallery.php?picture=image3.jpg&caption=my favorite flower 3'><img src="image3.jpg" width=100 height=100></a>
</table>

</body>
</html>