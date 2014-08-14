<div class="container-inline">
<?php
$replace_button = 'type="image" src="'. base_path (). path_to_theme() . '/images/search_button.jpg" alt="Submit"';
$search["search_theme_form"]=str_replace('value=""', 'value="Enter your search term..." onblur="setTimeout(\'closeResults()\',2000); if (this.value == \'\') {this.value = \'\';}"  onfocus="if (this.value == \'Enter your search term...\') {this.value = \'\';}" ', $search["search_theme_form"]);
$search["submit"] = str_replace('type="submit"', $replace_button, $search["submit"]);
$search["submit"] = str_replace('type="submit"', $replace_button, $search["submit"]);
  print $search["search_theme_form"];
  print $search["submit"];
  print $search["hidden"];  
?>
</div>