<?php

$dom = new DOMDocument;
$xpath = new DOMXPath($dom);


$root = $dom->createElement('root');
$dom->appendChild($root);

$test = $dom->createElement('test', 'test_value');
$root->appendChild($test);
$test->setAttribute('class', 'test_class');

$test_node = $xpath->query('//*[@class="test_class"]')->item(0);
$test2 = $dom->createElement('test2', $test_node->nodeValue);
$root->appendChild($test2);

echo $dom->saveXML();

//var_dump($test_node->nodeValue);
