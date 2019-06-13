a-
pour executer le fichier , 
il faut saisir , dans un navigateur,  l'url suivante  : www.fede.fr/ExaminFEDE_Bachelor/ExameFEDE.php
le code n'est pas valide , 

car tout script php  doit etre  dans la zone : <?php ?>
Correction : <?php echo  '<p>avant dernier paragraphe</p>'?>

b- les parties correspondantes du code php sont :
toutes celles entres <?php et ?>
...
c-

<?php 
$tps=9;
echo  "je suis en formation bachelor depuis $tps mois...";
?>

ou 

<?php 
$tps=9;
echo  'je suis en formation bachelor depuis'. $tps.' mois...';
?>