<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;
use App\Models\Service;
use App\Models\Event;
use App\Models\Client;
use App\Models\Insight;
use App\Models\Publication;
use App\Models\Testimonial;
use JeroenDesloovere\VCard\VCard;
use Mail;
use App\Mail\ContactMail;
use App\Mail\TrainingMail;
use Session;



class MasterController extends Controller
{

  public function index()
  {
    $teams = Team::orderBy('listing_order','desc')->get();
    $testimonials = Testimonial::orderBy('listing_order')->orderBy('updated_at','desc')->get();
    $data = compact('teams','testimonials');

        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.index',$data);
        }
        return view('project.index',$data);;
      }


      public function aboutUs()
      {
        if(app()->isLocale('ar')){
          return view('project.arabic.about');
        }
        return view('project.about');
      }


      public function training()
      {  
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.training');
        }
        return view('project.training');
      }

      public function trainingMail(Request $request)
      {  
        $this->validate($request, [
                        'pdf_file' => 'mimes:doc,pdf,docx',
                        ]);
        Mail::to(TrainingMail::getDestinationEmails())->send(new TrainingMail($request));
        if( count(Mail::failures()) > 0 ) {
          Session::flash('status','alert-success');
          Session::flash('message','Sorry!An error occured!'.Mail::failures()[0]);
        } else {
          Session::flash('status','alert-danger');
          Session::flash('message','Thank You! We will contact you soon!');
        }
        return back();
      }


    /*
    service
     */
    public function service()
    {  
      $services = Service::where('is_published',true)
            ->orderBy('listing_order','desc')
            ->orderBy('updated_at','desc')->get();
      $data = compact('services');
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.service',$data);
        }
        return view('project.service',$data);
      }


    /**
     * Events
     * @return view
     */
    public function events()
    {

      $events =  Event::where('is_published',true)
           // ->orderBy('listing_order','desc')
            ->orderBy('published_date','desc')
          //  ->orderBy('updated_at','desc')
            ->get();

      $data=compact('events');
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.events',$data);
        }
        return view('project.events',$data);
      }


    /**
     * Publications
     * @return view
     */
    public function publications()
    {
      $publications = Publication::where('is_published',true)
            ->orderBy('listing_order','desc')
            ->orderBy('updated_at','desc')->get();

      $data=compact('publications');
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.publications',$data);
        }
        return view('project.publications',$data);
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


      public function team()
      {
        $teams=Team::orderBy('listing_order','desc')->get();

        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.team',compact('teams'));
        }
        return view('project.team',compact('teams'));
      }


      public function teamDetails($slug)
      {
        $team=Team::where('slug',$slug)->firstOrFail();

        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.team-details',compact('team'));
        }
        return view('project.team-details',compact('team'));
      }


      public function teamVcard($slug)
      {
        $team=Team::where('slug',$slug)->firstOrFail();
        if($team != null){
        // define vcard
          $vcard = new VCard();
        // define variables
          $lastname = $team->name;
          $firstname = '';
          $additional = '';
          $prefix = '';
          $suffix = '';
        // add personal data
          $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

        // add work data
          $vcard->addCompany(config('whyte.project.name'));
          $vcard->addJobtitle('');
          $vcard->addRole($team->designation);
          $vcard->addEmail($team->email);
          $vcard->addPhoneNumber($team->phone, 'PREF;WORK');
        // $vcard->addPhoneNumber(123456789, 'WORK');
        // $vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium');
        // $vcard->addURL('http://www.jeroendesloovere.be');

          $vcard->addPhoto($team->imageUrl());

        // return vcard as a string
        //return $vcard->getOutput();

        // return vcard as a download
          return $vcard->download();

        // save vcard on disk
        //$vcard->setSavePath('/path/to/directory');
        //$vcard->save();
        }else{
          abort('404');
        }
        return back();
      }


      public function book($slug)
      {
        $publication=Publication::where('slug',$slug)->first();
        if($publication != null){
          $filepath = $publication->pdfUrl();
          $data = compact('filepath');
          return view('project.flipbook',$data);
        }else{
          $filepath = $slug.".pdf";
          $data = compact('filepath');
          return view('project.flipbook',$data);
        }
      }


      public function clients()
      {
        $clients=Client::where('is_published',true)
            ->orderBy('listing_order','desc')
            ->orderBy('updated_at','desc')->get();

        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.clients',compact('clients'));
        }
        return view('project.clients',compact('clients'));
      }


      public function contact()
      {
        if(app()->isLocale('ar')){//only for arabic
          return view('project.arabic.contact');
        }
        return view('project.contact');
      }

      public function contactMail(Request $request)
      {
       Mail::to(TrainingMail::getDestinationEmails())->send(new ContactMail($request));
       if( count(Mail::failures()) > 0 ) {
        Session::flash('status','alert-success');
        Session::flash('message','Sorry!An error occured!'.Mail::failures()[0]);
      } else {
        Session::flash('status','alert-danger');
        Session::flash('message','Thank You! We will contact you soon!');
      }
      return back();
    }

    public function insights()
    {
      $insights= Insight::where('is_published',true)
            ->orderBy('listing_order','desc')
            ->orderBy('updated_at','desc')
            ->paginate(5);

      // $recent=Insight::where('is_published',true)
      // ->whereNotIn('id', $insights->pluck('id'))
      // ->orderBy('updated_at','desc')->take(6)->get();

      $recentInsights = Insight::where('is_published',true)
            ->orderBy('updated_at','desc')
            ->with('author')->get();
      
      // $teams = Team::where('is_published',true)
      // ->orderBy('listing_order','desc')
      // ->get();


      $data = compact('insights','recentInsights');
      if(app()->isLocale('ar'))
      {
        return view('project.arabic.insights',$data);
      }
      return view('project.insights',$data);
    }


    public function insightDetails($slug)
    {
      $insight=Insight::where('slug',$slug)->where('is_published',true)->firstOrFail();

      $recent=Insight::where('is_published',true)->where('id','!=',$insight->id)->orderBy('updated_at','desc')->take(6)->get();

      $data = compact('insight','recent');
      if(app()->isLocale('ar'))
      {
        return view('project.arabic.insight-details',$data);
      }
      return view('project.insight-details',$data);
    }


  }
