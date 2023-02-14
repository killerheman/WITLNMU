<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home Menu
    public function index()
    {
        return view('index');
    }

    //About Us Menu
    public function witGlance()
    {
        return view('university_glance');
    }

    public function aboutLnmu()
    {
        return view('about_lnmu');
    }

    public function history()
    {
        return view('history');
    }

    public function visionMission()
    {
        return view('vision_mission');
    }

    //Governance Menu
    public function managingCouncil()
    {
        return view('managing_council');
    }

    public function vcMessage()
    {
        return view('vc_message');
    }

    public function directorDesk()
    {
        return view('director_desk');
    }

    public function committees()
    {
        return view('committees');
    }

    //Approval Menu
    public function aicte()
    {
        return view('aicte');
    }

    public function dstBihar()
    {
        return view('dstbihar');
    }

    public function higherEducation()
    {
        return view('highereducation');
    }

    //Faculty Menu
    public function faculty()
    {
        return view('faculty');
    }

    //Admission Menu
    public function academicProgrammes()
    {
        return view('academic_programme');
    }

    public function feeStructure()
    {
        return view('fee_structure');
    }

    public function reservation()
    {
        return view('reservation');
    }

    //Alumni Menu
    public function alumniList()
    {
        return view('alumini_list');
    }

    public function alumniMessage()
    {
        return view('alumni_message');
    }

    //Facilities Menu
    public function hostel()
    {
        return view('hostel');
    }

    public function nationalKnowledgeNetwork()
    {
        return view('national_knowledge_network');
    }

    public function freeWifi()
    {
        return view('free_wifi');
    }

    public function studentCreditCard()
    {
        return view('student_credit_card');
    }

    //Important Menu
    public function mandatoryDisclosure()
    {
        return view('mandatory_disclosure');
    }

    public function trainingPlacementCell()
    {
        return view('training_placement');
    }

}
