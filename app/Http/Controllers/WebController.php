<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        $title = "Coir Planet | Natural Coir Geotextiles & Coco Peat UK";
        $description = "Coir Planet is a UK-based manufacturer of natural coir geotextiles, coco peat, coco pods, and mulch mats—sustainably produced in Kerala, India.";
        $keywords = "coir geotextile, natural coir geotextiles, coco peat supplier UK, organic coco peat, coir mulch mat, coco pods, eco friendly coir products, sustainable coir, coir manufacturer India, coir products Kerala, biodegradable geotextile, erosion control mat, coconut coir fibre, coir exporter UK";
        return view('index', compact('title', 'description', 'keywords'));
    }

    function about()
    {
        $title = "Coir Planet | Natural Coir Geotextiles & Coco Peat UK";
        $description = "Coir Planet is a UK-based manufacturer of natural coir geotextiles, coco peat, coco pods, and mulch mats—sustainably produced in Kerala, India.";
        $keywords = "coir geotextile, natural coir geotextiles, coco peat supplier UK, organic coco peat, coir mulch mat, coco pods, eco friendly coir products, sustainable coir, coir manufacturer India, coir products Kerala, biodegradable geotextile, erosion control mat, coconut coir fibre, coir exporter UK";
        return view('about', compact('title', 'description', 'keywords'));
    }

    function contact()
    {
        $title = "Coir Planet | Natural Coir Geotextiles & Coco Peat UK";
        $description = "Coir Planet is a UK-based manufacturer of natural coir geotextiles, coco peat, coco pods, and mulch mats—sustainably produced in Kerala, India.";
        $keywords = "coir geotextile, natural coir geotextiles, coco peat supplier UK, organic coco peat, coir mulch mat, coco pods, eco friendly coir products, sustainable coir, coir manufacturer India, coir products Kerala, biodegradable geotextile, erosion control mat, coconut coir fibre, coir exporter UK";
        return view('contact', compact('title', 'description', 'keywords'));
    }
}
