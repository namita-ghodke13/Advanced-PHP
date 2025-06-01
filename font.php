<!--Assignment - 1
Set A
2)Write a PHP script to change the preferences of your web page like font
style,font size,font color,background color using cookie.Display selected
setting on next web page and actual implementation (with new settings) on 
third page.-->

<?php
$font_style=isset($_COOKIE['font_style']) ? $_COOKIE['font_style'] : 'Arial';
$font_size=isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : '16px';
$font_color=isset($_COOKIE['font_color']) ? $_COOKIE['font_color'] : '#000000';
$bg_color=isset($_COOKIE['bg_color']) ? $_COOKIE['bg_color'] : '#FFFFFF';
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" cntent="width=device-width,initial-scale=1.0">
      <title>Change Preferences</title>
   </head>
   <body>
      <h1>Change Preferences</h1>
      <form action="index2.php" method="POST">
         <label for="font_style">Font Style :</label>
         <select name="font_style">
            <option value="Arial" <?php if($font_style=='Arial') echo 'selected'; ?>>Arial</option>
            <option value="Times New Roman" <?php if($font_style=='Times New Roman') echo 'selected'; ?>>Times New Roman</option>
            <option value="Gigi" <?php if($font_style=='Gigi') echo 'selected'; ?>>Gigi</option>
         </select><br>
         <label for="font_size">Font Size :</label>
         <select name="font_size">
            <option value="14px" <?php if($font_size=='14px') echo 'selected'; ?>>14px</option>
            <option value="16px" <?php if($font_size=='16px') echo 'selected'; ?>>16px</option>
            <option value="18px" <?php if($font_size=='18px') echo 'selected'; ?>>18px</option>
         </select><br>
         <label for="font_color">Font Color :</label>
         <input type="color" name="font_color" value="<?php echo $font_color;?>"><br>
         <label for="bg_color">Background Color :</label>
         <input type="color" name="bg_color" value="<?php echo $bg_color;?>"><br>
         <input type="submit" value="Apply Preferences">
      </form>
   </body>
</html>