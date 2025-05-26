<?php

 $myfile = "ds_txt";
 $myfilename = fopen($myfile , 'r');
 $size = filesize($myfile);
 $myfile_data = fread($myfilename , $size);

 echo $myfile_data;

 ?>