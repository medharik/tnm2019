
a-
select  nom from produit where marque like 'IBM'
b-
select * from client where nom like '_A%'
c-
select * from produit where prix between 5000 and 12000
d-
select * from produit where marque like 'IBM' and prix <12000
e-
select client.nom from client , produit , vente
where client.IdCli=vente.IdCli and 
produit.IdPro=vente.IdPro
and produit.nom = 'PS1'
f-
select count(*) from client 
where IdCli in (select idcli from vente)

g-
select marque from produit 
group by marque having avg(prix) < 5000


