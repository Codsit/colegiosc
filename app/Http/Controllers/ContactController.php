<?php namespace App\Http\Controllers;

use Google_Client;
use Google_Service_Drive;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Repositories\ContactRepository;

class ContactController extends Controller {

	/**
	 * Create a new ContactController instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('admin', ['except' => ['create', 'store']]);
		$this->middleware('ajax', ['only' => 'update']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @param  ContactRepository $contact_gestion
	 * @return Response
	 */
	public function index(
		ContactRepository $contact_gestion)
	{
		$messages = $contact_gestion->index();

		return view('back.messages.index', compact('messages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('front.contact');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  App\Repositories\ContactRepository $contact_gestion
	 * @param  ContactRequest $request
	 * @return Response
	 */
	public function store(
		ContactRepository $contact_gestion,
		ContactRequest $request)
	{
		$contact_gestion->store($request->all());

		return redirect('/')->with('ok', trans('front/contact.ok'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  App\Repositories\ContactRepository $contact_gestion
	 * @param  Illuminate\Http\Request $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(
		ContactRepository $contact_gestion,
		Request $request, 		 
		$id)
	{
		$contact_gestion->update($request->input('seen'), $id);

		return response()->json(['statut' => 'ok']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  App\Repositories\ContactRepository $contact_gestion
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(
		ContactRepository $contact_gestion, 
		$id)
	{
		$contact_gestion->destroy($id);
		
		return redirect('contact');
	}

    /**
     * @return string
     */
    public function googledrive()
    {

        define('APPLICATION_NAME', 'filemanager-colegio');
        define('CREDENTIALS_PATH', '/filemanager-colegio.json');
        define('CLIENT_SECRET_PATH', __DIR__ . 'filemanager-colegio.json');
// If modifying these scopes, delete your previously saved credentials
// at ~/.credentials/drive-php-quickstart.json
        define('SCOPES', implode(' ', array(
                Google_Service_Drive::DRIVE_METADATA_READONLY)
        ));


        /**
         * Returns an authorized API client.
         * @return Google_Client the authorized client object
         */
        function getClient() {
            $client = new Google_Client();
            $client->setApplicationName(APPLICATION_NAME);
            $client->setScopes(SCOPES);
            $client->setAuthConfig(CLIENT_SECRET_PATH);
            $client->setAccessType('offline');

            // Load previously authorized credentials from a file.
            $credentialsPath = expandHomeDirectory(CREDENTIALS_PATH);
            if (file_exists($credentialsPath)) {
                $accessToken = json_decode(file_get_contents($credentialsPath), true);
            } else {
                // Request authorization from the user.
                $authUrl = $client->createAuthUrl();
                printf("Open the following link in your browser:\n%s\n", $authUrl);
                print 'Enter verification code: ';
                $authCode = trim(fgets(STDIN));

                // Exchange authorization code for an access token.
                $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

                // Store the credentials to disk.
                if(!file_exists(dirname($credentialsPath))) {
                    mkdir(dirname($credentialsPath), 0700, true);
                }
                file_put_contents($credentialsPath, json_encode($accessToken));
                printf("Credentials saved to %s\n", $credentialsPath);
            }
            $client->setAccessToken($accessToken);

            // Refresh the token if it's expired.
            if ($client->isAccessTokenExpired()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                file_put_contents($credentialsPath, json_encode($client->getAccessToken()));
            }
            return $client;
        }

        /**
         * Expands the home directory alias '~' to the full path.
         * @param string $path the path to expand.
         * @return string the expanded path.
         */
        function expandHomeDirectory($path) {
            $homeDirectory = getenv('HOME');
            if (empty($homeDirectory)) {
                $homeDirectory = getenv('HOMEDRIVE') . getenv('HOMEPATH');
            }
            return str_replace('~', realpath($homeDirectory), $path);
        }

// Get the API client and construct the service object.
        $client = getClient();
        $service = new Google_Service_Drive($client);

// Print the names and IDs for up to 10 files.
        $optParams = array(
            'pageSize' => 10,
            'fields' => 'nextPageToken, files(id, name)'
        );
        $results = $service->files->listFiles($optParams);

        if (count($results->getFiles()) == 0) {
            print "No files found.\n";
        } else {
            print "Files:\n";
            foreach ($results->getFiles() as $file) {
                printf("%s (%s)\n", $file->getName(), $file->getId());
            }
        }
    }
}
