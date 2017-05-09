<?php

namespace FadcoBundle\Services;

use Ob\HighchartsBundle\Highcharts\Highchart;

class ChartCreator
{
    public static $nbChartCreated = 0;

    public function plot($title, $yTitle, $data)
    {
        $ob = new Highchart();
        $ob->chart->renderTo('chart' . self::$nbChartCreated++);
        $ob->chart->type('column');

        $ob->title->text($title);

        $ob->xAxis->type('category');
        $ob->yAxis->min(0);
        $ob->yAxis->title(array(
            'text' => $yTitle,
        ));

        $ob->legend->enabled(false);

        $ob->tooltip->poinFormat($yTitle . ': <b>{point.y}</b>');

        $ob->plotOptions->plotOptions(array(
            "series" => array(
                "dataLabels" => array(
                    "enabled" => true,
                )
            )
        ));

        $series = array(
            "name" => $yTitle,
            "data" => array(),
            "dataLable" => array(
                "enabled" => true
            )
        );

        foreach($data as $item) {
            $serie = array();
            $serie[] = $item["label"];
            $serie[] = (double) $item["value"];

            $series["data"][] = $serie;
        }

        $ob->series(array($series));

        return $ob;
    }

    public function pie($title, $data, $withLegend = false, $options = array())
    {    
        $haveData = false;

        $series = array(
            "name" => $title,
            "data" => array()
        );

        foreach($data as $item) {
            $serie = array();
            $serie["name"] = $item["label"];
            $serie["y"] = (double) $item["value"];
            if ($serie['y'] != 0) {
                $haveData = true;
            }

            $series["data"][] = $serie;
        }

        if (!$haveData) {
            return false;
        }

        $ob = new Highchart();
        $ob->chart->renderTo('chart' . self::$nbChartCreated++);

        $ob->chart->type('pie');
        $ob->chart->plotShadow(false);
        $ob->title->text($title);
        // $ob->subtitle->text($from . '-' . $to);
        
        $ob->tooltip->pointFormat('{series.name}: <b>{point.percentage:.1f}%</b>');

        if ($withLegend) {
            $ob->plotOptions->pie(array(
                'allowPointSelect' => true,
                'cursor' => 'pointer',
                'dataLabels'    => array(
                    'enabled' => false, 
                ),
                'showInLegend' => true
            ));
        } else {
            $ob->plotOptions->pie(array(
                'allowPointSelect' => true,
                'cursor' => 'pointer',
                'dataLabels'    => array(
                    'enabled' => true, 
                    'format' => '{point.name} ({point.y})'
                ),
            ));
        }                

        $ob->series(array($series));

        return $ob;
    }
}