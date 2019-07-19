<?php
namespace Rigo\Controller;

use Rigo\Types\Course;
use Rigo\Types\Book;

class SampleController{

    public function getHomeData(){
        return [
            'name' => 'Rigoberto'
        ];
    }

    public function getDraftCourses(){
        $query = Course::all([ 'status' => 'draft' ]);
        return $query->posts;
    }

    public function getDraftBooks(){
        $query = Book::all([ 'status' => 'draft' ]);
        return $query->posts;
    }



}
?>