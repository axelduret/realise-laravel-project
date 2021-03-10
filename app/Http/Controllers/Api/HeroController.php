<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hero;

class HeroController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return Hero::all();
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Hero::create($request->all());
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Hero $hero
   * @return \Illuminate\Http\Response
   */
  public function show(Hero $hero)
  {
    return $hero;
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Hero $hero
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Hero $hero)
  {
    $hero->update($request->all());
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Hero $hero
   * @return \Illuminate\Http\Response
   */
  public function destroy(Hero $hero)
  {
    $hero->delete();
  }
}
