<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Admin;
use App\User;
use Carbon\Carbon;


class SearchController extends Controller
{
    public function fetch(Request $request)
    {
        if($request->get('queryString'))
        {
            $query = $request->get('queryString');
            // $stocks = DB::table('stocks')->where('number', 'LIKE', '%'.$query.'%')->get();

            // $output = '<ul style="display:block;position:reletive" class="list-unstyled" >';
            // foreach($stocks as $row)
            // {
            //      $output .= '<li class="ml-3">' .$row->number. '</li>';
            //     // $output =  $row->number ;
            // }
            // $output .= '</ul>';
            // echo $output;

            // $data = [];

            //     foreach ($stocks as $key => $value) {
            //         $data [] = [
            //                         'id' => $value->number,
            //                         'value' => $value->brand_id,
            //                         'model' => $value->model
            //                     ];
            //     }
            //  return response()->json($output);

            return $stocks = DB::table('stocks')->where('number', 'LIKE', '%' . $query . '%')->get();
        }
    }

    public function facebook_feed()
    {

        // $config = [
        //     'secret_key' => 'bb073da251e7027987c1a102825eecf2',
        //     'app_id' => '655439795689740',
        //     'page_name' => 'ksvrhospital',
        //     'access_token' => 'EAAJUHngxmQwBABG6BqQvp6EMEgpaSJ2IgPB4DC8hiZBL6gxpuSoNXgdXAsRP6Vbxj8rZCQmCv2VDTrzcB7ZBuQqoA9mF8AC5x6PZCoW9GUfyE2i3M0gqYHE5b1KuHEzZAZA9tSAeYFq2e64KkiyEXEOLXURqHKRz9wbuuwFzD1RXzakhYdLY64x50JZBtUF5DDDx5lZBurPRYAZDZD',
        // ];

        $app_id = "655439795689740";
        $secret = "bb073da251e7027987c1a102825eecf2";
        $access_token = "EAAJUHngxmQwBAPxBHtAQvXu44Ey2CIjnTld0PPP1xmad7DF61DecgZAHkmHomMzZAjc4ne7IypRZCLjSRfPM9kl8EJgAzUNDygUAhihKWvfbC6vNuy3dOZBvkxsdNvBuCbaQvemZA47jDa8iQwU2WZCIbxtwddDYZC5NApotprGyOfsoUhszlQZAZAP8sd18Nq2rJrVFSjfq0zvXkZCfhkIsujqf56OQfdYXoZD";

        $fb = new \Facebook\Facebook([
            'app_id' => $app_id,
            'app_secret' => $secret,
            'default_graph_version' => 'v2.10',
            //'default_access_token' => '{access-token}', // optional
          ]);

          // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
          //   $helper = $fb->getRedirectLoginHelper();
          //   $helper = $fb->getJavaScriptHelper();
          //   $helper = $fb->getCanvasHelper();
          //   $helper = $fb->getPageTabHelper();

          try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $fb->get('/me', $access_token);
          } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
          } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
          }

          $me = $response->getGraphUser();


            // $data = FbFeed::make($config)
            //         ->feedLimit(12)
            //         ->fetch();

            return response()->json($me);

    }
}
