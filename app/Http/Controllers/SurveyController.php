<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MattDaneshvar\Survey\Models\Survey;

class SurveyController extends Controller
{
    public function index() {

        return view('app.survey', ["survey" => Survey::with('sections', 'sections.questions')->get()]);
    }
}
