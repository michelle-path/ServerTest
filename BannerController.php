<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\Images;
use Image;
use Illuminate\Http\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use DB;
class BannerController extends Controller
{
    
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //show the last banner from the database
        $sql="SELECT a.Username as profilerName, ";
        $sql=$sql." if(isnull(b.id), '', b.id) as id, ";
        $sql=$sql." if(isnull(b.nameofBanner), '', b.nameofBanner) as nameofBanner, ";
        $sql=$sql." if(isnull(b.masterCounter), 0, b.masterCounter) as masterCounter, ";
        $sql=$sql." if(isnull(b.dailyCounter), 0, b.dailyCounter) as dailyCounter, ";
        $sql=$sql." if(isnull(b.description), '', b.description) as description, ";
        $sql=$sql." if(isnull(b.impressionsCounter), 0, b.impressionsCounter) as impressionsCounter, ";
        $sql=$sql." if(isnull(b.status), '', b.status) as status, ";
        $sql=$sql." if(isnull(b.duration), 0, b.duration) as duration, ";
        $sql=$sql." if(isnull(b.size), 0, b.size) as size, ";
        $sql=$sql." if(isnull(b.bannerPlatform), '', b.bannerPlatform) as bannerPlatform, ";
        $sql=$sql." if(isnull(b.bannerType), '', b.bannerType) as bannerType, ";
        $sql=$sql." if(isnull(b.image_file), '', b.image_file) as image_file ";
        $sql=$sql."FROM profiles as a left join banners as b ";
        $sql=$sql."on a.Username = b.profilerName ";
        $sql=$sql."where a.username = '" .Auth::user()->name . "' ";
        $sql=$sql." and ( (!isnull(b.id) and b.id = (select max(b1.id) from banners b1 where b1.profilerName = b.profilerName))";
        $sql=$sql."  or (isnull(b.id)) )";
      
        //echo $sql;    
        $banner = DB::select($sql);

