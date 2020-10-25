<?php namespace App\Controllers;

class Drbello extends BaseController
{
	public function index()
	{
		$data=[
			'test'=> env('app.baseURL'),
		];
		echo view('home',$data);
	}

	public function gallery()
	{
		echo view('header');
		echo view('gallery');
		echo view('footer');
	}

	public function testimonial()
	{
		$header_data = [
			'title'=> 'Semiu Bello  Professional and Academic Career (SB-PAC) || Testimonials',
			'description'=>"Dr. Semiu Bello's acceptance, admiration, support, mentorship, compliments, testimonials from teachers, senior colleagues, mentors and  colleagues. Dr. Semiu Bello's goodwill."
		];
		echo view('header', $header_data);
		echo view('testimonial');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
