<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{



   public function index(){

     $titulo='Welcome to the frontpage';

   	return view('pages.index',compact('titulo'));}


   public function about(){

   $titulo='welcome to the about page';
   	return view('pages.about')-> with('titulo',$titulo);}


   public function service(){
   	$data= array('titulo' => 'services','services'=>['amor','paixao','ternura']);


   	return view('pages.service')->with($data);}

}
