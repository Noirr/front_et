<?php 

class DATA
{
	public function get_data( $suf )
	{
		$url = API_URL.$suf;
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt( $ch, CURLOPT_URL, $url);
		$content = curl_exec( $ch );
		curl_close( $ch );
		$content = json_decode( $content, true );
		return $content;
	}
	public function get_site_by_slug( $slug )
	{
		$suf = "pages?slug=".$slug;
		$single = $this->get_data( $suf );
		return $single[0];
	}
	public function get_single( $type, $id )
	{
		$suf = $type."/".$id;
		$single = $this->get_data( $suf );
		return $single;
	}	
	public function get_data_by_url( $url )
	{
		$list = $this->get_data( $url );
		return $list;
	}
	public function get_list( $type, $count, $page = 1, $status = "publish" )
	{
		$suf = $type.'/?per_page='.$count.'&page='.$page."&filter[post_status]=".$status;
		$list = $this->get_data( $suf );
		return $list;
	}
	public function get_by_post_id( $type, $post_id )
	{
		$suf = $type."?post=".$post_id;
		$list = $this->get_data( $suf );
		return $list;
	}
	public function get_count_by_type( $type )
	{
		$suf = $type."?per_page=100";
		$list = $this->get_data( $suf );
		$count = count( $list );
		return $count;
	}
	public function create_post($post, $file)
	{
		printuj($post);
		printuj($file);
		

		$username = API_LOGIN;
		$password = API_PASSWORD;
		$rest_api_url = API_URL."posts";

		$data_string = json_encode([
			'title'    => $post["title"],
			'status'   => 'draft',
			//'featured_media' => $images[$rand_key]
		]);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $rest_api_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Content-Type: application/json',
			'Content-Length: ' . strlen($data_string),
			'Authorization: Basic ' . base64_encode($username . ':' . $password),
			'Content-Disposition: attachment; filename='.$file["file"]["name"],
		]);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);

		curl_close($ch);

		if ($result) {
			printuj($result);
			echo $result;
		} else {
			echo "NIE UDALO SIE:";
		}
	}

}



?>