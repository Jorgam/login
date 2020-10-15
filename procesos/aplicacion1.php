<?php

include '../procesos/conbd.php';
session_start();



?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
   		<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORGANIGRAMA NESA</title>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="../css/organigramacss.css">

  </head>
	 <body class="cuerpo">
	<div class="content">
	  <h1 class="titulo_organigrama">ORGANIGRAMA NESAGAVIRIA</h1>
	  <button onclick="location.href='../index.php'">INICIO</button>

	  
      <hr>
			<figure class="org-chart cf">
			  <ul class="administration">
				<li>					
				  <ul class="director">
					<li>
					  <a href="#"><span>Director</span></a>
					  <ul class="subdirector">
						<li><a href="#"><span>Asistente Director</span></a></li>
					  </ul>
					  <ul class="departments cf">								
            <li><a href="#"><span>Administracion</span></a></li>
						
						<li class="department dep-a">
						  <a href="#"><span>Departamento Cartera Norte</span></a>
						  <ul class="sections">
							<li class="section"><a href="#"><span>Section A1</span></a></li>
							<li class="section"><a href="#"><span>Section A2</span></a></li>
							<li class="section"><a href="#"><span>Section A3</span></a></li>
							<li class="section"><a href="#"><span>Section A4</span></a></li>
							<li class="section"><a href="#"><span>Section A5</span></a>
							
						</li>
						  </ul>
						</li>
						<li class="department dep-b">
						  <a href="#"><span>Departamento Cartera Sur</span></a>
						  <ul class="sections">
							<li class="section"><a href="#"><span>Section B1</span></a></li>
							<li class="section"><a href="#"><span>Section B2</span></a></li>
							<li class="section"><a href="#"><span>Section B3</span></a></li>
							<li class="section"><a href="#"><span>Section B4</span></a></li>
						  </ul>
						</li>
						<li class="department dep-c">
						  <a href="#"><span>Departamento Comercial Norte</span></a>
						  <ul class="sections">
							<li class="section"><a href="#"><span>Section C1</span></a></li>
							<li class="section"><a href="#"><span>Section C2</span></a></li>
							<li class="section"><a href="#"><span>Section C3</span></a></li>
							<li class="section"><a href="#"><span>Section C4</span></a></li>
						  </ul>
						</li>
						<li class="department dep-d">
						  <a href="#"><span>Departamento Comercial Sur</span></a>
						  <ul class="sections">
							<li class="section"><a href="#"><span>Section D1</span></a></li>
							<li class="section"><a href="#"><span>Section D2</span></a></li>
							<li class="section"><a href="#"><span>Section D3</span></a></li>
							<li class="section"><a href="#"><span>Section D4</span></a></li>
							<li class="section"><a href="#"><span>Section D5</span></a></li>
							<li class="section"><a href="#"><span>Section D6</span></a></li>
						  </ul>
						</li>
						<li class="department dep-e">
						  <a href="#"><span>Sede Administrativa Botota</span></a>
						  <ul class="sections">
							<li class="section"><a href="#"><span>Section E1</span></a></li>
							<li class="section"><a href="#"><span>Section E2</span></a></li>
							<li class="section"><a href="#"><span>Section E3</span></a></li>
						  </ul>
						</li>
					  </ul>
					</li>
				  </ul>	
				</li>
			  </ul>			
			</figure>
		</div>				  
	</body>
	</html>

