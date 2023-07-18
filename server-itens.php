<?php

echo json_encode(
	array(
		array(
			"id" => "cg1",
			"categoria" => "bebida",
			"nome" => "Choppinho Gelado",
			"descricao" => "choppinho pilsen no caprixo!",
			"valor" => "18.00",
			"imagem" => "chopp.jpg"
		),
		array(
			"id" => "cg2",
			"categoria" => "bebida",
			"nome" => "Coca-Cola",
			"descricao" => "Copo de 400ml de coquinha gelada com gelo e limão",
			"valor" => "10.00",
			"imagem" => "coca.jpg"
		),
		array(
			"id" => "cg3",
			"categoria" => "bebida",
			"nome" => "Água",
			"descricao" => "Garrafa d'água 500ml crystal.",
			"valor" => "6.00",
			"imagem" => "agua.jpg"
		),
	)
);