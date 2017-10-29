<?php
/**
 * DashboardBuilder
 *
 * @author Diginix Technologies www.diginixtech.com
 * Support <support@dashboardbuider.net> - https://www.dashboardbuilder.net
 * @copyright (C) 2017 Dashboardbuilder.net
 * @version 1.8.0
 * @license: license.txt
 */

include("inc/dashboard_dist.php");  // copy this file to inc folder 

// for chart #1
$data = new dashboardbuilder(); 
$data->type =  "map";

$data->source =  "Database"; 
$data->rdbms =  "sqlite"; 
$data->servername =  "";
$data->username =  "";
$data->password =  "";
$data->dbname =  "data\country.db";
$data->xaxisSQL[0]=  "SELECT CODE FROM  GDP";
$data->xaxisCol[0]=  "CODE";
$data->yaxisSQL[0]=  "SELECT GDP FROM  GDP";
$data->yaxisCol[0]=  "GDP";
$data->textSQL[0]=  "SELECT COUNTRY FROM  GDP";
$data->textCol[0]=  "COUNTRY";

$data->name = "map";
$data->title = "";
$data->orientation = "";
$data->xaxistitle = "";
$data->yaxistitle = "";
$data->showgrid = "";
$data->showline = "";
$data->height = "";
$data->width = "";

$result[0] = $data->result();?>

<!DOCTYPE html>
<html>
<head>
	<script src="assets/js/dashboard.min.js"></script> <!-- copy this file to assets/js folder -->
	<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap CSS file, change the path accordingly -->
	
</head>
<body> 
<div class="container">
<div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-heading"></div>
	<div class="panel-body">
		<?php echo $result[0];?>
	</div>
</div>
</div>
</div>
</body>