<?php
namespace App\Controllers;
class Pages extends BaseController
{
	public function index()
	{
		$blogs = new \App\Models\Blogs();
		$pubs = new \App\Models\Pubs();

		$blogss= $blogs->orderBy('updated', 'asc')->findAll(3);
		$pub= $pubs->findAll();
		foreach ($blogss as $key => $value) {
			$blogss[$key]['img'] = $this->getFile1($blogss[$key]['img']);
		}
		$data=[
			'blogs' => $blogss,
			'pubs' => $pub,
		];
		echo view('home',$data);
	}

	public function gallery()
	{
		$header_data = [
			'title'=> 'Semiu Bello  Professional and Academic Career (SB-PAC) || Gallery',
			'description'=>"Dr. Semiu Bello adventure in career and professional development across the world, his networking and association with colleagues, communities, institutions and various nationals."
		];
		echo view('header', $header_data);
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

	public function blog()
	{
		$blogs = new \App\Models\Blogs();

		$blogss= $blogs->findAll();
		foreach ($blogss as $key => $value) {
			$blogss[$key]['img'] = $this->getFile1($blogss[$key]['img']);
		}
		
		$header_data = [
			'title'=> '',
			'description'=>""
		];
		$data =[
			'blogs' => $blogss
		];
		echo view('header', $header_data);
		echo view('blog',$data);
		echo view('footer');
	}

	public function details()
	{
		// require('disqusapi/disqusapi.php');

		// $disqus = new DisqusAPI('$secret_key');
		// $disqus->trends->listThreads();

		$blogs = new \App\Models\Blogs();
		$id = $this->request->getGet('id');
		$blogss= $blogs->where('id', $id)->find()[0];
		
		$blogss['img'] = $this->getFile1($blogss['img']);
		
		$header_data = [
			'title'=> '',
			'description'=>""
		];
		$data =[
			'blog' => $blogss
		];
		echo view('header', $header_data);
		echo view('single',$data);
		echo view('footer');
	}

    private function getFile1($id) 
    {
        $files = new \App\Models\Files();
        $f_d = $files->where('id', $id)->find()[0];
        return getenv('directus').$f_d['filename_disk'];
    }

}
