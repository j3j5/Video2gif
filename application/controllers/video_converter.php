<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video_converter extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function convert()
	{
		$video_filename = "video.flv";
		$image_filename = "image.gif";
		// 		$this->load->library('youtubegrabber');
		if(!$this->input->post('url'))
		{
			echo 'no url!';
		}
		else
		{
			$url = $this->input->post('url');
		}

		if(!$this->input->post('start'))
		{
			$start = "";
		}
		else
		{
			$start = "-ss " . $this->input->post('start') . " ";
		}

		if(!$this->input->post('duration'))
		{
			$duration = "";
		}
		else
		{
			$duration = "-t " . $this->input->post('duration') . " ";
		}

		if(!$this->input->post('quality'))
		{
			$quality = "";
		}
		elseif($this->input->post('quality') !== 'sameq')
		{
			$quality = "-s " . $this->input->post('quality') . " ";
		}
		else
		{
			$quality = "-" . $this->input->post('quality');
		}

		require_once(dirname(__FILE__) . '/../libraries/Youtube_grabber.php');
		$youtubegrabber = new youtubegrabber($url, 'temp/' . $video_filename, 0);

		$extract_frames = "ffmpeg -i \"temp/$video_filename\" -r 5 $quality $start $duration -f image2 temp/image-%3d.jpeg";
		exec($extract_frames);

		$convert2gif = "convert temp/*.jpeg images/$image_filename";
		exec($convert2gif);

		$delete_video = "rm temp/$video_filename";
		exec($delete_video);

		$delete_frames = "rm temp/*.jpeg";
		exec($delete_frames);

		$this->load->helper('url_helper');
		redirect("/images/$image_filename");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */