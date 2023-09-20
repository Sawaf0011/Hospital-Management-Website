<style>
    .item{
        margin: 10px;
    }

    .owl-theme {
        display: flex;
        text-align: center;

    }

    .owl-filter-bar{
        display: flex;
    }

    .sections {
        color: white;
        text-align: center;
        font-family: Arial, serif;
      background-color: #2552cb;
        padding: 10px;
        transition: 0.5s;
        border-radius: 50px;
        width: fit-content;
        height: fit-content;
    }

    .sections:hover {
        color: white;
        background-color: black;
    }




</style>



<nav class="owl-filter-bar">
    <a href="#" class="item sections" data-owl-filter="*">All</a>
    @foreach($sections as $section)
    <a  href="#" class="item  sections  text-section" data-owl-filter=".sec-{{$section->id}}">{{$section->name}}</a>
    @endforeach
</nav>


<div class="owl-carousel owl-theme">
    @foreach($doctors as $doctor)
        <div class="item sec-{{$doctor->section->id}} man "><a href="{{route('DoctorList.show',$doctor->id)}}"> <h5>{{$doctor->name}}</a>  </h5>
            @if($doctor->image)
            <img src="{{URL::asset('Dashboard/img/doctors/'.$doctor->image->filename)}}">
            @else
                <img src="{{URL::asset('Dashboard/img/doctor_default.png')}}" alt="">
            @endif
        </div>
    @endforeach
</div>



