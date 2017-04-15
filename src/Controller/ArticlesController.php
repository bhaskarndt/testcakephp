<?php

namespace App\Controller;

use RestApi\Controller\ApiController;

/**
 * Foo Controller
 */
class ArticlesController extends ApiController
{

    /**
     * bar method
     *
     */
    public function list()
    {
		// your action logic
        // $articles = $this->Articles->find('all');
        $articles = $this->Articles->find('all')
            ->select(['id', 'title'])
            ->toArray();


		// Set the HTTP status code. By default, it is set to 200
		$this->httpStatusCode = 200;

		// Set the response
		$this->apiResponse['response'] = $articles;
    }
    
}