        return view('banner',['banner'=>$banner]); 
    }

    public function viewBanner($id)
    {
        //show banner admin page with all 4 banners (reload) and data for the selected banner 
        return $this->getAllBanners($id);    
    }

    public function bannerAdmin_AllBanners(Request $request)
    {
        //show banner admin page with all 4 banners (reload) 
        return $this->getAllBanners("");

    }

    private function getAllBanners($id)
    {
        //get all 4 banners from the database for the logged in user
        $sql="SELECT b.id as id ";
        $sql=$sql." FROM profiles as a join banners as b ";
        $sql=$sql." on a.Username = b.profilerName ";
        $sql=$sql." where a.username = '" .Auth::user()->name . "' and status = 'Active' ";
        $sql=$sql." order by convert(dailycounter, INTEGER) asc, b.id desc ";
      
        $banners = DB::select($sql);

        $bannerList = '(0 ';
        $i=1;
        foreach ($banners as $b) {
            //show only 4 banners, get the banner id's and then get data for these 4 banners below
            if ($i<=4) {
                $bannerList = $bannerList.' , '.$b->id;
            }
            $i=$i+1;
        }
        $bannerList=$bannerList.')';

        //get data for 4 banners
        $sql="SELECT a.Username as profilerName, ";
        $sql=$sql." if(isnull(b.id), '', b.id) as id, ";
        $sql=$sql." if(isnull(b.nameofBanner), '', b.nameofBanner) as nameofBanner, ";
        $sql=$sql." if(isnull(b.masterCounter), 0, b.masterCounter) as masterCounter, ";
        $sql=$sql." if(isnull(b.dailyCounter), 0, b.dailyCounter) as dailyCounter, ";
        $sql=$sql." if(isnull(b.description), '', b.description) as description, ";
        $sql=$sql." if(isnull(b.impressionsCounter), '', b.impressionsCounter) as impressionsCounter, ";
        $sql=$sql." if(isnull(b.status), '', b.status) as status, ";
        $sql=$sql." if(isnull(b.duration), 0, b.duration) as duration, ";
        $sql=$sql." if(isnull(b.size), 0, b.size) as size, ";
        $sql=$sql." if(isnull(b.bannerPlatform), '', b.bannerPlatform) as bannerPlatform, ";
        $sql=$sql." if(isnull(b.bannerType), '', b.bannerType) as bannerType, ";
        $sql=$sql." if(isnull(b.image_file), '', b.image_file) as image_file ";
        $sql=$sql."FROM profiles as a left join banners as b ";
        $sql=$sql."on a.Username = b.profilerName ";
        $sql=$sql."where a.username = '" .Auth::user()->name . "' ";
        $sql=$sql." and b.status = 'Active' and b.id in ". $bannerList;
        $sql=$sql." order by convert(dailycounter, INTEGER) asc, b.id desc ";
      
        $banners = DB::select($sql);

        $id1 = "";
        $nameofBanner1 = "";    
        $image_file1 = "";
        $description1 = "";
        $id2 = "";
        $nameofBanner2 = "";    
        $image_file2 = "";
        $description2 = "";
        $id3 = "";
        $nameofBanner3 = "";    
        $image_file3 = "";
        $description3 = "";
        $id4 = "";
        $nameofBanner4 = "";    
        $image_file4 = "";
        $description4 = "";

        $i=1;
        //set data for the blade page for the 4 banners
        foreach ($banners as $b) {
            if ($i==1) {
                $id1 = $b->id;
                $nameofBanner1 = $b->nameofBanner;    
                $image_file1 = $b->image_file;
                $description1 = $b->description;
            }
            if ($i==2) {
                $id2 = $b->id;
                $nameofBanner2 = $b->nameofBanner;    
                $image_file2 = $b->image_file;
                $description2 = $b->description;
            }
            if ($i==3) {
                $id3 = $b->id;
                $nameofBanner3 = $b->nameofBanner;    
                $image_file3 = $b->image_file;
                $description3 = $b->description;
            }
            if ($i==4) {
                $id4 = $b->id;
                $nameofBanner4 = $b->nameofBanner;    
                $image_file4 = $b->image_file;
                $description4 = $b->description;
            }

            $i=$i+1;
        }

        //update counters only if there is a refresh (not on update and hence if condition)
        if ($id=="") {
            //update banner counters
            if ($id1!="") {
                $sql="update banners set ";
                $sql = $sql."masterCounter = masterCounter+1, ";
                $sql = $sql."impressionsCounter = impressionsCounter+1, ";
                $sql = $sql."dailyCounter = if(date(updated_at)<CURRENT_DATE,1, dailyCounter+1), ";
                //$sql = $sql."status = if(impressionsCounter+1>=1000,'Archived', 'Active'), ";
                $sql = $sql."updated_at = CURRENT_TIMESTAMP ";
                $sql = $sql." where id = " .$id1;
                DB::update($sql);
            }
            if ($id2!="") {
                $sql="update banners set ";
                $sql = $sql."masterCounter = masterCounter+1, ";
                //$sql = $sql."impressionsCounter = if(impressionsCounter+1>=1000, 1000, impressionsCounter+1), ";
                $sql = $sql."impressionsCounter = impressionsCounter+1, ";
                $sql = $sql."dailyCounter = if(date(updated_at)<CURRENT_DATE,1, dailyCounter+1), ";
                //$sql = $sql."status = if(impressionsCounter+1>=1000,'Archived', 'Active'), ";
                $sql = $sql."updated_at = CURRENT_TIMESTAMP ";
                $sql = $sql." where id = " .$id2;
                DB::update($sql);
            }
            if ($id3!="") {
                $sql="update banners set ";
                $sql = $sql."masterCounter = masterCounter+1, ";
                //$sql = $sql."impressionsCounter = if(impressionsCounter+1>=1000, 1000, impressionsCounter+1), ";
                $sql = $sql."impressionsCounter = impressionsCounter+1, ";
                $sql = $sql."dailyCounter = if(date(updated_at)<CURRENT_DATE,1, dailyCounter+1), ";
                //$sql = $sql."status = if(impressionsCounter+1>=1000,'Archived', 'Active'), ";
                $sql = $sql."updated_at = CURRENT_TIMESTAMP ";
                $sql = $sql." where id = " .$id3;
                DB::update($sql);
            }
            if ($id4!="") {
                $sql="update banners set ";
                $sql = $sql."masterCounter = masterCounter+1, ";
                //$sql = $sql."impressionsCounter = if(impressionsCounter+1>=1000, 1000, impressionsCounter+1), ";
                $sql = $sql."impressionsCounter = impressionsCounter+1, ";
                $sql = $sql."dailyCounter = if(date(updated_at)<CURRENT_DATE,1, dailyCounter+1), ";
                //$sql = $sql."status = if(impressionsCounter+1>=1000,'Archived', 'Active'), ";
                $sql = $sql."updated_at = CURRENT_TIMESTAMP ";
                $sql = $sql." where id = " .$id4;
                DB::update($sql);
            }
        }

        //get details of the 4 banners for display
        $sql="";
        $sql=$sql."Select ".($id1==''?"''":$id1)." as id1, ";
        $sql=$sql."'".($nameofBanner1==''?"":$nameofBanner1)."' as nameofBanner1, ";
        $sql=$sql."'".($image_file1==''?"":$image_file1)."' as image_file1, ";
        $sql=$sql."'".($description1==''?"":$description1)."' as description1, ";
        $sql=$sql.($id2==''?"''":$id2)." as id2, ";
        $sql=$sql."'".($nameofBanner2==''?"":$nameofBanner2)."' as nameofBanner2, ";
        $sql=$sql."'".($image_file2==''?"":$image_file2)."' as image_file2, ";
        $sql=$sql."'".($description2==''?"":$description2)."' as description2, ";
        $sql=$sql.($id3==''?"''":$id3)." as id3, ";
        $sql=$sql."'".($nameofBanner3==''?"":$nameofBanner3)."' as nameofBanner3, ";
        $sql=$sql."'".($image_file3==''?"":$image_file3)."' as image_file3, ";
        $sql=$sql."'".($description3==''?"":$description3)."' as description3, ";
        $sql=$sql.($id4==''?"''":$id4)." as id4, ";
        $sql=$sql."'".($nameofBanner4==''?"":$nameofBanner4)."' as nameofBanner4, ";
        $sql=$sql."'".($image_file4==''?"":$image_file4)."' as image_file4, ";
        $sql=$sql."'".($description4==''?"":$description4)."' as description4 ";
  
        //echo $sql;
        $banners = DB::select($sql);
        //echo $id1;
        if ($id1 =='') {

            $sql="SELECT  ";
            $sql=$sql." '' as id, ";
            $sql=$sql." '' as nameofBanner, ";
            $sql=$sql." 0 as masterCounter, ";
            $sql=$sql." 0 as dailyCounter, ";
            $sql=$sql." '' as description, ";
            $sql=$sql." 0 as impressionsCounter, ";
            $sql=$sql." '' as status, ";
            $sql=$sql." '' as duration, ";
            $sql=$sql." 0 as size, ";
            $sql=$sql." '' as bannerPlatform, ";
            $sql=$sql." '' as bannerType ";
        }
        else {
            $sql="SELECT  ";
            $sql=$sql." if(isnull(b.id), '', b.id) as id, ";
            $sql=$sql." if(isnull(b.nameofBanner), '', b.nameofBanner) as nameofBanner, ";
            $sql=$sql." if(isnull(b.masterCounter), 0, b.masterCounter) as masterCounter, ";
            $sql=$sql." if(isnull(b.dailyCounter), 0, b.dailyCounter) as dailyCounter, ";
            $sql=$sql." if(isnull(b.description), '', b.description) as description, ";
            $sql=$sql." if(isnull(b.impressionsCounter), '', b.impressionsCounter) as impressionsCounter, ";
            $sql=$sql." if(isnull(b.status), '', b.status) as status, ";
            $sql=$sql." if(isnull(b.duration), 0, b.duration) as duration, ";
            $sql=$sql." if(isnull(b.size), 0, b.size) as size, ";
            $sql=$sql." if(isnull(b.bannerPlatform), '', b.bannerPlatform) as bannerPlatform, ";
            $sql=$sql." if(isnull(b.bannerType), '', b.bannerType) as bannerType ";
            $sql=$sql." FROM banners as b ";
            $sql=$sql." where id = ".($id==''?$id1:$id);
        }
        //echo $sql;    
        $banner = DB::select($sql);
        return view('banneradmin',['banners'=>$banners, 'banner'=>$banner]); 

//        return view('banneradmin',['banners'=>$banners]); 
    }

    /**
     * Create a new banner application 
     *
     * @param  array  $request
     * @return \App\banner
     */
    protected function store(Request $request)
    {
        $nameofBanner = $request['nameofBanner'];
        $profilerName = $request['profilerName'];
        $masterCounter = $request->input('masterCounter');
        $dailyCounter = $request->input('dailyCounter');
        
        $description = $request->input('description');
        if ($description == "") {
            $description = ' ';
        }
        
        $impressionsCounter = $request->input('impressionsCounter');
        $status = $request->input('status');
        $duration = $request->input('duration');
        $size = $request->input('size');

        $bannerPlatform = $request->input('bannerPlatform');
        if ($bannerPlatform=="") {
            $bannerPlatform = ' ';
        }

        $bannerType = $request->input('bannerType');
        if ($bannerType == "") {
            $bannerType = ' ';
        }
        
        $image_file = $request->file('bannerImage');
        
        $image_size = $image_file->getSize();
        if ($image_size == "") {
            $image_size =0;
        }
        
        $image_ext = $image_file->getClientOriginalExtension();

        $new_image_name = time().'.'.$image_ext;
        $destination_path = public_path('/images');
        $image_file->move($destination_path, $new_image_name);
        
        
        \App\banners::create([
            'nameofBanner' => $nameofBanner,
            'profilerName' => $profilerName,
            'masterCounter' => 0,
            'dailyCounter' => 0,
            'description' => $description,
            'impressionsCounter' => 0,
            'status' => 'Active',
            'duration' => $duration,
            'size' => $size,
            'bannerPlatform' => $bannerPlatform,
            'bannerType' => $bannerType,
            'image_file' => '/images/'.$new_image_name

          ]);
  

          return redirect('/banner')->with('status', 'Banner created successfully!');

    }

    protected function UpdateBanner(Request $request)
    {
        $id = $request['updateID'];

        $nameofBanner = $request['nameofBanner'];
        $profilerName = $request['profilerName'];
        $masterCounter = $request->input('masterCounter');
        $dailyCounter = $request->input('dailyCounter');
        $description = $request->input('description');
        $impressionsCounter = $request->input('impressionsCounter');
        $status = $request->input('status');
        $duration = $request->input('duration');
        $size = $request->input('size');
        $bannerPlatform = $request->input('bannerPlatform');
        $bannerType = $request->input('bannerType');

        
        $sql="update banners set ";
        $sql=$sql." description ='".$description."', ";
        $sql=$sql." status ='".$status."', ";
        $sql=$sql." duration ='".$duration."', ";
        $sql=$sql." size ='".$size."', ";
        $sql=$sql." bannerPlatform ='".$bannerPlatform."', ";
        $sql=$sql." bannerType ='".$bannerType."' ";
        $sql=$sql." where id = ".$id;
                
        DB::update($sql);

        return ($this->getAllBanners($id))->with('status', 'Banner updated successfully!');    

    }

}

