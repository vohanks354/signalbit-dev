<?php

/********************************************************************************* 

 *  This file is part of Camhrms.

 *  Copyright (C) 2014 AAP

 *   

 *  Camhrms is free software: you can redistribute it and/or modify

 *  it under the terms of the GNU General Public License as published by

 *  the Free Software Foundation, either version 3 of the License, or

 *  (at your option) any later version.

 *

 *  Camhrms is distributed in the hope that it will be useful,

 *  but WITHOUT ANY WARRANTY; without even the implied warranty of

 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the

 *  GNU General Public License for more details.

 *

 *  You should have received a copy of the GNU General Public License

 *  along with Camhrms.  If not, see <http://www.gnu.org/licenses/>.

 *

 *  Camhrms Support <support@camhrms.com>

 ********************************************************************************/ 

 

require_once 'application/modules/default/library/sapp/Global.php';



if(!empty($_GET))

{

?>



<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <title>camHRMS</title>

    <meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link rel="shortcut icon" href="public/media/images/mareges.png" />

     <link href="public/media/css/successstyle.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,300,300italic,100italic,100,700italic,900,900italic' rel='stylesheet' type='text/css'>

   

	

</head>

  <body>

      <div class="container" >

     

      	

        

        <div class="content_wrapper" style="min-height:91px;">

            <?php if(sapp_Global::_decrypt($_GET['param']) == 'error'){?>

          		<div class="error_mess">Installation failed,please re-install again.</div>

          	<?php }else if(sapp_Global::_decrypt($_GET['param']) == 'db'){?>	

          		<div class="error_mess">DATABASE GA KONEK BOSS !!!!!</div>

          	<?php }else if(sapp_Global::_decrypt($_GET['param']) == 'tbl'){?>

          		<div class="error_mess">Please install database first to proceed.</div>

          	<?php }?>

        </div>

      </div>

  </body>

</html>

<?php }else{

header("Location: index.php");	

}?>