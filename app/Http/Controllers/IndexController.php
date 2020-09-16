<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\NewsCategory;
use App\Models\Newz;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $ads = Ad::all();
          
        // analitika -> aktual
        $acategory = Category::where('id',16)->first();
        $adata = NewsCategory::where('cat_id', 16)->get();
        $analitikas = null;
        if (!$adata->isEmpty()) {
            foreach ($adata as $analitika) {
                $anews[] = $analitika->news_id;
            }
            $analitikas = Newz::whereIn('id', $anews)->orderBy('id', 'DESC')->take(5)->get();
        }
        // dahilerden kelamlar
        $dahcategory = Category::where('id',19)->first();
        $dahdata = NewsCategory::where('cat_id', 19)->get();
        $dahilerdenkelamlar = null;
        if (!$dahdata->isEmpty()) {
            foreach ($dahdata as $dahilerdenkelamla) {
                $dahnews[] = $dahilerdenkelamla->news_id;
            }
            $dahilerdenkelamlar = Newz::whereIn('id', $dahnews)->orderBy('id', 'DESC')->take(1)->get();
        }

          // könüllülər
          $koncategory = Category::where('id',20)->first();
          $kondata = NewsCategory::where('cat_id', 20)->get();
          $konulluler = null;
          if (!$kondata->isEmpty()) {
              foreach ($kondata as $konullule) {
                  $konnews[] = $konullule->news_id;
              }
              $konulluler = Newz::whereIn('id', $konnews)->orderBy('id', 'DESC')->take(1)->get();
          }
        
        // tehlil
        $tehcategory = Category::where('id',1)->first();
        $tehdata = NewsCategory::where('cat_id', 1)->get();
        $tehliller = null;
        if (!$tehdata->isEmpty()) {
            foreach ($tehdata as $tehlillers) {
                $tehnews[] = $tehlillers->news_id;
            }
            $tehliller = Newz::whereIn('id', $tehnews)->orderBy('id', 'DESC')->first();

        }
        /*
            $tehliller, $tehcategory
        */
         // tehlil
         $muscategory = Category::where('id',15)->first();
         $musdata = NewsCategory::where('cat_id', 15)->get();
         $musahibeler = null;
         if (!$musdata->isEmpty()) {
             foreach ($musdata as $musahibelers) {
                 $musnews[] = $musahibelers->news_id;
             }
             $musahibeler = Newz::whereIn('id', $musnews)->orderBy('id', 'DESC')->first();
 
         }
       
        // serhler
        $serhcat = Category::where('id',14)->first();
        $serhdata = NewsCategory::where('cat_id', 14)->get();
        $serhler = null;
        if (!$serhdata->isEmpty()) {
            foreach ($serhdata as $serhlers) {
                $serhnews[] = $serhlers->news_id;
            }
            $serhler = Newz::whereIn('id', $serhnews)->orderBy('id', 'DESC')->first();
        }
     
        /*
            $iqtisadiyyatlar, $iqtcategory        
        */
        //medeniyyet
        $mcategory = Category::where('id',7)->first();
        $mdata = NewsCategory::where('cat_id', 7)->get();
        $medeniyyet = null;
        if (!$mdata->isEmpty()) {
            foreach ($mdata as $medeniyyets) {
                $mnews[] = $medeniyyets->news_id;
            }
            $medeniyyet = Newz::whereIn('id', $mnews)->orderBy('id', 'DESC')->first();

        }
        
        // tarixi faktlar -> Azərbaycanı tanıdaq
        $tarcategory = Category::where('id',10)->first();
        $tardata = NewsCategory::where('cat_id', 10)->get();
        $tarixifaktlar = null;
        if (!$tardata->isEmpty()) {
            foreach ($tardata as $tarixifaktlars) {
                $tarnews[] = $tarixifaktlars->news_id;
            }
            $tarixifaktlar = Newz::whereIn('id', $tarnews)->orderBy('id', 'DESC')->take(8)->get();
        }

        // Cəmiyyət və aktual problemlər
        $camcategory = Category::where('id',11)->first();
        $camdata = NewsCategory::where('cat_id', 11)->get();
        $cemiyyetve = null;
        if (!$camdata->isEmpty()) {
            foreach ($camdata as $cemiyyetves) {
                $camnews[] = $cemiyyetves->news_id;
            }
            $cemiyyetve = Newz::whereIn('id', $camnews)->orderBy('id', 'DESC')->take(8)->get();
        }

        // Cəmiyyət və aktual problemlər
        $qyoxcategory = Category::where('id',23)->first();
        $qyoxdata = NewsCategory::where('cat_id', 23)->get();
        $qyox = null;
        if (!$qyoxdata->isEmpty()) {
            foreach ($qyoxdata as $qyoxs) {
                $qyoxnews[] = $qyoxs->news_id;
            }
            $qyox = Newz::whereIn('id', $qyoxnews)->orderBy('id', 'DESC')->take(5)->get();
        }

        $millimenevi = Category::where('id',21)->first();
        $mecelle = Category::where('id',22)->first();
   
        $categories = Category::all();
        return view('index', compact('ads', 'analitikas','acategory','tehliller','tehcategory','serhler','serhcat',
        'tarixifaktlar','tarcategory','camcategory','cemiyyetve','categories','medeniyyet','mcategory','muscategory','musahibeler',
        'dahcategory', 'dahilerdenkelamlar', 'koncategory', 'konulluler', 'millimenevi', 'mecelle', 'qyox', 'qyoxcategory'));
    }   
}
