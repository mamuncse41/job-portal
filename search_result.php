<?php

include_once ("vendor/autoload.php");
use App\finalproject\search\search;
$cllass_obj=new search();
if(empty($_POST['']))
$data=$cllass_obj->setSearch($_POST)->search();
header('location:index.php');

?>


<form>
    <table>
        <thead>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        <thead>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </thead>

        </tbody>

    </table>
</form>
