<?php
declare(strict_types=1);
require_once dirname(__FILE__) . '/PdoConditions.php';
require_once dirname(__FILE__) . '/PdoCondition.php';
require_once dirname(__FILE__) . '/PdoExecutor.php';
require_once dirname(__FILE__) . '/functions.php';

$pdo = connect();
$sql = 'select * from books where title and :title and publisher in (:publisher)';
$conditions = new PdoCondition();
$conditions = add(new PdoCondition(':title','%料理%',PDO::PARAM_STR));
$conditions = add(new PdoCondition(':publishers',['料理評論社','ワールド出版社'],PDO::PARAM_STR));
$executor = new Pdo
