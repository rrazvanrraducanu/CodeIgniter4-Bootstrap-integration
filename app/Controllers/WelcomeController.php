<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
class WelcomeController extends Controller
{
   public function index(){
           return view('welcome_message');
   }
    public function contact()
        {
            return view('contact');
        }
     public function about()
        {
            return view('about');
        }
     public function products()
        {
            return view('products');
        }

}