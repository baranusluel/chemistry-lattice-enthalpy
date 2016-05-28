<?php
// Some data has been entered manually for convenience/reliability
// Wolfram Alpha gets some things wrong, so data from other sources are entered here
// defining the diatomic atoms$diatomic = array("H", "N", "O", "F", "Cl");// specifiying the electron affinity of oxygen and sulfur b/c they are exceptions$EA = array("O"=>"612","S"=>"345");// atomization enthalpies of elements, from textbook$atomizations = array("H"=>218,"He"=>0,"Li"=>161,"Be"=>321,"B"=>590,"C"=>715,"N"=>473,"O"=>248,"F"=>79.1,"Ne"=>0,"Na"=>109,"Mg"=>150,"Al"=>314,"Si"=>439,"P"=>315,"S"=>223,"Cl"=>121,"Ar"=>0,"K"=>90,"Ca"=>193,"Sc"=>340,"Ti"=>469,"V"=>515,"Cr"=>398,"Mn"=>279,"Fe"=>418,"Co"=>427,"Ni"=>431,"Cu"=>339,"Zn"=>130,"Ga"=>289,"Ge"=>377,"As"=>290,"Se"=>202,"Br"=>112,"Kr"=>0,"Rb"=>85.8,"Sr"=>164,"Y"=>431,"Zr"=>611,"Nb"=>724,"Mo"=>651,"Tc"=>648,"Ru"=>640,"Rh"=>556,"Pd"=>390,"Ag"=>289,"Cd"=>113,"In"=>244,"Sn"=>301,"Sb"=>254,"Te"=>199,"I"=>107,"Xe"=>0,"Cs"=>78.7,"Ba"=>176,"La"=>427,"Hf"=>669,"Ta"=>774,"W"=>844,"Re"=>791,"Os"=>782,"Ir"=>665,"Pt"=>565,"Au"=>369,"Hg"=>60.8,"Tl"=>186,"Pb"=>196,"Bi"=>208,"Po"=>144,"At"=>92,"Rn"=>0,"Fr"=>73,"Ra"=>130);// formation enthalpies of Alkali Metal Halides: http://chemistry.bd.psu.edu/jircitano/format.html
// plus some other sources
$formations = array("LiF"=>-612,"LiCl"=>-409,"LiBr"=>-350,"LiI"=>-271,"NaF"=>-569,"NaCl"=>-411,"NaBr"=>-360,"NaI"=>-288,"KF"=>-562,"KCl"=>-436,"KBr"=>-392,"KI"=>-328,"RbF"=>-549,"RbCl"=>-430,"RbBr"=>-389,"RbI"=>-328,"CsF"=>-531,"CsCl"=>-433,"CsBr"=>-395,"CsI"=>-337,"BaO"=>-553.5,"SrO"=>-592);
?>