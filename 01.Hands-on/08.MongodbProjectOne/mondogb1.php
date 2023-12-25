<?php
       // <!-- to check basic ocnnection  -->
        //require_once __DIR__ . '/vendor/autoload.php'; or 
        //require 'vendor/autoload.php';
        //$client = new MongoDB\Client("mongodb://localhost:27017");
        //$companydb = $client->companydb;
        //$result = $companydb -> createCollection('empcollection');
        //var_dump($result);

        //          or 
        //<!-- to retrive the data from mongodb collection -->
        //require 'vendor/autoload.php';
        //$client = new MongoDB\Client("mongodb://localhost:27017");
        //$friends = $client->mytestdb->friends;
        //$result = $friends -> find(array());
        //$data = iterator_to_array($result);
        //var_dump($data);

        //           or
       // <!-- to retrive the data from mongodb collection and display in browser ui-->
require 'vendor/autoload.php';
$client = new MongoDB\Client("mongodb://localhost:27017");
$friends = $client->mytestdb->friends;
$result = $friends -> find(array());
$data = iterator_to_array($result);
//var_dump($data);
?>

<html>
<body>
<table>
    <thead>
        <tr>
            <?php foreach ($data[0] as $key=>$value) : ?>
            <th>
               <?php echo $key; ?>
            </th>
          <?php endforeach; ?>
        </tr>
     </thead>
     <tbody>
        <?php foreach($data as $entry) : ?>
            <tr>
                <?php foreach($entry as $key=>$value) : ?>
                    <td>
                        <?php echo $value; ?>
                    </td>
                    <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
                </tbody>
                </table>
                </body>
                </html>