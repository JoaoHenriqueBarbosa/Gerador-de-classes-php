<?php
$br = "<br>";
$tab = "    ";
$campostxt = 'id;nome;topico_id;status;created_at;updated_at;updated_user;created_user';
$campos = explode(";", $campostxt);
$nome = 'Categoria';


$txtclasse = "class $nome$br";
$txtclasse .= "{".$br;

foreach ($campos as $key => $value) {
    $txtclasse .= $tab."private $".$value.";".$br;
}

$txtclasse .= "".$br;

foreach ($campos as $key => $value) {
    $txtclasse .= $tab."public function get".ucfirst($value)."(){".$br;
    $txtclasse .= $tab.$tab.'return $this->'.$value.";".$br;
    $txtclasse .= $tab."}".$br;
    
    $txtclasse .= $tab."public function set".ucfirst($value).'($'.$value.'){'.$br;
    $txtclasse .= $tab.$tab.'$this->'.$value.' = $'.$value.';'.$br;
    $txtclasse .= $tab."}".$br;
}

$txtclasse .= "}".$br;

echo "<pre>";
echo $txtclasse;
echo "</pre>";