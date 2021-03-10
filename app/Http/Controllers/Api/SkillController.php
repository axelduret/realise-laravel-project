<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Skill;

class SkillController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // return Skill::all();
    return Skill::with('heroes')->with('heroes.weapons')->get();
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Skill::create($request->all());
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Skill $skill
   * @return \Illuminate\Http\Response
   */
  public function show($skill)
  {
    return Skill::with('heroes')->with('heroes.weapons')->find($skill);
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Skill $skill
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Skill $skill)
  {
    $skill->update($request->all());
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Skill $skill
   * @return \Illuminate\Http\Response
   */
  public function destroy(Skill $skill)
  {
    $skill->delete();
  }
}
