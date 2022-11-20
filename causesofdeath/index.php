<?php
require_once "data.php";
require_once "row.php";
$statistics = New Data();

$row = -1;
if (($handle = fopen("vtmec-causes-of-death.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000)) !== false) {
        $row++;
        if ($row == 0) {
            $statistics->addHeader(new Row($data[0], $data[1], $data[2], $data[3], $data[4], $data[5]));
            continue;
        }

        $newRow = new Row($data[0], $data[1], $data[2], $data[3], $data[4], $data[5]);
        $statistics->addData($newRow);

    }
    fclose($handle);

    $searchInput = "vardarbīga";

    $percentageOfTotal = "" . round(($statistic->getFoundReportCount($searchInput) / $statistic->getTotalReportCount()) * 100);
    echo "From {$statistic->getTotalReportCount()} reports {$statistic->getFoundReportCount($searchInput)} matched the search." . PHP_EOL;
    echo "Approximately {$percentageOfTotal}%" . PHP_EOL;
}

