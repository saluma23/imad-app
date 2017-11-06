<?php

$db=pg_connect('host=localhost:5432
               dbname=samohdsalman
               user=samohdsalman
               password=db-samohdsalman-8710
               port=5432');
$query="SELECT * FROM test";
$result=pg_query($query);
if(!$result)
{
echo"problem";
exit();
}
while($myrow=pg_fetch_assoc($result))
{
printf("%s",$myrow['id']);
}
?>
