<?php
namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Client;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Publication;
use Image;

class MasterController extends Controller
{
    /*
    Index page
     */
    public function index()
    {
      $teams = Team::all();
      // $testimonials = Testimonial::all();

      $data = compact('teams');
        // if(app()->isLocale('ar')){//only for arabic
        //   return view('project.arabic.index',$data);
        // }
        return view('project.index',$data);;
      }

    /*
    About us
     */
    public function aboutUs()
    {
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.about');
        }
        return view('project.about');
      }

    /*
    training
     */
    public function training()
    {  
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.training');
        }
        return view('project.training');
      }

    /*
    service
     */
    public function services()
    {  
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.services');
        }
        return view('project.services');
      }


    /**
     * Events
     * @return view
     */
    public function events()
    {


      $event = Event::getEvent();
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.events',['events' => $event]);
        }
        return view('project.events',['events' => $event]);
      }


    /**
     * Publications
     * @return view
     */
    public function publications()
    {
      $publications = Publication::getPublication();

        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.publications',compact('publications'));
        }
        return view('project.publications',compact('publications'));
      }

    // publication by using slug

      public function publication($slug=null)
      {
        $publications = Publication::getPublicationBySlug($slug);

       
        return view('project.publication-inner',compact('publications'));
      }

    /**
     * News room
     * @return view
     */
    public function newsroom()
    {
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.newsrooms');
        }
        return view('project.newsrooms');
      }

    /**
     * corporate responsibility
     * @return view
     */
    public function corporate()
    {
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.corporate-responsibility');
        }
        return view('project.corporate-responsibility');
      }

    /**
     * Team
     * @return view
     */
    public function team()
    {
      $teams=Team::all();

        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.team',compact('teams'));
        }
        return view('project.team',compact('teams'));
      }

    /**
     * clients
     * @return view
     */
    public function clients()
    {
      $clients=Client::getClient();

        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.clients',compact('clients'));
        }
        return view('project.clients',compact('clients'));
      }

    /**
     * contact us
     * @return view
     */
    public function contactUs()
    {
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.contact');
        }
        return view('project.contact');
      }

    /* 
    
    blog 
    @return view

    */

    public function blog()
    {
      $result= Blog::getBlog();
      $recent = Blog::recentBlogs();
      if(app()->isLocale('ar'))
            {//only for arabic
              return view('project.arabic.blog',['blogs' => $result ,'recent' => $recent]);
            }
            return view('project.blog',['blogs' => $result ,'recent' => $recent]);
          }


        }
