<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Weapon;

class WeaponController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // return Weapon::all();
    $weapons = Weapon::with('hero')->get();
    return $weapons;
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Weapon::create($request->all());
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Weapon $weapon
   * @return \Illuminate\Http\Response
   */
  public function show(Weapon $weapon)
  {
    return $weapon;
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Weapon $weapon
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Weapon $weapon)
  {
    $weapon->update($request->all());
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Weapon $weapon
   * @return \Illuminate\Http\Response
   */
  public function destroy(Weapon $weapon)
  {
    $weapon->delete();
  }
}
