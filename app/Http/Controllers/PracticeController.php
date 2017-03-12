<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rych\Random\Random;
use App;
//use Debugbar;

class PracticeController extends Controller {

    /**
    *
    */
    public function practice4() {
        Debugbar::warning('Watch out…');
        dump(config());
    }

    /**
    *
    */
    public function practice3() {
        $random = new Random();
        // Generate a 16-byte string of random raw data
        $randomBytes = $random->getRandomBytes(16);
        dump($randomBytes);
        // Get a random integer between 1 and 100
        $randomNumber = $random->getRandomInteger(1, 100);
        dump($randomNumber);
        // Get a random 8-character string using the
        // character set A-Za-z0-9./
        $randomString = $random->getRandomString(8);
        dump($randomString);
    }
    /**
	*
	*/
    public function practice2() {
        // dumps all the environmental variables from the config directory
        // multi-dimensional array of all the files and their variables
        //dump(config());
        // alternatively this dumps just the app env variables
        //dump(config('app)'));

        dump(config());

        dump($_ENV);
    }
    /**
	*
	*/
    public function practice1() {
        dump('This is the first example.');
    }
    /**
	* ANY (GET/POST/PUT/DELETE)
    * /practice/{n?}
    *
    * This method accepts all requests to /practice/ and
    * invokes the appropriate method.
    *
	*/
    public function index($n) {
        $method = 'practice'.$n;
        if(method_exists($this, $method))
            return $this->$method();
        else
            dd("Practice route [{$n}] not defined");
    }
}
