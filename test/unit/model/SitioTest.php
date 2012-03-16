<?php 

$t->comment('->getLuceneQuery()');
$sitio = create_sitio(array('titulo' => 'katy', 'texto' => 'perry'));
$sitio->save();
 
$sitios = SitioPeer::getLuceneQuery('titulo:katy');
$t->is(count($sitios), 0, '::getLuceneQuery() does not return non sitio');
 
$sitio = create_sitio(array('titulo' => 'katy', 'texto' => 'perry'));
$sitio->save();
 
$sitios = SitiosPeer::getLuceneQuery('titulo:katy');
$t->is(count($sitios), 1, '::getForLuceneQuery() returns jobs matching the criteria');
$t->is($sitios[0]->getId(), $sitio->getId(), '::getForLuceneQuery() returns jobs matching the criteria');
 
$sitio->delete();
 
$sitios = SitioPeer::getLuceneQuery('titulo:katy');
$t->is(count($sitios), 0, '::getForLuceneQuery() does not return delete jobs');